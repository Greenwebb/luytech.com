<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsInquiry;
use App\Mail\OrderPaid;
use App\Mail\QuoteFinalized;
use App\Mail\QuoteReceived;
use App\Mail\QuoteReceivedAdmin;
use App\Models\Car;
use App\Models\Consignment;
use App\Models\ContactInquiry;
use App\Models\Good;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;
use Mail;

class RequestController extends Controller
{
    
    // ----- Views --------------------------------
    public function orders(){
        return view("modules.requests.orders");
    }
    public function inquiries(){
        $inquiries = ContactInquiry::orderBy('created_at', 'desc')->get();
        return view("modules.requests.inquiries",[
            "inquiries"=> $inquiries
        ]);
    }
    public function quotes(){
        $quotes = Consignment::with(['user','cars','goods'])
                            ->orderBy('created_at', 'desc')
                            ->get();
    
        return view("modules.requests.quotes", [
            "quotes" => $quotes
        ]);
    }
    



    // ----- Storage --------------------------------
    public function storeContact(Request $request){
            try {
                // Validate the incoming request data
                $data = $request->validate([
                    'full_name' => 'required|string|max:255',
                    'email'     => 'required|email|max:255',
                    'phone'     => 'required|string|max:50',
                    'province'  => 'required|string|max:255',
                    'contact_message'   => 'required|string',
                ]);
        
                // Create a new inquiry record in the database
                $inquiry = ContactInquiry::create($data);
                // dd($data['email']);
                Mail::to('info@luytechzm.com')->send(new ContactUsInquiry($inquiry));
                // After saving to the database, you can implement additional logic 
                // like sending an email notification if needed.
        
                // Return a response. This can be a redirect or a JSON response 
                // depending on how you want to handle it on the frontend.
                // Here, I'll return a JSON response for simplicity.
                return response()->json(['message' => 'Inquiry submitted successfully, We will get back to you shortly!']);
            } catch (\Throwable $th) {
                dd($th);
            }
        
    }

    public function storeQuote(Request $request){
        // dd($request);
        try {
            $file = $this->uploadFile($request);
            // Create the User
            $user = User::where('email', $request->input('email'))->first();
            // dd($user);
            if ($user == null) {
                $user = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make('ABC0123'),
                    'fname' => $request->input('fname'),
                    'lname' => $request->input('lname'),
                    'address' => $request->input('address'),
                    'phone' => $request->input('tel')
                ]);
            }

            
            // Create Consignment
            $consignment = Consignment::create([
                'consignment_type' => $request->input('purpose'),
                'message' => $request->input('message'),
                'user_id' => $user->id,
                'company_name' => $request->input('company_name') ?? null,
                'terms' => $request->input('termsAgreementSummary') ?? null,
                'num_installments' => $request->input('installment_duration'),
                'payment_method' => $request->input('payMethod'),
                'product_type' => $request->input('product_type'),
                'service_type' => $request->input('service_type'),
                'installment_duration' => $request->input('installment_duration'),
                'delivery_town' => $request->input('delivery_town'),
                'delivering_from' => $request->input('delivering_from'),
                'file' => $file
            ]);

            if(!empty($request->input('clearing_from'))){
                $consignment->clearing_from = $request->input('clearing_from');
                $consignment->message = $request->input('message');
                $consignment->save();
            }

            if($request->input('product_type') == 'vehicle'){
                $consignment->num_of_vehicles = $request->input('numCars');
                $consignment->message = $request->input('message');
                $consignment->save();

                // Create Car
                foreach ($request->input('carMake') as $key => $data) {
                    Car::create([
                        'car_make' => $request->input('carMake')[$key],
                        'car_model' => $request->input('carModel')[$key],
                        'fuel' => $request->input('fuel')[$key],
                        'transmission' => $request->input('transmission')[$key],
                        'car_year' => $request->input('carYear')[$key],
                        'consignment_id' => $consignment->id,
                        'engine_cc' => $request->input('carEngineCC')[$key],
                        'car_color' => $request->input('carColor')[$key]
                    ]);
                } 
            }else{
                $consignment->num_goods = $request->input('numGoods');
                $consignment->save();

                // Create Goods
                foreach ($request->input('goodsName') as $key => $data) {
                    Good::create([
                        'name' => $request->input('goodsName')[$key],
                        'size' => $request->input('goodsSize')[$key],
                        'qty' => $request->input('goodsQty')[$key],
                        'packaging' => $request->input('packaging')[$key],
                        'consignment_id' => $consignment->id
                    ]);
                }
            }          
            

            $quote = Consignment::with(['user','cars','goods'])->where('id', $consignment->id)->first();
            // dd($quote);
            // Email User
            Mail::to($user->email)->send(new QuoteReceived($quote));
            // Email Administrator
            $adminEmail = 'admin@luytechzm.com'; // Replace with the admin's email
            Mail::to($adminEmail)->send(new QuoteReceivedAdmin($quote));

            return response()->json(['ok' => 'Quote submission is complete and successful, We will get back to you shortly!']);
        } catch (\Throwable $th) {
            return response()->json(500);
        }
    }

    public function uploadFile($request){
        if ($request->hasFile('invoice')) {
            $file = $request->file('invoice');

            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public'); // Store the file in the public/uploads directory

            return $fileName;
        }
    }
    public function uploadFile2($request){
        if ($request->hasFile('invoice_file')) {
            $file = $request->file('invoice_file');

            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('uploads', $fileName, 'public'); // Store the file in the public/uploads directory

            return $fileName;
        }
    }




    // ----- Details --------------------------------
    public function showQuote($id){
        $q = Consignment::with(['user','cars','goods'])->where('id', $id)->first();
        // dd($q);
        return view("modules.requests.quote_details",[
            "q"=> $q
        ]);
    }

    public function replyQuote($id){
        $q = Consignment::with(['user','cars','goods'])->where('id', $id)->first();
        return view("modules.requests.quote_reply",[
            "q"=> $q
        ]);
    }
    public function showContact($id){
        $c = ContactInquiry::where('id', $id)->first();
        return view("modules.requests.inquiry_details",[
            "c"=> $c
        ]);
    }

    public function replySend(Request $request){
    
        try {
            // dd($request);
            // $file = $this->uploadFile2($request);
            $total = 0;
            $quote = Consignment::with(['user','cars','goods'])->where('id', $request->toArray()['consignment_id'])->first();
            
            if($quote->product_type == 'vehicle'){
                // Set the cost for each car
                foreach ($request->toArray()['car_id'] as $key => $car) {
                    $total += (float)$request->toArray()['car_cost'][$key];
                    Car::where('id', $car)->update(['cost'=> $request->toArray()['car_cost'][$key]]);
                }
            }else{
                // Set the cost for each goods
                foreach ($request->toArray()['goods_id'] as $key => $g) {
                    $total += (float)$request->toArray()['goods_cost'][$key];
                    Good::where('id', $g)->update(['cost'=> $request->toArray()['goods_cost'][$key]]);
                }
            }

            // Set the total price for consignment
            Consignment::where('id', $request->toArray()['consignment_id'])->update([
                'price' => $total,
                'current_state' => 2,
                'status' => 1,
                // 'inv_file' => $file 
            ]);
            
            // Send Email to Users
            Mail::to($quote->user->email)->send(new QuoteFinalized($quote));
            $adminEmail = 'admin@luytechzm.com'; // Replace with the admin's email
            Mail::to($adminEmail)->send(new QuoteFinalized($quote));
            // dd('okay');
            return response()->json(['message' => 'Quote submission is complete and successful']);
        } catch (\Throwable $th) {
            dd($th);
        }

    }

    function generateUniqueNumber() {
        $a = rand(100000, 9999999);
        $b = rand(10000, 9999999);
        return rand($a, $b);
    }


    public function quoteShipped($id) {
        try {
            $cons = Consignment::where('id', $id)->update([
                'current_state' => 3,
                'order_number' => $id.$this->generateUniqueNumber(), // for 5 to 7 digit numbers
                'tracking_id' => $this->generateUniqueNumber(), 
            ]);
            // Send email to user of Tracking and Order number
            $quote = Consignment::with(['user','cars','goods'])->where('id', $id)->first();
            Mail::to($quote->user->email)->send(new OrderPaid($quote));
            return redirect()->back()->with('success','Consignment has been paid by customer');
        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error','Operation Failed');
        }
    }
    public function quoteOrdered($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 4,
            'status' => 500
        ]);
        return redirect()->back()->with('success','Consignment has been ordered from seller');
    }
    public function quoteLeftOrigin($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 5
        ]);
        return redirect()->back()->with('success','Consignment has left origin');
    }
    public function quoteArrivedAtPort($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 6
        ]);
        return redirect()->back()->with('success','Consignment has arrived at port');
    }
    public function quotePortCleared($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 7
        ]);
        return redirect()->back()->with('success','Consignment has been cleared at port');
    }
    public function quoteArrivedAtBorder($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 8
        ]);
        return redirect()->back()->with('success','Consignment has arrived at the border');
    }
    public function quoteBorderCleared($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 9
        ]);
        return redirect()->back()->with('success','Consignment has arrived at the border');
    }
    public function quoteInTransitDelivery($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 10
        ]);
        return redirect()->back()->with('success','Consignment in transit for delivery');
    }

    public function quoteDelivered($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 11,
            'status' => 3
        ]);
        return redirect()->back()->with('success','Consignment has been delivered and completed successfully');
    }




    public function quoteCancel($id) {
        Consignment::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success','Updated Successfully');
    }
    public function quoteDelete($id) {
        Consignment::where('id', $id)->delete();
        Car::where('consignment_id', $id)->delete();
        Good::where('consignment_id', $id)->delete();
        return redirect()->route('request.quote')->with('success','Deleted Successfully');
    }
    public function quoteActivate($id) {
        $q = Consignment::where('id', $id)->first();
        if ($q->current_state == 2) {
            $q->status = 1;
        }else{
            $q->status = 0;
        }
        return redirect()->back()->with('success','Updated Successfully');
    }
}
