<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Menu;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $menus = Menu::get();
        $sliders = Slider::get();
         return view('layouts.app',compact('sliders','menus'));
    }
    public function menu(Request $request)
    {
        $menus = Menu::get();
         return view('layouts.product',compact('menus'));
    }
    public function productdetail(Request $request)
    {
        $menus = Menu::get();
         return view('layouts.productdetail',compact('menus'));
    }
}
