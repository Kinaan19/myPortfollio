<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention;
use App\NavbarTitle;
use App\NavbarLink;
use App\HomeIcon;
use App\About;
use App\ServiceTitle;
use App\ServiceItem;
use App\ServiceIcon;

class MyPageController extends Controller
{
    public function index()
    {
        $navbarTitles = NavbarTitle::find(1);
        $navbarLinks = NavbarLink::all();
        $homeIcons = HomeIcon::all();
        $abouts = About::find(1);
        $serviceTitles = ServiceTitle::find(1);
        $serviceItems = ServiceItem::all();
        $serviceIcons = ServiceIcon::all();

        return view('myPage', compact (
            'navbarTitles',
            'navbarLinks',
            'homeIcons',
            'abouts',
            'serviceTitles',
            'serviceItems',
            'serviceIcons'
        ));
    }
}
