<?php

namespace App\Http\Controllers\Admin;

use App\Commodity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index(){

        $commodities=Commodity::all();
        $commodities=$commodities->chunk(3)->last();
        return view('admin.dashboard',compact('commodities'));
    }
}
