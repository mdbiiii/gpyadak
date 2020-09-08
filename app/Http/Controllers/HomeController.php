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
        //hyundai
        $hyu=Brand::find(1);
        $hyucommos=$hyu->commodities;
        if (count($hyucommos)>5){
            $hyu_commos=$hyucommos->random(6);
        }elseif(count($hyucommos)<3){
            $hyu_commos=[];
        }else{
            $hyu_commos=$hyucommos->random(3);
        }
        //hyundai

        //kia

        $kia=Brand::find(2);
        $kiacommos=$kia->commodities;
        if (count($kiacommos)>5){
            $kia_commos=$kiacommos->random(6);
        }elseif(count($kiacommos)<3){
            $kia_commos=[];
        }else{
            $kia_commos=$kiacommos->random(3);
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

}
