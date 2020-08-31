<?php

namespace App\Http\Controllers;
use App\Commodity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use Sluggable;
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


        $commodities=Commodity::all();
        if (count($commodities)>5){
            $choose=$commodities->random(6);
        }elseif(count($commodities)<3){
            $choose=[];
        }else{
            $choose=$commodities->random(3);
        }

        return view('home1',[
            'commodities'=>$choose
        ]);
    }

}
