<?php

namespace App\Http\Controllers;

use App\aboutUsBox;
use Illuminate\Http\Request;
use Helmesvs\Notify\Facades\Notify;

class AboutUsBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUsBoxs=aboutUsBox::get();
        return view('pages.aboutUsBoxs.list',compact('aboutUsBoxs'));
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\aboutUsBox  $aboutUsBox
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutUsBox=aboutUsBox::where('id',$id)->first();
        return view('pages.aboutUsBoxs.info',compact('aboutUsBox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\aboutUsBox  $aboutUsBox
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUsBox=aboutUsBox::where('id',$id)->first();
        return view('pages.aboutUsBoxs.edit',compact('aboutUsBox'));
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
            'name'=>'required',
            'description'=>'required'
        ];
        $request->validate($rules);

        $aboutUsBox=aboutUsBox::where('id',$id)->first();
        $aboutUsBox->name=$request->name;
        $aboutUsBox->description=$request->description;
        if($request->hasFile('image')){
            $this->SaveFile($aboutUsBox,'image','image','upload/aboutUsBox');
        }
        $aboutUsBox->save();

        Notify::success('تم تعديل بيانات  بنجاح', ' تعديل بيانات');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\aboutUsBox  $aboutUsBox
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUsBox=aboutUsBox::where('id',$id)->delete();

    }
}
