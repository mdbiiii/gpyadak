<?php

namespace App\Http\Controllers\Admin;

use App\Cartype;
use App\Http\Controllers\Controller;
use App\Http\Requests\CartypeRequestCreate;
use App\Http\Requests\CartypeRequestEdit;
use Illuminate\Http\Request;

class CartypeController extends Controller
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
        return view('admin.cartype.cartype',Cartype::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CartypeRequestCreate $request)
    {
        $valid_data=$request->validated();

        //image save
        $file=$request->file('image');

        $file_name=$file->getClientOriginalName();

        $file_path="upload/cartype/{$file_name}";
        $file_url=url("{$file_path}/{$file_name}");

        $file->move(public_path($file_path),$file_name);
        //image save

        $brand_ID=$request->input('brand');


        Cartype::create([
            'brand_id'=>$brand_ID,
            'name'=>$valid_data['name'],
            'info'=>$valid_data['info'],
            'image_url'=>$file_url,
        ]);



        return redirect(route('create_cartype'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cartype  $cartype
     * @return \Illuminate\Http\Response
     */
    public function show(Cartype $cartype)
    {
        return view('admin.cartype.cartype_show',[
            'cartypes'=> Cartype::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cartype  $cartype
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartype $cartype)
    {
        return view('admin.cartype.cartype_edit',[
            'cartype'=> $cartype,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cartype  $cartype
     * @return \Illuminate\Http\Response
     */
    public function update(CartypeRequestEdit $request, Cartype $cartype)
    {


        if(!($request->hasFile('image'))){

            $valid_data=$request->validate([
                'name'=>'required',
                'info'=>'required',
            ]);
            $cartype->update([
                'name'=>$valid_data['name'],
                'info'=>$valid_data['info'],

            ]);

        }else{

            $valid_data=$request->validated();
            $file=$request->file('image');

            $file_name=$file->getClientOriginalName();

            $file_path="upload/cartype/{$file_name}";
            $file_url=url("{$file_path}/{$file_name}");

            $file->move(public_path($file_path),$file_name);

            $cartype->update([
                'name'=>$valid_data['name'],
                'info'=>$valid_data['info'],
                'image_url'=>$file_url,
            ]);
        }


        return redirect(route('show_cartype'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Cartype $cartype
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Cartype $cartype)
    {
        $cartype->delete();
        return back();
    }
}
