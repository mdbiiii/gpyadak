<?php

namespace App\Http\Controllers\Admin;

use App\Commodity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:dashboard-access');
    }

    public function index(){
        alert()->message('
        برای سهولت در امر ثبت قطعات یدکی پیشنهاد میشود ابتدا "برند" سپس "نوع ماشین" بعد "کلمه کلیدی" و در آخر "قطعه" ثبت گردد
        ')->persistent('باشه فهمیدم');

        $commodities=Commodity::all();
        $commodities=$commodities->chunk(3)->last();
        return view('admin.dashboard',compact('commodities'));
    }
}
