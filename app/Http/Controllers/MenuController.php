<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu',compact('menus'));
    }

    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu();
        $menu->text = $request->text;
        $menu->url = $request->url;
        $menu->save();
        return back()->with('msg', 'Successfully stored');
    }
    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->text = $request->text;
        $menu->url = $request->url;
        $menu->save();
        return back()->with('msg', 'Successfully stored');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return back();
    }
}
