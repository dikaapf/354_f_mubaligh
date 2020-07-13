<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Mail\Publicmail;
use App\Mail\VerifyRegistration;
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public $kode;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
//        return $data;
        return Validator::make($data, [
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
//                    'captcha' => 'required|captcha',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {

        $this->kode = date('YmdHis');
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                    'verify_code' => Crypt::encrypt($this->kode)
        ]);
    }

    public function register(Request $request) {
        $this->validator($request->all())->validate();
        $rules = ['captcha' => 'required|captcha'];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/register')->with('status', 'Kode Captcha Salah');
        } else {
            event(new Registered($user = $this->create($request->all())));

//            $detail = [
//                'title' => 'Verifikasi akun mubaligh.id',
//                'body' => $request->name,
//                'email_to' => $request->email,
//                'key' => $this->kode,
//            ];
//            \Mail::to($request->email)->send(new VerifyRegistration($detail));
            $this->guard()->login($user);
//            $detail = [
//                'title' => 'Ferivikasi User',
//                'body' => 'Yth. Pengunjung'
//            ];
//            \Mail::to('oman.buluatie@gmail.com')->send(new Publicmail($detail));
            if ($response = $this->registered($request, $user)) {
                return $response;
            }

            return $request->wantsJson() ? new Response('', 201) : redirect(route('home'));
        }
    }

}
