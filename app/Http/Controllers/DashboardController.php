<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        if (view()->exists("pages.dashboard")) {
            return view("pages.dashboard");
        }

        return abort(404);
    }
}
