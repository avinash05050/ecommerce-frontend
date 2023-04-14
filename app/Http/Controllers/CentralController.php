<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Slider;
use App\Models\Subcategorie;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CentralController extends Controller
{
    public function index(Request $request)
    {
        $menus = Menu::get();
        $sliders = Slider::get();
        $subcategories=Subcategorie::get();
        $categories=Categorie::get();       
         return view('layouts.main_content',compact('sliders','menus','subcategories','categories'));
    }
    public function menu(Request $request)
    {
        $menus = Menu::get();
        $subcategories=Subcategorie::get();
        $categories=Categorie::get();
         return view('layouts.product',compact('menus','categories','subcategories'));
    }

    public function menus(Request $request)
    {
        $menus = Menu::get();
        $subcategories=Subcategorie::get();
        $categories=Categorie::get();
         return view('layouts.contact_us',compact('menus','categories','subcategories'));
    }

    public function menus2(Request $request)
    {
        $menus = Menu::get();
        $subcategories=Subcategorie::get();
        $categories=Categorie::get();
         return view('layouts.about_us',compact('menus','categories','subcategories'));
    }
   
}
