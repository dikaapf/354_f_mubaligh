<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class AdminLoginController extends Controller {

    public function __construct() {
        $this->middleware('guest:admin', [
            'except' => [
                'logout',
        ]]);
    }

    public function showLoginForm() {
        return view('auth.admin-login');
    }

    public function login(Request $request) {
//        return $request->all();
        // Validate the form data
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        // Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
