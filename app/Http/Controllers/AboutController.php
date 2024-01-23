<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('admin.about',compact(['abouts']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutRequest $request)
    {
        $about = new About();
        $about->image = 'storage/'.$request->file('image')->store('about', 'public');
        $about->title = $request->title;
        $about->description = $request->description;
        $about->url = $request->url;
        $about->save();
        return back()->with('msg', 'Successfully stored');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAboutRequest $request, About $about)
    {
        $about->image = 'storage/'.$request->file('image')->store('about', 'public');
        $about->title = $request->title;
        $about->description = $request->description;
        $about->url = $request->url;
        $about->save();
        return back()->with('msg', 'Successfully stored');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return back();
    }
}
