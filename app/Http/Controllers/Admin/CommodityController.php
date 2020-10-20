<?php

namespace App\Http\Controllers\Admin;

use App\Commodity;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommodityRequestCreate;
use App\Http\Requests\CommodityRequestEdit;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class CommodityController extends Controller
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
        return view('admin.commodity.commodity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommodityRequestCreate $request)
    {
        $valid_data=$request->validated();


        $file=$request->file('image');

        $file_name=$file->getClientOriginalName();

        $file_path="upload/commodity/{$file_name}";
       $file_url=url("{$file_path}/{$file_name}");



        $file->move(public_path($file_path),$file_name);



        $cartype_ID=$request->input('cartype');




        Commodity::create([
            'cartype_id'=>$cartype_ID,
            'name'=>$valid_data['name'],
            'info'=>$valid_data['info'],
            'image_url'=>$file_url
        ]);

        return redirect(route('commodity'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function show(Commodity $commodity)
    {

        $commodities=Commodity::query();


        if ($key=\request('search')){

            $commodities->where('name','LIKE',"%{$key}%")->orWhere('info','LIKE',"%{$key}%");
        }

        $commodities=$commodities->latest()->paginate(4);


        return view('admin.commodity.commodity_show',compact('commodities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function edit(Commodity $commodity)
    {
        return view('admin.commodity.commodity_edit',[
            'commodity'=> $commodity,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function update(CommodityRequestEdit $request, Commodity $commodity)
    {

        if(!($request->hasFile('image'))){

            $valid_data=$request->validate([
                'name'=>'required',
                'info'=>'required',
            ]);
            $cartype_ID=$request->input('cartype');

            $commodity->update([
                'cartype_id'=>$cartype_ID,
                'name'=>$valid_data['name'],
                'info'=>$valid_data['info'],

            ]);

        }else{

            $valid_data=$request->validated();
            $file=$request->file('image');

            $file_name=$file->getClientOriginalName();

            $file_path="upload/commodity/{$file_name}";
            $file_url=url("{$file_path}/{$file_name}");

            $file->move(public_path($file_path),$file_name);

            $cartype_ID=$request->input('cartype');



            $commodity->update([
                'cartype_id'=>$cartype_ID,
                'name'=>$valid_data['name'],
                'info'=>$valid_data['info'],
                'image_url'=>$file_url,
            ]);
        }


        return redirect(route('show_commodity'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Commodity  $commodity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commodity $commodity)
    {
       $commodity->delete();
       return back();
    }



    public function show_commo(Commodity $commodity)
    {
        return view('commo_info',[
            'commodity'=> $commodity,
        ]);
    }
}
