<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function serviceDetails($id){
        return view('website.service-detail',[
            'type'=>$id
        ]);
    }
}
