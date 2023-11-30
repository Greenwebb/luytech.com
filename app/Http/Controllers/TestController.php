<?php

namespace App\Http\Controllers;

use App\Models\Consignment;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function paid_email(){
        $quote = Consignment::with(['user','cars','goods'])->where('id', 8)->first();

        return view('testers.emails.paid_email',[
            'quote' => $quote
        ]);
    }
}
