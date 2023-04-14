<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CentralController;
use App\Http\Controllers\SubcategorieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layouts.main_content');
// });
Route::get('/about_us', function () {
    return view('layouts.about_us');
});
Route::get('/contact_us', function () {
    return view('layouts.contact_us');
});


// Route::get('/', [CategorieController::class, 'showviewdetail']);
Route::get('/subcat', [CategorieController::class, 'showsubcat']);
Route::get('/productdetail/{id}', [CategorieController::class, 'product']);

       // riya

Route::get('/',[CentralController::class , 'index']);
Route::get('/product',[CentralController::class , 'menu']);
Route::get('/contact_us',[CentralController::class , 'menus']);
Route::get('/about_us',[CentralController::class , 'menus2']);



// Route::get('/productdetail',[CentralController::class , 'productdetail']);