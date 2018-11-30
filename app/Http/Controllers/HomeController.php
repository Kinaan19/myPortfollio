<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NavbarTitle;
use App\NavbarLink;
use App\HomeIcon;
use App\About;
use App\ServiceTitle;
use App\ServiceItem;
use App\ServiceIcon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $navbarTitles = NavbarTitle::find(1);
        $navbarLinks = NavbarLink::all();
        $homeIcons = HomeIcon::all();
        $abouts = About::find(1);
        $serviceTitles = ServiceTitle::find(1);
        $serviceItems = ServiceItem::all();
        $serviceIcons = ServiceIcon::all();

        return view('home', compact (
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
