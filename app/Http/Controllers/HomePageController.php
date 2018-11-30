<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NavbarTitle;
use App\NavbarLink;

class HomePageController extends Controller
{
    public function editNavTitle()
    {
        $navbarTitles = NavbarTitle::find(1);
        $navbarTitles->state = !$navbarTitles->state;
        $navbarTitles->save();
        return redirect()->back();
    }
    public function editNavItem($id)
    {
        $navbarItems = NavbarLink::find($id);
        $navbarItems->state = !$navbarItems->state;
        $navbarItems->save();
        return redirect()->back();
    }
    
    public function updateNavTitle(Request $request)
    {
        $navbarTitles = NavbarTitle::find(1);
        $navbarTitles->content = $request->navTitle;
        $navbarTitles->state = !$navbarTitles->state;
        $navbarTitles->save();
        return redirect()->back();        
    }
    public function updateNavItem(Request $request, $id)
    {
        $navbarItems = NavbarLink::find($id);
        $navbarItems->content = $request->navItem;
        $navbarItems->state = !$navbarItems->state;
        $navbarItems->save();
        return redirect()->back();
    }

    public function createNavItem(Request $request)
    {
        $navbarItems = new NavbarLink;
        $navbarItems->content = $request->newNavItem;
        $navbarItems->save();
        return redirect()->back();
    }

    public function deleteNavItem($id)
    {
        $navbarItems = NavbarLink::find($id);
        $navbarItems->delete();
        return redirect()->back();
    }
}
