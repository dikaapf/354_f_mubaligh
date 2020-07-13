<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
//        $token = Input::get('auth');
//        $provider = 'google';
//        $driver = Socialite::driver($provider);
//        $socialUserObject = $driver->userFromToken($token);
//        print_r('$socialUserObject');
//        return Socialite::driver('google')->stateless()->user();
        return view('home');
    }

}
