<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->isAdmin()){

            dd("you are an admin user");
        }

        if(auth()->user()->isCompany()){

            return view("dashboard.company.home.index");
        }

        if(auth()->user()->isCandidate()){

            dd("you are candidate");
        }

       // auth()->logout();
      //  return redirect()->route('login');

    }
}
