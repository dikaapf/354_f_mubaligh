<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Socialite;
use Auth;
use Exception;
use App\User;

class GoogleController extends Controller {

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



            $finduser = User::where('google_id', $user->id)->first();
            if ($finduser) {
                Auth::login($finduser);
                return redirect('/home');
            } else {

                $cek_user = User::where('email', '=', $user->email)->count();
                if ($cek_user == 0) {
                    $newUser = User::create([
                                'name' => $user->name,
                                'email' => $user->email,
                                'google_id' => $user->id,
                                'avatar' => $user->avatar,
                                'user_provider' => 'google',
                                'ferivy_user' => 1,
                                'avatar_original' => $user->avatar_original,
                                'password' => encrypt(generateRandomString(8))
                    ]);

                    Auth::login($newUser);
                    return redirect('/home');
                } else {
                    User::where('email', '=', $user->email)->update([
                        'google_id' => $user->id,
                    ]);
                    $finduser = User::where('google_id', $user->id)->first();

                    Auth::login($finduser);
                    return redirect('/home');
                }
            }
        } catch (Exception $e) {

            dd($e->getMessage());
        }
    }

}
