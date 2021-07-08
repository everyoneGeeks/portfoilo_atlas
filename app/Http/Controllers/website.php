<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class website extends Controller
{

    public function sendEmail(Request $request){
        $sendemail=new Complains;
        $sendemail->name=$request->name;
        $sendemail->email=$request->email;
        $sendemail->Message=$request->Message;
        $sendemail->save();
        return redirect()->back();

    }


}
