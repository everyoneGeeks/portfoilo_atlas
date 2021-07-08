<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\client;
use App\headline;
use App\pricing;
use App\aboutUsBox;
use App\services;
use App\Complains;

class website extends Controller
{

    public function sendEmail(Request $request){
        $sendemail=new Complains;
        $sendemail->name=$request->name;
        $sendemail->email=$request->email;
        $sendemail->message=$request->message;
        $sendemail->save();
        return redirect()->back();

    }


public function index(){
$headline=headline::get();
$client=client::get();
$aboutUsBox=aboutUsBox::get();
$services=services::get();

$pricing1=pricing::where('id',1)->first();
$pricing2=pricing::where('id',2)->first();
$pricing3=pricing::where('id',3)->first();

    return view('home',compact('headline','client','pricing1','pricing2','pricing3','aboutUsBox','services'));

}

}
