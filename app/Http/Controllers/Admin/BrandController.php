<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequestCreate;
use App\Http\Requests\BrandRequestEdit;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.brand.brand');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequestCreate $request)
    {
        $valid_data=$request->validated();

        //image save
        $file=$request->file('image');

        $file_name=$file->getClientOriginalName();

        $file_path="upload/brand/{$file_name}";
        $file_url=url("{$file_path}/{$file_name}");

        $file->move(public_path($file_path),$file_name);
        //image save

        // save in data base
        Brand::create([
            'name'=>$valid_data['name'],
            'info'=>$valid_data['info'],
            'logo_url'=>$file_url,
        ]);
        // save in data base

        return redirect(route('brand'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {


       return view('admin.brand.brand_edit',[
           'brand'=> $brand,
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(BrandRequestEdit $request, Brand $brand)
    {


        if(!($request->hasFile('image'))){

            $valid_data=$request->validate([
                'name'=>'required',
                'info'=>'required',
            ]);
            $brand->update([
                'name'=>$valid_data['name'],
                'info'=>$valid_data['info'],

            ]);

        }else{

            $valid_data=$request->validated();
            $file=$request->file('image');

            $file_name=$file->getClientOriginalName();

            $file_path="upload/brand/{$file_name}";
            $file_url=url("{$file_path}/{$file_name}");

            $file->move(public_path($file_path),$file_name);

            $brand->update([
                'name'=>$valid_data['name'],
                'info'=>$valid_data['info'],
                'logo_url'=>$file_url,
            ]);
        }


       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
