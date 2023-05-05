<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AddUser;
use App\Models\User;
use App\Models\Report;
use App\Models\CompanyDetails;
use App\Models\Report_image;
use App\Models\Location;
use App\Models\AccessWebsite;
use Illuminate\Support\Facades\Hash;
use DB;
use Session;
use Mail;
use PDF;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
      
    }

    //
    public function profile_page()
    {
        return view('admin.profile_page');
    }

    public function getUsers()
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

    public function index(){
        $count = User::get()->count();
        $report = Report::get()->count();
        return view('admin.index',compact('count','report'));
    }

    public function add_user(Request $request)
    {
      $input = $request->all();
 
        $request->validate([
            'name' => 'required',
            'categeory' => 'required',
            'phone' => 'required|min:10',
            'address' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:6|max:8',
        ]);
        $data = new User;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;
        $data['bcrypt_password'] = Hash::make($request->password);
        $data['phone'] = $request->phone;
        $data['profile'] = '';
        $data['type'] = $request->categeory;
        $data['address'] = $request->address;
        if($data->save()){
            return redirect('users')->with('message', 'User created successfully !');
         }
    }
    public function get_user()
    {
        $users = User::all()->except(1);
        return view('admin.users', compact('users'));
    }

    function ShowData($id)
    {
        $data = User::find($id);
        return view('admin.edit', compact('data'));
    }

    function update(Request $request)
    {
        $data = User::find($request->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->bcrypt_password = Hash::make($request->password);
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->save();
        return redirect('users')->with('message', 'Updated User Successfully!');
    }

    public function delete_supervisor($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('users')->with('message', 'Deleted User Successfully!');
    }


    public function admin_login()
    {
        return view('admin.admin_login');
    }


    public function login(Request $request)
    {    
        $login = User::where(['email' => $request['email'], 'password' => $request['password'],'type'=>$request->type])->first();
        $request->session()->put('data',$login);
        if (isset($login) && $login['type'] == 'admin' || isset($login) && $login['type'] == 'supervisor' || isset($login) && $login['type'] == 'dispatcher' || isset($login) && $login['type'] == 'guard') {
            return redirect('index')->with('message', 'Login successfully !!');
        } 
        elseif (isset($login) && $login['type']=='client') {
            return redirect('admin_reports')->with('message', 'Login successfully !!');  
        }
        else {
            return redirect('login')->with('error', 'Your email or password is incorrect please try again ! ');
        }
    }

    public function manage_access(){
       
        $users = User::all()->except(1);
        $company = CompanyDetails::all();
        $sub_location = DB::table('sub_location')->get();
        $locations = Location::get()->unique('parent_location')->toArray();
        // echo "<pre>";
        // print_r($locations);die;
        return view('admin.manage_access', compact('users','locations','company','sub_location'));
    }
    
    public function show_access($id=0){
          $infor = AccessWebsite::where(['user_id'=>$id])->get()->toArray();
         return response()->json([
            'permision' => $infor
              ]);
    }
    
      public function get_location($id=0){
          $main_location = explode(',',$id);
          $infor = CompanyDetails::select('main_location','sub_location','company_name')->whereIn('id',$main_location)->get()->toArray();
            for($i=0;$i<count($infor);$i++){
                // $location=array();
                // $sub_locations=array();
                $location[] = Location::select('locations.id','locations.parent_location')
                 ->whereIn('locations.id',json_decode($infor[$i]['main_location']))
                  ->groupBy('locations.parent_location')
                  ->get()->toArray();
                  
                //$location[] = Location::whereIn('id',json_decode($infor[$i]['main_location']))->groupBy('parent_location')->get()->toArray();
                $sub_locations[] = DB::table('sub_location')->whereIn('id',json_decode($infor[$i]['sub_location']))->get()->toArray();
                
                $company[] = $infor[$i]['company_name'];
                //print_r($location);
            }
        //print_r($location);
                    
        
          return response()->json([
            'location' => $location,
            'sub_location'=>$sub_locations,
            'company'=>$company
        ]);

    }

    public function edit_location($id,$sub_id=0){
        $data = Location::find($id);
        $locations =DB::table('sub_location')->where('id',$sub_id)->get()->toArray();
       // print_r($locations);die;
        return view('admin.edit_location',compact('data','locations'));
    }

    public function deny_access(Request $request){
            $request->validate([
            'user_id' => 'required',
            'parent_location' => 'required',
            'location_id' => 'required',
            'report_assign' => 'required',
         
        ]);
        
        // echo "<pre>";
        
        // print_r($request->all());die;
        $count = AccessWebsite::where(['user_id'=>$request->user_id])->count();
        if($count>0){
            $data['company_id'] =$request->parent_location;
            $data['site_access'] =$request->site_access=='on' ?  1 : 0;
            $data['location_id'] =$request->location_id;
            $data['sub_location'] =$request->sub_location;
            $data['control_users'] =$request->users_id ? $request->users_id : '';
            $data['report_assign'] =$request->report_assign;
            $data['create_report'] =$request->create ? $request->create : 0;
            $data['view_report'] =$request->view ? $request->view : 0;
            $data['edit_report'] =$request->edit ? $request->edit :0;
            $data['delete_report'] =$request->delete ? $request->delete : 0;
          $data['create_account'] =$request->create_account=='on' ?  1 : 0;
            $update = AccessWebsite::where('user_id', $request->user_id)->update($data);
            if($update){
                return redirect('manage_access')->with('message', 'Changes Successfully!');
            }
        }else{
            $data = new AccessWebsite;
            $data['company_id'] =$request->parent_location;
            $data['control_users'] =$request->users_id ? $request->users_id : '';
            $data['site_access'] = $request->site_access=='on' ?  1 : 0;
            $data['user_id'] = $request->user_id;
            $data['location_id'] =$request->location_id;
            $data['sub_location'] =$request->sub_location;
            $data['report_assign'] =$request->report_assign;
             $data['create_report'] =$request->create ? $request->create : 0;
            $data['view_report'] =$request->view ? $request->view : 0;
            $data['edit_report'] =$request->edit ? $request->edit :0;
            $data['delete_report'] =$request->delete ? $request->delete : 0;
            $data['create_account'] = $request->create_account=='on' ?  1 : 0;
            
            if($data->save()){
                return redirect('manage_access')->with('message', 'Changes Successfully!');
            }
    }

}
    public function locations(){
        $login = Session::get('data')->toArray();
         $final_data =[];
          
         if($login['type'] == 'admin'){
           $locations = Location::get()->unique('parent_location')->toArray();
           
        }else{
            $locations = Location::get()->unique('parent_location')->toArray();
           
        }
        // echo "<pre>";
        // print_r($locations);die;
        for($i=0;$i<count($locations);$i++){
                 $id= array_key_exists($i,$locations) ? $locations[$i]['id'] : '';
                 if($id){
                    $company_detail = CompanyDetails::select("company_name")
                   ->where('main_location', 'like', '%' . $id . '%')
                    ->get()->toArray(); 
                    $collect = collect($company_detail)->pluck('company_name')->implode(',');
                    
                    $locations[$i]['company_name'] = $collect; 
             }
        
                    
                
        }

    // echo "<pre>";
    
    // print_r($locations);die;
        return view('admin.locations',compact('locations'));
    }
    
      public function get_company(){
            $login = Session::get('data');
            $permissions = AccessWebsite::where('user_id',$login['id'])->get();
            $sublocation_admin = DB::table('sub_location')->select('id','sub_location')->get()->toArray(); 
            if($login['type']=='admin'){ 
                $get_locations = Location::get()->unique('parent_location')->toArray();      
                $final_location = CompanyDetails::all();
                
            }
            else{
              $get_locations = Location::get()->unique('parent_location')->toArray();      
              $final_location = CompanyDetails::all();
            }
         
            $locations=[];
            $final_data =[];
             $sub_locations =[];
            
            foreach ($final_location as $location) {
                $final_array['id']= $location->id;
                $final_array['company_name']= $location->company_name;
                $final_array['description']= $location->description;
                $final_array['sub_location']= $location->sub_location;
                $details = json_decode($location->main_location);
                $details1 = json_decode($location->sub_location); 
                $locations = Location::select("parent_location")
                    ->whereIn('id', $details)
                    ->get()->toArray();   
                    
                 $sub_locations = DB::table('sub_location')->select('sub_location')
                    ->whereIn('id', $details1)
                    ->get()->toArray();  
                $final_array['location'] = collect($locations)->pluck('parent_location')->implode(',');
                 $final_array['sub_location'] = collect($sub_locations)->pluck('sub_location')->implode(',');
                  array_push($final_data,$final_array);
              
               
            }           
            
     
          return view('admin.company_details',compact('locations','final_data','get_locations','sublocation_admin'));
              
        }
    
    public function sub_locations(){
        $login = Session::get('data')->toArray();
        $only_main_location = Location::get()->unique('parent_location');
        if($login['type'] == 'admin'){
        $locations = Location::select('locations.*','sub_location.sub_location','sub_location.id as sub_id','sub_location.address as sub_address')
        ->leftjoin('sub_location','sub_location.parent_location_id','=','locations.id')
        ->distinct()->get()->toArray();
        $sublocation_admin = DB::table('sub_location')->select('id','sub_location')->get()->toArray(); 
        }else{
            $locations = Location::select('locations.*','sub_location.sub_location','sub_location.id as sub_id','sub_location.address as sub_address')
        ->leftjoin('sub_location','sub_location.parent_location_id','=','locations.id')->where('locations.user_id',$login['id'])
        ->get()->toArray();
        
             $sublocation_admin = DB::table('sub_location')->select('id','sub_location')->get()->toArray(); 
        }
        
        //print_r($locations);die;
        for($i=0;$i<count($locations);$i++){
            $id= $locations[$i]['id'];
            $company_detail = DB::table('company_details')->where('main_location', 'like', '%' . $id . '%')->get()->toArray();
 
            $locations[$i]['company_name'] = count($company_detail)>0 ? $company_detail[0]->company_name:''; 
            
        }
      
        return view('admin.sub_location',compact('locations','only_main_location','sublocation_admin'));
    }
    
    public function update_locations(Request $request){
        $data = Location::find($request->id);
        $data['parent_location'] = $request->parent_location;
        $data->address = 'Null';
        $data->description = $request->description ? $request->description :'';
        $data->save();
        return redirect('locations')->with('message', 'Location Updated Successfully!');
        
    }
    public function delete_location($id){

            $data = Location::find($id);
            if($data)
                    echo json_encode(['message'=>'Location deleted Successfully!']);
                    else
                    echo json_encode(['message'=>'Some Error!']);
     }

    public function update_profile(Request $request){
        
        //  $validator = Validator::make($request->all(), [  
        //     'name' => 'required',
        //     'email' => 'required',
        //     'password' => 'required',
        //     'phone' => 'required',
        //     'address' => 'required'
            
        // ]);
  
        // if ($validator->fails()) {
        //      return response()->json(['error'=>$validator->errors()]);
        // }
        
        $data = User::find($request->id);
        $data->profile = '';
          if($request->hasfile('file')){
            $extension = $request->file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $request->file->move(public_path('profile'), $filename);
            $data->profile = $filename;
         }
        $data->name = $request->name ? $request->name : '';
        $data->email = $request->email ? $request->email : '';
        $data->password = $request->password ? $request->password : '';
        $data->phone = $request->phone ? $request->phone : '';
        $data->address = $request->address ? $request->address : '';
        $data->save();
        
        session()->put('data', $data);
        return redirect('profile_page')->with('message', 'Profile Updated Successfully!');
        
    }

         public function insert_title(Request $request){
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
        //$current_date = date('Y-m-d', strtotime("+1 day")); 
        $current_date = date('Y-m-d');    

        $login = Session::get('data');
        $data = DB::table('custom_title')->select('id','title')->get();
        $permissions = AccessWebsite::where('user_id',$login['id'])->get();
        // echo "<pre>";
        // print_r($permissions);die;
        $sublocation_admin=[];
         $company='';
         if($login['type']=='admin'){
         $activitys = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location','sub_location.id as sub_id')
            ->join('locations' , 'locations.id', '=', 'reports.main_location')
            ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
            ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
            ->with('users')->get()->toArray();

        $locations = Location::all();
        $sublocation_admin = DB::table('sub_location')->select('id','sub_location','parent_location_id')->get()->toArray();  
         
          // $company = DB::table('company_details')->get()->unique('company_name')->toArray();
         $company = CompanyDetails::get()->unique('company_name');
         
       
         }
         else{
       
            $company=[];
             if($login['type']=='client'){
             $activitys = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location','sub_location.id as sub_id')
            ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
            ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
            ->join('locations', 'locations.id', '=', 'reports.main_location')
            ->with('users')
            ->whereIn('main_location',$permissions ? $permissions[0]->location_id:[])
            ->where('company_id',$permissions[0]->company_id)
            ->where('report_date',$current_date)
            ->get()->toArray();
            // echo "<pre>";
            // print_r($activitys);die;
            $sublocation_admin = DB::table('sub_location')->select('id','sub_location','parent_location_id')->get()->toArray();
              $company = CompanyDetails::whereIn('id',$permissions ? $permissions[0]->company_id:[])->groupBy('company_name')->get();
              $locations = Location::whereIn('id',$permissions ? $permissions[0]->location_id:[])->get();
             }else{
                 
                  $activitys = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location','sub_location.id as sub_id')
                ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
                ->join('locations', 'locations.id', '=', 'reports.main_location')
                ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
                ->with('users')
                ->whereIn('main_location',count($permissions) > 0 ? $permissions[0]->location_id:[])
                ->orWhere('company_id',count($permissions) > 0 ? $permissions[0]->company_id:[])->get()->toArray();
                
              $company = CompanyDetails::whereIn('id',count($permissions) > 0 ? $permissions[0]->company_id:[])->get(); 
              
              $locations = Location::whereIn('id', count($permissions) > 0 ? $permissions[0]->location_id :[])->get();
              
              $sublocation_admin = DB::table('sub_location')->select('id','sub_location','parent_location_id')->get()->toArray();
               
                
             }
           
          }
  
           return view('admin.admin_reports',compact('data','locations','activitys','login','company','permissions','sublocation_admin'));
        
    }
    public function edit_title(Request $request){
            $data = DB::table('custom_title')->where(['id' => $request['id']])->update(['title'=>$request['title']]);
            if($data){
                echo json_encode(['message'=>'Updated Successfully!']);
            }
            else{
                echo json_encode(['message'=>'Some error!']);
            }
       
    }

    public function locations_insert(Request $request){
        $request->validate([
            'parent_location' => 'required',
            //'description' => 'required',
            
        ]);
             $data = new Location;
            $id = session('data')['id'];
            $data['parent_location'] = $request->parent_location;
            $data['address'] = 'NULL';
            $data['parent_location'] = $request->parent_location;
            $data['description'] = $request->description ? $request->description : '';   
            $data['user_id'] = $id; 
            if($data->save()){
              return redirect('locations')->with('message', 'Location created successfully !');
           }
    }

    public function delete_title(Request $request,$id){
        DB::table('custom_title')->where('id',$id)->delete();
        return redirect('report_title')->with('message', 'Deleted Title Successfully!');
    }

   public function insert_activity(Request $request){
       $validator = Validator::make($request->all(), [
            'report_type' => 'required',
            'company_id' => 'required',
            'level' => 'required',
            'main_location' => 'required',
            'sub_location' => 'required',
            'report_title' => 'required',
            'address' => 'required',
            'report_time' => 'required',
            'description' => 'required',
            'report_date' => 'required',
            'report_photo' => 'required',
        ]);
  
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->errors()]);
        }

    $sub_id = '';
            if($request->custom_id){
                $sublocation = array(
                    'sub_location'=>$request->custom_id,
                    'parent_location_id'=>$request->main_location,
                    'description'=>''             
                    );  
                $sub_id= DB::table('sub_location')->insertGetId($sublocation);

            }

            $data = new Report;
            $data['report_title'] = $request->report_title;
            $data['address'] = $request->address;
            $data['company_id'] = $request->company_id;
            $data['level'] =    $request->level;
            $data['user_id'] = $request->user_id;
            $data['main_location'] = $request->main_location;
            $data['sub_location'] = $sub_id ? $sub_id : $request->sub_location;
            $data['report_time'] = $request->report_time." ".$request->meridian;
            $data['description'] = $request->description;
            $data['report_date'] = $request->report_date;        
            $data['report_type'] = $request->report_type;        
            if($request->hasfile('report_photo')){
                foreach ($request->report_photo as $image) {
                     $name = $image->getClientOriginalName();
                     $filename = time().'.'.$name;
                     $image->move(public_path('images'), $filename);
                     $image_array[]  = $filename;
            }

            $data->report_photo = json_encode($image_array);
        }        
            if($data->save()){                          
                    echo json_encode(['message'=>'Report Successfully!']);
                }else{
               echo json_encode(['message'=>'Some error!']); 
            }
    }

    function edit_report(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'report_type' => 'required',
            'level' => 'required',
            'main_location' => 'required',
            'sub_location' => 'required',
            
            'report_title' => 'required',
            'company_id' => 'required',
            'address' => 'required',
            'report_time' => 'required',
            'description' => 'required',
            'report_date' => 'required',
        ]);
  
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->errors()]);
        }
        $data = Report::find($request->id);
        $sub_id = ''; 
            if($request->custom_id){
                $sublocation = array(
                    'sub_location'=>$request->custom_id,
                    'parent_location_id'=>$request->main_location,
                    'description'=>''             
                    );  
             $sub_id= DB::table('sub_location')->insertGetId($sublocation);

            }
            
        if($request->hasfile('report_photo')){
                foreach ($request->report_photo as $image) {
                     $name = $image->getClientOriginalName();
                     $filename = time().'.'.$name;
                     $image->move(public_path('images'), $filename);
                     $image_array[]  = $filename;
            }

            $data->report_photo = json_encode($image_array);
        }      
        
        $data->report_title = $request->report_title;
        $data->user_id= $request->user_id;
        $data->address = $request->address;
        $data->level =   $request->level;
        $data->main_location = $request->main_location;
        $data->sub_location = $sub_id ? $sub_id : $request->sub_location;
        $data->report_time = $request->report_time." ".$request->meridian;
        $data->description = $request->description;
        $data->report_date = $request->report_date;        
        $data->report_type = $request->report_type;         
        if($data->save())
             echo json_encode(['message'=>'Update Report Successfully!']);
        else
        echo json_encode(['message'=>'Some error!']);
    }

            public function report_view($id){
                $reports_view = Report::select('reports.*','locations.parent_location','sub_location.sub_location')
                ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
                ->join('locations', 'locations.id', '=', 'reports.main_location')
                ->where('reports.id',$id)->with('users')->get()->toArray();
                
                if($reports_view){
                    return view('admin.report_view',compact('reports_view'));
                }
                
                else
                    return redirect('admin_reports');
                
                
            }
            public function delete_data(Request $request,$id,$tbl){ 
                $delete = DB::table($tbl)->where('id',$id)->delete();
                if($delete)
                   echo json_encode(['message'=>'Delete  Successfully!']);
                else
                   echo json_encode(['message'=>'Some Error!']);
            }
           
            public function report_date(){
                $filter_data = Session::get('filter');
                $report_image = Report_image::all();
                // print_r($report_image);die;
                $reports = Report::select('reports.*','custom_title.title','locations.parent_location','sub_location.sub_location')
                ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
                ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
                ->join('locations', 'locations.id', '=', 'reports.main_location')
                ->where(['main_location'=>$filter_data['main_location'],'company_id'=>$filter_data['company_id']])
                ->where(['sub_location.id'=>$filter_data['sub_location']])
                ->whereBetween('report_date', [$filter_data['start_date'], $filter_data['end_date']])->with('users')->get()->toArray();
            // echo "<pre>";
            // print_r($reports);die;
                
                return view('admin.report_date',compact('reports','filter_data','report_image'));

               
            }            

            public function filter_data(Request $request){ 
                // echo "<pre>";
                // print_r($request->all());die;
                   $request->validate([
                    'main_location' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required',
                    'company_id' => 'required',
                    'sub_location'=>'required',
                         ]);
                 
                $filter['main_location'] = $request->main_location;
                 $filter['company_id'] = $request->company_id;
                $filter['start_date'] = $request->start_date;
                $filter['end_date'] = $request->end_date;
                $filter['sub_location'] = $request->sub_location;
               
              
                Session::put('filter', $filter);
                return redirect('report_date');
            }
            public function logout(){
                Session::flush();
                Session::forget('data');
                return redirect('login');
            }
            
             public function company_details(Request $request)
              {
            $data = $request->all();
            $data['main_location'] =$request->custom_loc ? $request->custom_loc : $request->main_location;
            $data['sub_location'] =$request->custom_sub ? $request->custom_sub : $request->sub_location;
            
            $data['address'] = $request->address;
              $validator = Validator::make($data, [
                    'company_name' => 'required',
                    'main_location'=>'required',
                    'address'=>'required',
                    'sub_location'=>'required'
                ],
              [
               'main_location.required' => 'Select main location or create custom location'
              ]
               
            );
          
                if ($validator->fails()) {
                     return response()->json(['error'=>$validator->errors()]);
                }
                 $custom_loc=[];
                 $parent_id='';
                 $custom_sub=[];
                $login = Session::get('data');
                $custom_loc;
                if($request->custom_loc){
                        $main_location= array(
                            'parent_location'=>$request->custom_loc,
                            'address'=>'',
                            'description'=>'',
                            'user_id'=>$login->id
                        );  
                        $parent_id = DB::table('locations')->insertGetId($main_location);
                        $custom_loc[]= $parent_id;
                   }
                   
                   $sub_location_name = $this->getSubLocation($request->sub_location);
                   //print_r($sub_location_name);die;
                    $sub_location= array(
                            'sub_location'=>$request->custom_sub ? $request->custom_sub : $sub_location_name[0]->sub_location,
                            'description'=>'',
                            'address'=>$request->address,
                            'parent_location_id'=>$parent_id ? $parent_id :implode("",$request->main_location)
                            
                 );  
                $custom_sub[]= DB::table('sub_location')->insertGetId($sub_location);
                    
           
                $data = new CompanyDetails;
                $data['company_name'] = $request->company_name;
                $data['address'] = '';
                $data['main_location'] = $custom_loc ? json_encode($custom_loc) : json_encode($request->main_location);
                $data['sub_location'] = $custom_sub ? json_encode($custom_sub) :json_encode($request->sub_location) ;
                $data['type'] = $login['type'];
                $data['description'] = $request->description;  
                $data['user_id'] =$login->id; 
                $data['logo'] = '';
                if($request->hasfile('logo')){
                    $extension = $request->file('logo')->getClientOriginalName();
                    $filename = time().'.'.$extension;
                    $request->logo->move(public_path('images'), $filename);
                    $data['logo'] = $filename;
         }
        
                if($data->save())
                        echo json_encode(['message'=>'Company Save  Successfully!']);
                    else
                    echo json_encode(['message'=>'Some Error!']);                 
                 }
    
    function getSubLocation($sub_id){
        if($sub_id){
            $sub_location_data = DB::table('sub_location')->whereIn('id',$sub_id)->get()->toArray();
            return $sub_location_data;
        }
         return [];  
          
    }
      
        
         function update_company(Request $request)
        {     
            $data = $request->all();
            $data['main_location'] =$request->custom_loc ? $request->custom_loc : $request->main_location;
            $data['sub_location'] =$request->custom_sub ? $request->custom_sub : $request->sub_location;
            $validator = Validator::make($data, [
            'company_name' => 'required',
            'main_location' => 'required',
            'sub_location' => 'required',
            //'description' => 'required',

        ]);
        
  
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->errors()]);
        }
        
                    $custom_loc=[];
                     $parent_id='';
                     $custom_sub=[];
                    $login = Session::get('data');
                    $custom_loc;
                 if($request->custom_loc){
                        $main_location= array(
                            'parent_location'=>$request->custom_loc,
                            'address'=>'',
                            'description'=>'',
                            'user_id'=>$login->id
                        );  
                        $parent_id = DB::table('locations')->insertGetId($main_location);
                        $custom_loc[]= $parent_id;
                   }
                   
                   $sub_location_name = $this->getSubLocation($request->sub_location);
                   //print_r($sub_location_name);die;
                    $sub_location= array(
                            'sub_location'=>$request->custom_sub ? $request->custom_sub : $sub_location_name[0]->sub_location,
                            'description'=>'',
                            'address'=>$request->address,
                            'parent_location_id'=>$parent_id ? $parent_id :implode("",$request->main_location)
                            
                 );  
                $custom_sub[]= DB::table('sub_location')->insertGetId($sub_location);
            $data = CompanyDetails::find($request->id);
            $data->company_name = $request->company_name;
            $data->address = '';
            $data->main_location = $request->main_location? json_encode($request->main_location):json_encode($custom_loc) ;
            $data->sub_location = $custom_sub ? json_encode($custom_sub) :json_encode($request->sub_location) ;
            $data->description = $request->description;
             if($data->save())
                     echo json_encode(['message'=>'Company Save  Successfully!']);  
                else
                   echo json_encode(['message'=>'Some Error!']);
        }
        
        
        // function sendEmail(){
        //     $data["email"] = "ritesh@codenomad.net";
        //     $data["title"] = "This is a test email with pdf file";
        //     $data["body"] = "Test email";      
            
      
        //     Mail::send('admin.email', $data, function($message)use($data) {
        //         $message->to($data["email"])
        //                 ->subject($data["title"]);
        //     });      
        //     dd('Mail sent successfully');              
        // }
        
        function sendEmail(){
            
            $to_name = "Ritesh";
            $to_email = "ritesh@codenomad.net";
            $data = array("name"=>"Fahim", "body" => "A test mail");
            
            Mail::send("admin.email", $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject("Laravel Test Mail");
            $message->from("reports@quickreportingsystems.com","Test Mail");
            });
            dd('Mail sent successfully'); 
         }       
              
                        
        public function get_address($id=0){
            $ids = explode(",",$id);
            $locations = Location::select('locations.*','sub_location.id as sub_id','sub_location.sub_location','sub_location.parent_location_id')
            ->join('sub_location','sub_location.parent_location_id','=','locations.id')
            ->whereIn('locations.id',$ids) ->distinct('sub_location.sub_location')
            ->groupBy('sub_location.sub_location')
             ->selectRaw('MIN(sub_location.id) as sub_id')
             ->get()->toArray();
    
        return response()->json([
            'locations' => $locations
        ]);

    }
    public function sub_location(Request $request){  
         $data = $request->all();
         //print_r($data);die;
       $data['custom_location'] = $request->custom_location ? $request->custom_location:$request->sub_location;
           $validator = Validator::make($data, [  
            'custom_location' => 'required',
            'address' => 'required',
            'parent_location' => 'required'
        ]);
  
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->errors()]);
        }
        $count = DB::table('sub_location')->where(['parent_location_id'=>$request->parent_location,'sub_location'=>$data['custom_location']])->count();
             $sublocation = array(
            'sub_location'=>$request->custom_location ? $request->custom_location:$request->sub_location,
            'parent_location_id'=>$request->parent_location,
            'description'=>$request->description ? $request->description : '',
            'address'=>$request->address ? $request->address : ''
        );
        $save = $this->updateData($count,$sublocation,$data);
      
        if($save)
            echo json_encode(['message'=>'Sub Location Save  Successfully!']);
        else
            echo json_encode(['message'=>'Some Error!']);
    }
    
    public function updateData($count,$sublocation,$data){
          if($count>0){
            $save = DB::table('sub_location')->where(['parent_location_id'=>$data['parent_location'],'sub_location'=>$data['custom_location']])->update($sublocation);
        }
   
        else
          $save = DB::table('sub_location')->insert($sublocation);
          
          return $save;
    }


public function edit_sublocation(Request $request){  
       $data = $request->all();
       $data['custom_location'] = $request->custom_location ? $request->custom_location:$request->sub_location;
           $validator = Validator::make($data, [  
            'custom_location' => 'required',
           // 'description' => 'required',
            'sub_location' => 'required',
            'parent_location' => 'required'
        ]);
  
        if ($validator->fails()) {
             return response()->json(['error'=>$validator->errors()]);
        }
        $sublocation = array(
            'sub_location'=>$request->custom_location ? $request->custom_location:$request->sub_location,
            'parent_location_id'=>$request->parent_location,
            'description'=>$request->description ? $request->description : '',
            'address'=>$request->address ? $request->address : ''
        );

        $save = DB::table('sub_location')->where(['id'=>$request->sub_id])->update($sublocation);
        if($save)
            echo json_encode(['message'=>'Sub Location Save  Successfully!']);
        else
            echo json_encode(['message'=>'Some Error!']);
    }
    public function get_report_images(){

        return view('admin.report_image');
 
}
public function update_report_images(Request $request){
    
    $data = Report_image::find(1);
    // echo "<pre>";
    // print_r($data);
    
    if($data)
    {
        $extension = $request->file->getClientOriginalName();
        $filename = time().'.'.$extension;
        $data->file = $filename;
        $request->file->move(public_path('images'), $filename);
        $data->save();
    }
    else{
        $data = new Report_image;
        $extension = $request->file->getClientOriginalName();
        $filename = time().'.'.$extension;
        $request->file->move(public_path('images'), $filename);
        $data->file = $filename;
         $data->save();

    }
           return redirect('get_report_images')->with('message', 'Report image set successfully !');   
    
  }
  
  public function get_sub_address($sub_id =0){
    $locations = DB::table('sub_location')->where('id',$sub_id)->get()->toArray();
    
        return response()->json([
            'locations' => $locations
        ]);
      
  }
  
  
  public function get_data(){
      
      $data = User::select('users.*','access_websites.user_id','access_websites.location_id','access_websites.company_id','access_websites.sub_location')
      ->leftjoin('access_websites','access_websites.user_id','users.id')
      ->where('users.type', '=', 'client')->get()->toArray();
    foreach ($data as $user) {
        $company_id =  $user['company_id'];
        $sub_location =  $user['sub_location'];
     $report = Report::whereIn('sub_location',json_decode($sub_location))
        ->whereIn('company_id',json_decode($company_id))
     ->get()->toArray();
       
     print_r($report);die;
     
     
     
     
    //   return response()->json([
    //       'data' => $var
    //       ]);
    
  }
  }
  
  
  public function email_data(){
      return view('admin.email');
  }
}





