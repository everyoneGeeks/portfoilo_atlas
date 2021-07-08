<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;
use Helmesvs\Notify\Facades\Notify;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients=client::get();
        return view('pages.client.list',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.client.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'image'=>'required',
        ];
        $request->validate($rules);

        $client=new client;


        if($request->hasFile('image')){
            $this->SaveFile($client,'image','image','upload/client');
        }
        $client->save();

        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=client::where('id',$id)->first();
        return view('pages.client.info',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=client::where('id',$id)->first();
        return view('pages.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $client=client::where('id',$id)->first();



        if($request->hasFile('image')){
            $this->SaveFile($client,'image','image','upload/client');
        }
        $client->save();
        
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=client::where('id',$id)->delete();

    }
}
