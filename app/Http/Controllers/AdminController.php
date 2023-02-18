<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;
use App\Models\User;
use App\Models\Location;
use App\Models\AccessWebsite;
class AdminController extends Controller
{
    //
    public function profile_page()
    {
        return view('profile_page');
    }

    public function basic_table()
    {
        return view('users');
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
        // $usernames = User::all('name');
        // echo $usernames; die;
        $data = User::find($id);
        // echo "<pre>";
        // print_r($data);die;
        return view('edit', compact('data'));
    }

    function Update(Request $request)
    {
        // echo "<pre>";
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

        // echo "<pre>"; 
        // print_r($request->all());die;
        $login = User::where(['email' => $request['email'], 'password' => $request['password']])->first();
       
        $request->session()->put('data',$login);
        
        if ($login) {
            return redirect('index')->with('message', 'Login successfully !!');
        } else {
            return redirect('admin_login')->with('message', 'Your email or password is incorrect please try again ! ');
        }
    }

    public function manage_access(){

       
        $users = User::all();
      
        return view('manage_access', compact('users'));
    }

    public function deny_access(Request $request){
        $count = AccessWebsite::where(['user_id'=>$request->user_id])->count();
        //echo $count;die;
        if($count>0){
            $data['site_access'] =$request->site_access=='on' ?  1 : 0;
            $data['create_account'] =$request->create_account=='on' ?  1 : 0;
            $update = AccessWebsite::where('user_id', $request->user_id)->update($data);
            if($update){
                return redirect('manage_access')->with('message', 'Changes Successfully!');
            }
        }else{
            $data = new AccessWebsite;
        $data['site_access'] = $request->site_access=='on' ?  1 : 0;
        $data['user_id'] = $request->user_id;
        $data['create_account'] = $request->create_account=='on' ?  1 : 0;
        if($data->save()){
            return redirect('manage_access')->with('message', 'Changes Successfully!');
        }
    }

}
    public function locations(){
        $locations = Location::all();
        return view('locations',compact('locations'));
    }


    public function locations_admin(Request $request)
    {
        $user = new Location;
        $user['location_name'] = $request->location_name;
        $user['description'] = $request->description;
        
        if($user->save()){
        return redirect('locations')->with('message', 'locations successfully !');
    }
    }

    function location_update(Request $request)
    {
        // echo "<pre>";
        // print_r($request->all());die;
        $user = Location::find($request->id);
        $user->location_name = $request->location_name;
        $user->description = $request->description;
        
        $user->save();
        return redirect('locations')->with('message', 'Updated  Successfully!');
    }

    
}
