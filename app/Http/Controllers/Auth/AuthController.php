<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\User;

class AuthController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToProvider($provider) {
//        return $provider;
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback() {
        try {
            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {
                $newUser = User::create([
                            'name' => $user->name,
                            'email' => $user->email,
                            'facebook_id' => $user->id,
                            'avatar' => $user->avatar,
                            'user_provider' => 'facebook',
                            'avatar_original' => $user->avatar_original,
                            'password' => encrypt(generateRandomString(8))
                ]);
                Auth::login($newUser);
                return redirect('/home');
            }
        } catch (Exception $e) {

            dd($e->getMessage());
        }
    }

}
