<?php


namespace App\Http\Controllers;

use App\Models\Consignment;
use App\Models\ContactInquiry;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $users = User::count();
        $contacts = ContactInquiry::count();
        $quotes = Consignment::count();

        $p = Consignment::where('consignment_type', 'personal')->count();
        $b = Consignment::where('consignment_type', 'business')->count();
        $awaiting = Consignment::where('status', 0)->count();
        $replied = Consignment::where('status', 1)->count();
        $shipping = Consignment::where('current_state', 3)->count();
        $delivered = Consignment::where('current_state', 11)->count();


        return view('dashboard.dashboard1',[
            'users' => $users,
            'contacts' => $contacts,
            'quotes' => $quotes,
            'p' => $p,
            'b' => $b,
            'delivered' => $delivered,
            'shipping' => $shipping,
            'replied' => $replied,
            'awaiting' => $awaiting
        ]);
    }
}
