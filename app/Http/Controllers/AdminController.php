<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function sliders()
    {
        $sliders = Slider::all();
        return view('admin.sliders',compact(['sliders']));
    }
    public function storeSlider(Request $request)
    {
        $slider = new Slider();
        $slider->image = 'storage/' . $request->file('image')->store('slider', 'public');
        $slider->caption = $request->caption;
        $slider->url = $request->url;
        $slider->save();

        return back()->with('msg', 'Successfully Stored');
    }
    public function updateSlider(Request $request,Slider $slider)
    {
        $slider->image = 'storage/' . $request->file('image')->store('slider', 'public');
        $slider->caption = $request->caption;
        $slider->url = $request->url;
        $slider->save();

        return back()->with('msg', 'Successfully Stored');
    }
}
