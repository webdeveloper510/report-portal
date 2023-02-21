<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;
use App\Models\User;
use App\Models\Location;
use App\Models\AccessWebsite;
use DB;
class AdminController extends Controller
{
    //
    public function profile_page()
    {
        return view('admin.profile_page');
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
        $data['type'] = $request->categeory;
        $data['address'] = $request->address;
     
                if($data->save()){
                return redirect('users')->with('message', 'Supervisor created successfully !');
            }
    }
    public function get_user()
    {
        $users = User::all();
        // echo "<pre>";
        // print_r($users);die;
        return view('admin.users', compact('users'));
    }

    function ShowData($id)
    {
        // $usernames = User::all('name');
        // echo $usernames; die;
        $data = User::find($id);
        // echo "<pre>";
        // print_r($data);die;
        return view('admin.edit', compact('data'));
    }

    function update(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->type = $request->categeory;
        $data->address = $request->address;
        
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
        return view('admin.admin_login');
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

      $locations = Location::all();
        return view('admin.manage_access', compact('users','locations'));
    }

    public function edit_location($id){
        $data = Location::find($id);
        return view('admin.edit_location',compact('data'));
    }

    public function deny_access(Request $request){

        $count = AccessWebsite::where(['user_id'=>$request->user_id])->count();
        //echo $count;die;
        if($count>0){
            $data['site_access'] =$request->site_access=='on' ?  1 : 0;
            $data['location_id'] =json_encode($request->location_id);
          $data['create_account'] =$request->create_account=='on' ?  1 : 0;
            $update = AccessWebsite::where('user_id', $request->user_id)->update($data);
            if($update){
                return redirect('manage_access')->with('message', 'Changes Successfully!');
            }
        }else{
            $data = new AccessWebsite;
        $data['site_access'] = $request->site_access=='on' ?  1 : 0;
        $data['user_id'] = $request->user_id;
        $data['location_id'] =json_encode($request->location_id);
        $data['create_account'] = $request->create_account=='on' ?  1 : 0;
        if($data->save()){
            return redirect('manage_access')->with('message', 'Changes Successfully!');
        }
    }

}
    public function locations(){
        $locations = Location::all();
        return view('admin.locations',compact('locations'));
    }

    public function update_locations(Request $request){
     
        $data = Location::find($request->id);
        $data->location_name = $request->location_name;
        $data->description = $request->description;
        $data->save();
        return redirect('locations')->with('message', 'Location Updated Successfully!');
        
    }
    public function delete_location($id){

        $data = Location::find($id);
        $data->delete();
        return redirect('locations')->with('message', 'Location Delete Successfully!');

    }

    public function update_profile(Request $request){
        // echo "<pre>";
        // print_r($request->all());die;
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        return redirect('profile_page')->with('message', 'Profile Updated Successfully!');
        
    }

         public function insert_title(Request $request){
            // echo "<pre>";
            // print_r($request->all());die;
                $title = $request->input('title');
                $data=array('title'=>$title);
                $save = DB::table('custom_title')->insert($data);    
                if($save){
                    echo json_encode(['message'=>'Title Created Successfully!']);
                }
    
                else{
                    echo json_encode(['message'=>'Some error!']);
                }         
    } 


    public function report_title(){
        $data = DB::table('custom_title')->select('id','title')->get();
        return view('admin.report_title',compact('data'));
    }
    public function edit_title(Request $request){
        // echo "<pre>";
        // print_r($request->all());die;
            $data = DB::table('custom_title')->where(['id' => $request['id']])->update(['title'=>$request['title']]);

            if($data){
                echo json_encode(['message'=>'Updated Successfully!']);
            }

            else{
                echo json_encode(['message'=>'Some error!']);
            }
       
    }

    public function locations_insert(Request $request){
        $data = new Location;
        $data['location_name'] = $request->location_name;
        $data['description'] = $request->description;
       
        if($data->save()){
        return redirect('locations')->with('message', 'Location created successfully !');
    }
    }

    // public function delete_title($id){
       
    //     // echo "<pre>";
    //     // print_r($data);die;
    //   DB::delete('delete from custom_title where id = ?', [$id]);
    //     return redirect('report_title')->with('message', 'Deleted Title Successfully!');

    // }
    
}
