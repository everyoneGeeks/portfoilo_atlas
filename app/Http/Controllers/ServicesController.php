<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=services::get();
        return view('pages.services.list',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.services.add');
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
            'name'=>'required',
            'description'=>'required',
        ];
        $request->validate($rules);

        $services=new services;
        $services->name=$request->name;
        $services->description=$request->description;
        if($request->hasFile('image')){
            $this->SaveFile($services,'image','image','upload/services');
        }
        $services->save();
        \Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=services::where('id',$id)->first();
        return view('pages.services.info',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=services::where('id',$id)->first();
        return view('pages.services.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules=[
            'name'=>'required',
            'description'=>'required'
        ];
        $request->validate($rules);

        $services=services::where('id',$id)->first();
        $services->name=$request->name;
        $services->description=$request->description;

        if($request->hasFile('image')){
            $this->SaveFile($services,'image','image','upload/services');
        }
        $services->save();

        \Notify::success('تم تعديل بيانات  بنجاح', ' تعديل بيانات');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services=services::where('id',$id)->delete();
    }
}
