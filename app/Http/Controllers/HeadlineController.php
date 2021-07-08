<?php

namespace App\Http\Controllers;

use App\headline;
use Illuminate\Http\Request;
use Helmesvs\Notify\Facades\Notify;

class HeadlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings=headline::get();
        return view('pages.headline.list',compact('settings'));
    }


  
    /**
     * Display the specified resource.
     *
     * @param  \App\aboutUsBox  $aboutUsBox
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $setting=headline::where('id',$id)->first();
        return view('pages.headline.info',compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aboutUsBox  $aboutUsBox
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setting=headline::where('id',$id)->first();
        return view('pages.headline.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\aboutUsBox  $aboutUsBox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        $rules=[
            'value'=>'required',
        ];
        $request->validate($rules);

        if($id == 14){
            $headline=headline::where('id',$id)->first();

            if($request->hasFile('value')){
                $this->SaveFile($headline,'value','value','upload/logo');
            }
           $headline->save();
        }else{
            $headline=headline::where('id',$id)->first();
            $headline->value=$request->value;
            $headline->save();
        }


        Notify::success('تم تعديل بيانات  بنجاح', ' تعديل بيانات');

        return redirect()->back();
    }

}
