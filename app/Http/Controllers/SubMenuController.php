<?php

namespace App\Http\Controllers;

use App\Models\SubMenu;
use App\Http\Requests\StoreSubMenuRequest;
use App\Http\Requests\UpdateSubMenuRequest;
use App\Models\Menu;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subMenus = SubMenu::all();
        $menus = Menu::all();
        return view('admin.sub-menu',compact(['subMenus','menus']));
    }
    public function store(StoreSubMenuRequest $request)
    {
        $subMenu = new SubMenu();
        $subMenu->menu_id = $request->menu_id;
        $subMenu->text = $request->text;
        $subMenu->url = $request->url;
        $subMenu->save();
        return back()->with('msg', 'Successfully stored');
    }

    public function update(UpdateSubMenuRequest $request, SubMenu $subMenu)
    {
        $subMenu->text = $request->text;
        $subMenu->url = $request->url;
        $subMenu->save();
        return back()->with('msg', 'Successfully stored');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubMenu $subMenu)
    {
        $subMenu->delete();
        return back();
    }
}
