<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use App\Models\Categorie;
use App\Models\Subcategorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
  
    function showsubcat()
    {     
        $subcategories=Subcategorie::get();
        return view('layouts.product', compact('subcategories'));
    }

    function product($id)
    {     
        $menus=Menu::get();
        $subcategories=Subcategorie::get();
        $categories=Categorie::get();    
        $product=Product::where('id',$id)->first();
        return view('layouts.productdetail', compact('menus','product','subcategories','categories'));
    }
}
