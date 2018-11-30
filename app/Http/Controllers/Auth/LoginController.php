<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\NavbarTitle;
use App\NavbarLink;
use App\ServiceTitle;
use App\ServiceItem;
use App\ServiceIcon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $navbarTitles = NavbarTitle::find(1);
        $navbarLinks = NavbarLink::all();
        $serviceTitles = ServiceTitle::find(1);
        $serviceItems = ServiceItem::all();

        $navbarTitles->state = 0;
        foreach ($navbarLinks as $link) {
            $link->state = 0;
            $link->save();
        }
        $serviceTitles->state = 0;
        foreach ($serviceItems as $item) {
            $item->state = 0;
            $item->save();
        }
        $serviceItems->state = 0;

        $navbarTitles->save();
        $serviceTitles->save();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
