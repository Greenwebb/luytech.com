<?php

namespace App\Http\Controllers\Modules;

use App\Http\Controllers\Controller;
use App\Mail\QuoteFinalized;
use App\Mail\QuoteReceived;
use App\Mail\QuoteReceivedAdmin;
use App\Models\Car;
use App\Models\Consignment;
use App\Models\ContactInquiry;
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
        $inquiries = ContactInquiry::get();
        return view("modules.requests.inquiries",[
            "inquiries"=> $inquiries
        ]);
    }
    public function quotes(){
        $quotes = Consignment::with(['user','cars'])->get();
        return view("modules.requests.quotes",[
            "quotes"=> $quotes
        ]);
    }



    // ----- Storage --------------------------------
    public function storeContact(Request $request){
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
    
            // After saving to the database, you can implement additional logic 
            // like sending an email notification if needed.
    
            // Return a response. This can be a redirect or a JSON response 
            // depending on how you want to handle it on the frontend.
            // Here, I'll return a JSON response for simplicity.
            return response()->json(['message' => 'Inquiry submitted successfully, We will get back to you shortly!']);
        
    }

    public function storeQuote(Request $request){
        // dd($request->all());
       try {
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
                'num_of_vehicles' => $request->input('numCars'),
                'consignment_type' => $request->input('purpose'),
                'message' => $request->input('message'),
                'user_id' => $user->id,
                'company_name' => $request->input('company_name') ?? null,
                'terms' => $request->input('termsAgreementSummary') ?? null
            ]);

            // Create Car
            foreach ($request->input('carMake') as $key => $data) {
                Car::create([
                    'car_make' => $request->input('carMake')[$key],
                    'car_model' => $request->input('carModel')[$key],
                    'fuel' => $request->input('fuel')[$key],
                    'transmission' => $request->input('transmission')[$key],
                    'car_year' => $request->input('carYear')[$key],
                    'consignment_id' => $consignment->id
                ]);
            }
            $quote = Consignment::with(['user','cars'])->where('id', $consignment->id)->first();
            // dd($quote);
            // Email User
            Mail::to($user->email)->send(new QuoteReceived($quote));
            // Email Administrator
            $adminEmail = 'nyeleti.bremah@gmail.com'; // Replace with the admin's email
            Mail::to($adminEmail)->send(new QuoteReceivedAdmin($quote));

            return response()->json(['message' => 'Quote submission is complete and successful, We will get back to you shortly!']);
        } catch (\Throwable $th) {
            dd($th);
        }
    }



    // ----- Details --------------------------------
    public function showQuote($id){
        $q = Consignment::with(['user','cars'])->where('id', $id)->first();
        return view("modules.requests.quote_details",[
            "q"=> $q
        ]);
    }

    public function replyQuote($id){
        $q = Consignment::with(['user','cars'])->where('id', $id)->first();
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
            $total = 0;
            // Set the cost for each car
            foreach ($request->toArray()['car_id'] as $key => $car) {
                $total += (float)$request->toArray()['car_cost'][$key];
                Car::where('id', $car)->update(['cost'=> $request->toArray()['car_cost'][$key]]);
            }

            // Set the total price for consignment
            Consignment::where('id', $request->toArray()['consignment_id'])->update([
                'price' => $total,
                'order_number' => $request->toArray()['consignment_id'].$this->generateUniqueNumber(), // for 5 to 7 digit numbers
                'tracking_id' => $this->generateUniqueNumber(), 
                'current_state' => 2,
                'status' => 1
            ]);
            
            
            // Send Email to Users
            $quote = Consignment::with(['user','cars'])->where('id', $request->toArray()['consignment_id'])->first();
            Mail::to($quote->user->email)->send(new QuoteFinalized($quote));
            $adminEmail = 'nyeleti.bremah@gmail.com'; // Replace with the admin's email
            Mail::to($adminEmail)->send(new QuoteFinalized($quote));
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
        Consignment::where('id', $id)->update([
            'current_state' => 3
        ]);
        return redirect()->back()->with('success','Updated Successfully');
    }
    public function quoteDelivery($id) {
        Consignment::where('id', $id)->update([
            'current_state' => 4
        ]);
        return redirect()->back()->with('success','Updated Successfully');
    }
    public function quoteCancel($id) {
        Consignment::where('id', $id)->update([
            'status' => 2
        ]);
        return redirect()->back()->with('success','Updated Successfully');
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
