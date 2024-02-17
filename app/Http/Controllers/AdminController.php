<?php

namespace App\Http\Controllers;

use App\Models\dossiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return view("admin.dashboard_admin");
        } else {
            $dossiers = dossiers::where("id_user",Auth::user()->id)->get();
            return view("admin.dashboard_student", compact("dossiers"));
        }
    }
}
