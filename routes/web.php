<?php

use App\Http\Controllers\AdminController;
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
    return view('index',compact(['sliders']));
});
Route::group([
    'controller' => AdminController::class,
    'prefix' => 'admin'
], function () {
    Route::get('dashboard', 'dashboard');
    Route::get('sliders','sliders');
    Route::post('slider','storeSlider');
    Route::post('slider/edit/{slider}', 'updateSlider');
});
