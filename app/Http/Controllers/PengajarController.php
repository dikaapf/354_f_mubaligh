<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\Pengajar;

class PengajarController extends Controller {

    public function __construct() {
//        $this->middleware('auth:admin');
        $this->middleware('auth:pengajar', [
            'except' => [
                'redirectToGoogle',
                'handleGoogleCallback',
        ]]);
    }

    public function index() {
        return "Halaman";
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle() {

        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback() { 
        try {
            $user = Socialite::driver('google')->user();

            $finduser = Pengajar::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser); 
                return redirect('/pengajar');
            } else {
                $newPengajar = Pengajar::create([
                            'name' => $user->name,
                            'email' => $user->email,
                            'google_id' => $user->id,
                            'avatar' => $user->avatar,
                            'user_provider' => 'google',
                            'avatar_original' => $user->avatar_original,
                            'password' => encrypt(generateRandomString(8))
                ]);
                Auth::login($newPengajar);
                return redirect('/pengajar');
            }
        } catch (Exception $e) {

            dd($e->getMessage());
        }
    }

}
