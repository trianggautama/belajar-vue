<?php

namespace App\Http\Controllers;

use App\User;
use App\barang;
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
        return view('home');
    }

    public function show_users(){
        return view('users',['users'=>User::all() ]);
    }

    public function get_users(){
        
        return response(User::all());
    }

    
    public function show_barangs(){
        return view('barangs',['barangs'=>barang::all() ]);
    }

    public function get_barangs(){
        
        return response(barang::all());
    }
    public function add_barangs(){
        
      dd('success');
    }
    

}
