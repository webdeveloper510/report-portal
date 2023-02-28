<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;
use App\Models\User;
use App\Models\Report;
use App\Models\Location;
use App\Models\AccessWebsite;
use DB;
use Session;

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
                return redirect('users')->with('message', 'User created successfully !');
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
        return redirect('users')->with('message', 'Updated User Successfully!');
    }

    public function delete_supervisor($id)
    {
        $data = User::find($id);
        // echo "<pre>";
        // print_r($data);die;
        $data->delete();
        return redirect('users')->with('message', 'Deleted User Successfully!');
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

    public function admin_reports(){
     
        $data = DB::table('custom_title')->select('id','title')->get();
        $locations = Location::all();
        $activitys = Report::with('users')->get()->toArray();
        return view('admin.admin_reports',compact('data','locations','activitys'));
        
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

    public function delete_title(Request $request,$id){
       
        // echo "<pre>";
        DB::table('custom_title')->where('id',$id)->delete();
        return redirect('report_title')->with('message', 'Deleted Title Successfully!');
    }

   public function insert_activity(Request $request){
    // echo "<pre>";
    // print_r($request->all());die;

            $data = new Report;
            $data['report_title'] = $request->report_title;
            $data['user_id'] = $request->user_id;
            $data['main_location'] = $request->main_location;
            $data['sub_location'] = $request->sub_location;
            $data['report_time'] = $request->report_time;
            $data['report_date'] = $request->report_date;        
            $data['report_type'] = $request->report_type;        
            if($request->hasfile('report_photo')){
                foreach ($request->report_photo as $image) {
                     $extension = $image->getClientOriginalExtension();
                     $filename = time().'.'.$extension;
                $image->move(public_path('images'), $filename);
                     $image_array[]  = $filename;
            }
            // echo "<pre>";
            // print_r($image_array);die;
            // die;
            $data->report_photo = json_encode($image_array);
        }
 
            if($data->save())       
                    echo json_encode(['message'=>'Report Successfully!']);
             else
               echo json_encode(['message'=>'Some error!']);
     
    }



            public function report_view($id){
                $reports_view = Report::with('users')->where('id',$id)->get()->toArray();
                // echo "<pre>";
                // print_r(json_decode($reports_view[0]['report_photo']));die;
                    return view('admin.report_view',compact('reports_view'));
            }
            public function delete_report(Request $request,$id){      
                DB::table('reports')->where('id',$id)->delete();
                return redirect('admin_reports')->with('message', 'Deleted Report Successfully!');
            }
           
            public function report_date(){
                $filter_data = Session::get('filter'); 
                // print_r($filter_data);die;   
                $reports = Report::with('users')->whereBetween('report_date', [$filter_data['start_date'], $filter_data['end_date']])->get()->toArray();
                return view('admin.report_date',compact('reports','filter_data'));
            }            

            public function filter_data(Request $request){               
                $filter['start_date'] = $request->start_date;
                $filter['end_date'] = $request->end_date;
                Session::put('filter', $filter);
                return redirect('report_date');


            }
           
            
   }
    

