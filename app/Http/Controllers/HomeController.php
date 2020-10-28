<?php

namespace App\Http\Controllers;
use App\Brand;

use App\Commodity;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        alert()->success('برای تسریع در استعلام قیمت یا خرید قطعه کافیست نام قطعه مدنظر + مدل خودرو + سال تولید + (در صورت امکان شماره شاسی ماشین) را به شماره 6761663-98912+ واتساپ کنید','راهنمایی')->persistent('بستن');


        //hyundai
        $hyu=Brand::find(3);



        if (!is_null($hyu)){
            $hyucommos=$hyu->commodities;
            if (count($hyucommos)>5){
                $hyu_commos=$hyucommos->random(6);
            }elseif(count($hyucommos)<3){
                $hyu_commos=[];
            }else{
                $hyu_commos=$hyucommos->random(3);
            }
        }else{
            $hyu_commos=[];
        }

        //hyundai

        //kia

        $kia=Brand::find(4);



        if (!is_null($kia)){
            $kiacommos=$kia->commodities;

            if (count($kiacommos)>5){
                $kia_commos=$kiacommos->random(6);
            }elseif(count($kiacommos)<3){
                $kia_commos=[];
            }else{
                $kia_commos=$kiacommos->random(3);
            }
        } else{
            $kia_commos=[];
        }

        //kia

        //commodities
        $commodities=Commodity::all();
        if (count($commodities)>5){
            $choose=$commodities->random(6);
        }elseif(count($commodities)<3){
            $choose=[];
        }else{
            $choose=$commodities->random(3);
        }
        //commodities

        return view('home1',[
            'commodities'=>$choose,
            'hyu_commos'=>$hyu_commos,
            'kia_commos'=>$kia_commos
        ]);


    }

    public function kia(){
        $kia=Brand::find(4);



        if (!is_null($kia)){
            $kia_commos=$kia->commodities;

        } else{
            $kia_commos=[];
        }
        return $kia_commos;

        return view('kia',compact('kia_commos'));


    }
    public function hyundai(){
        $hyu=Brand::find(3);


        if (!is_null($hyu)){
            $hyu_commos=$hyu->commodities;

        }else{
            $hyu_commos=[];
        }

        return $hyu_commos;
        return view('hyundai',compact('hyu_commos'));

    }

}
