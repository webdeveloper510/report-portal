<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;
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
    
    public function add_user(Request $request){
        // echo "<pre>";
        // print_r($request->all());die;
       $data = new AddUser;
       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['password'] = $request->password;
       $data['phone'] = $request->phone;
       $data['address'] = $request->address;
       $data['status'] = $request->status;
       $data->save();
       return redirect()->back()->with('success', 'User created successfully !');  
    }

    public function get_user(){
        $users = AddUser::all();
        // echo "<pre>";
        // print_r($users);die;
        return view('table', compact('users'));
    }
}
