<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Models\About;
use App\Models\Menu;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $sliders = Slider::all();
    $abouts = About::all();
    $products = Product::all();
    $menus = Menu::all();
    return view('index', compact(['sliders','abouts','products','menus']));
});
Route::group([
    'prefix' => 'admin'
], function () {
    Route::group([
        'controller'=>AdminController::class
    ], function () {
        Route::get('dashboard', 'dashboard');
        Route::get('sliders', 'sliders');
        Route::post('slider', 'storeSlider');
        Route::post('slider/edit/{slider}', 'updateSlider');
    });
    Route::resource('about', AboutController::class);
    Route::resource('product', ProductController::class);
    Route::resource('menu',MenuController::class);
});
