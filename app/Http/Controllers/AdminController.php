<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function profile_page(){
        return view('profile_page');
    }
    
    public function basic_table(){
        return view('table');
    }
    
    public function icon_materiale(){
        return view('icon_materiale');
    }

    public function google_map(){
        return view('google_map');
    }

    public function blank(){
        return view('blank');
    }

    public function error(){
        return view('error');
    }

    public function user_list(){
        return view('user_list');
    }
}
