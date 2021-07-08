<?php

namespace App\Http\Controllers;

use App\portfolio;
use App\portfolioImage;
use Illuminate\Http\Request;
use Helmesvs\Notify\Facades\Notify;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioList=portfolio::get();
        return view('pages.portfolio.list',compact('portfolioList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.portfolio.add');

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
            'category'=>'required',
            'title'=>'required',
            'description'=>'required',
            'client'=>'required',
            'link'=>'required',
        ];

        $request->validate($rules);

        $portfolio=new portfolio;
        $portfolio->title=$request->title;
        $portfolio->description=$request->description;
        $portfolio->category=$request->category;
        $portfolio->client=$request->client;  
        $portfolio->link=$request->link;    
        $portfolio->save();

        foreach ($request->images as $image) {
            $portfolioImage=new portfolioImage;

            $portfolioImage->image=$image;
            $portfolioImage->prortfolio_id=$portfolio->id;
            $portfolioImage->save();
        }


        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolio=portfolio::where('id',$id)->first();
        return view('pages.portfolio.info',compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portfolio=portfolio::where('id',$id)->first();
        return view('pages.portfolio.edit',compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $rules=[
            'category'=>'required',
            'title'=>'required',
            'description'=>'required',
            'client'=>'required',
            'link'=>'required',
        ];

        $request->validate($rules);

        $portfolio=portfolioImage::where('id',$id)->first();
        $portfolio->title=$request->title;
        $portfolio->description=$request->description;
        $portfolio->category=$request->category;
        $portfolio->client=$request->client;  
        $portfolio->link=$request->link;    
        $portfolio->save();

    }


    public function uploadImage(Request $request,$id)
    {


        foreach ($request->images as $image) {
            $portfolioImage=new portfolioImage;

            $portfolioImage->image=$image;
            $portfolioImage->prortfolio_id=$id;
            $portfolioImage->save();
        }
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');

        return redirect()->back();
    }




        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function deleteImage(Request $request,$id)
    {
        $portfolio=portfolioImage::where('id',$id)->first()->delete();
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portfolio=portfolio::where('id',$id)->first()->delete();
        Notify::success('تم اضافة بيانات  بنجاح', 'اضافة بيانات  ');
        return redirect()->back();
    }
}
