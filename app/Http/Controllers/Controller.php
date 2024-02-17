<?php

namespace App\Http\Controllers;

use App\Models\formations;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function index(){
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('front.login');
        }
    }

    public function register(){
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('front.register');
        }
    }

    public function index_home2(){
        $formations = formations::all();
        return view('front.index', compact("formations"));
    }
}
