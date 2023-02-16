<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;
use App\Models\User;
class AdminController extends Controller
{
    //
    public function profile_page()
    {
        return view('profile_page');
    }

    public function basic_table()
    {
        return view('table');
    }

    public function icon_materiale()
    {
        return view('icon_materiale');
    }

    public function google_map()
    {
        return view('google_map');
    }

    public function blank()
    {
        return view('blank');
    }

    public function error()
    {
        return view('error');
    }

    public function user_list()
    {
        return view('user_list');
    }

    public function add_user(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());die;
        $data = new User;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['phone'] = $request->phone;
        $data['address'] = $request->address;
        $data['status'] = $request->status;
        if($data->save()){
        return redirect('users')->with('message', 'Supervisor created successfully !');
    }
    }
    public function get_user()
    {
        $users = User::all();
        // echo "<pre>";
        // print_r($users);die;
        return view('users', compact('users'));
    }

    function ShowData($id)
    {
        $data = User::find($id);
        // echo "<pre>";
        // print_r($data);die;
        return view('edit', compact('data'));
    }

    function Update(Request $request)
    {
        // print_r($request->all());die;
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->status = $request->status;
        $data->save();
        return redirect('users')->with('message', 'Updated Supervisor Successfully!');
    }

    public function delete_supervisor($id)
    {
        $data = User::find($id);
        // echo "<pre>";
        // print_r($data);die;
        $data->delete();
        return redirect('users')->with('message', 'Deleted Supervisor Successfully!');
    }


    public function admin_login()
    {
        return view('admin_login');
    }


    public function login(Request $request)
    {
        
        $login = User::where(['email' => $request['email'], 'password' => $request['password']])->first();
        // echo "<pre>";       
        $request->session()->put('name',$login['name']);
        
        if ($login) {
            return redirect('index')->with('message', 'Login successfully !!');
        } else {
            return redirect('admin_login')->with('message', 'Your email or password is incorrect please try again ! ');
        }
    }
}
