<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Input;
use App\Kategori_ajar;

class AdminController extends Controller {

    public function __construct() {
//        $this->middleware('auth:admin');
        $this->middleware('auth:admin', [
            'except' => [
                'indexadmin',
        ]]);
    }

    public function index() {
//        return 0;
        return view('admin.home');
    }

    public function indexkategori() {
        $data['kategori'] = Kategori_ajar::all();
        return view('admin.kategori.index', $data);
    }

    public function submitkategori(Request $request) {

        Kategori_ajar::create($request->all());
        return 1;
    }

}
