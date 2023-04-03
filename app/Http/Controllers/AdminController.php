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
        $users = User::all();
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
        if ($login) {
            return redirect('index')->with('message', 'Login successfully !!');
        } else {
            return redirect('login')->with('error', 'Your email or password is incorrect please try again ! ');
        }
    }

    public function manage_access(){
       
        $users = User::all();
        $company = CompanyDetails::all();
        $sub_location = DB::table('sub_location')->get()->toArray();
        $locations = Location::all()->toArray();
        // echo "<pre>";
        // print_r($locations);die;
        return view('admin.manage_access', compact('users','locations','company','sub_location'));
    }

    public function edit_location($id,$sub_id){
        $data = Location::find($id);
        $locations =DB::table('sub_location')->where('id',$sub_id)->get()->toArray();
        return view('admin.edit_location',compact('data','locations'));
    }

    public function deny_access(Request $request){
        $count = AccessWebsite::where(['user_id'=>$request->user_id])->count();
        if($count>0){
            $data['company_id'] =$request->parent_location;
            $data['site_access'] =$request->site_access=='on' ?  1 : 0;
            $data['location_id'] =json_encode($request->location_id);
            $data['control_users'] =json_encode($request->users_id);
            $data['report_assign'] =$request->report_assign;
            $data['create_report'] =$request->create;
            $data['view_report'] =$request->view;
            $data['edit_report'] =$request->edit;
            $data['delete_report'] =$request->delete;
          $data['create_account'] =$request->create_account=='on' ?  1 : 0;
            $update = AccessWebsite::where('user_id', $request->user_id)->update($data);
            if($update){
                return redirect('manage_access')->with('message', 'Changes Successfully!');
            }
        }else{
            $data = new AccessWebsite;
            $data['company_id'] =$request->parent_location;
            $data['control_users'] =json_encode($request->users_id);
            $data['site_access'] = $request->site_access=='on' ?  1 : 0;
            $data['user_id'] = $request->user_id;
            $data['location_id'] =json_encode($request->location_id);
            $data['report_assign'] =$request->report_assign;
            $data['create_report'] =$request->create;
            $data['view_report'] =$request->view;
            $data['edit_report'] =$request->edit;
            $data['delete_report'] =$request->delete;
            $data['create_account'] = $request->create_account=='on' ?  1 : 0;
            if($data->save()){
                return redirect('manage_access')->with('message', 'Changes Successfully!');
            }
    }

}
    public function locations(){
        $locations = Location::select('locations.*','sub_location.sub_location','sub_location.id as sub_id')->leftjoin('sub_location','sub_location.parent_location_id','=','locations.id')->get()->toArray();
        return view('admin.locations',compact('locations'));
    }
    
    public function update_locations(Request $request){
     
        $data = Location::find($request->id);
        $sub_id = $request->sub_id;
        $data['parent_location'] = $request->parent_location;
        $data->address = $request->address;
        $data->description = $request->description;
        $data->save();
        DB::table('sub_location')->where('id',$sub_id)->update(array('sub_location'=>$request->sub_location));
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
        $data = User::find($request->id);
        $data->profile = '';
          if($request->hasfile('file')){
            $extension = $request->file->getClientOriginalName();
            $filename = time().'.'.$extension;
            $request->file->move(public_path('profile'), $filename);
            $data->profile = $filename;
         }
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->phone = $request->phone;
        $data->address = $request->address;
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
        $login = Session::get('data');
        $data = DB::table('custom_title')->select('id','title')->get();
        $permissions = AccessWebsite::where('user_id',$login['id'])->get();
        $sublocation='';
         $company='';
         if($login['type']=='admin'){
         $activitys = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location')
            ->leftjoin('locations', 'locations.id', '=', 'reports.main_location')
            ->leftjoin('custom_title', 'custom_title.id', '=', 'reports.report_title')
            ->leftjoin('sub_location', 'reports.sub_location', '=', 'sub_location.id')
            ->with('users')->get()->toArray();

        $locations = Location::all();
        $sublocation = DB::table('sub_location')->select('id','sub_location','parent_location_id')->get();        
        $company = CompanyDetails::all();
       
         }
         else{
            $company='';
             if($login['type']=='client'){
             $activitys = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location')
            ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
            ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
            ->join('locations', 'locations.id', '=', 'reports.main_location')
            ->with('users')->whereIn('main_location',json_decode($permissions[0]->location_id))
            ->where('company_id',$permissions[0]->company_id)
            ->get()->toArray();
              $company = CompanyDetails::where('id',$permissions[0]->company_id)->get();
              $locations = Location::whereIn('id',json_decode($permissions[0]->location_id))->get();
             }else{
                  $activitys = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location')
                ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
                ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
                ->join('locations', 'locations.id', '=', 'reports.main_location')
                ->with('users')->where('user_id',$login['id'])->get()->toArray();
              $company = CompanyDetails::all();    
              $locations = Location::whereIn('id',json_decode($permissions[0]->location_id))->get();
             }
           
          }
          
           return view('admin.admin_reports',compact('data','locations','activitys','login','company','permissions','sublocation'));
        
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
        $data = new Location;
        $data['parent_location'] = $request->parent_location;
        $data['address'] = $request->address;
        $data['parent_location'] = $request->parent_location;
        $data['description'] = $request->description;   
       
        if($data->save()){
        return redirect('locations')->with('message', 'Location created successfully !');
    }
    }

    public function delete_title(Request $request,$id){
        DB::table('custom_title')->where('id',$id)->delete();
        return redirect('report_title')->with('message', 'Deleted Title Successfully!');
    }

   public function insert_activity(Request $request){
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
     
        $data = Report::find($request->id);
        $data->report_title = $request->report_title;
        $data->user_id= $request->user_id;
        $data->address = $request->address;
        $data->level =   $request->level;
        $data->main_location = $request->main_location;
        $data->sub_location = $request->sub_location;
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
                return view('admin.report_view',compact('reports_view'));
                
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
            //    echo "<pre>";
            //    print_r($filter_data);die;
                $reports = Report::select('reports.*','custom_title.title','locations.parent_location','sub_location.sub_location')
                ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
                ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
                ->join('locations', 'locations.id', '=', 'reports.main_location')
                ->where(['main_location'=>$filter_data['main_location'],'company_id'=>$filter_data['company_id']])
                ->whereBetween('report_date', [$filter_data['start_date'], $filter_data['end_date']])->with('users')->get()->toArray();
               $data = Report_image::all();
               
                return view('admin.report_date',compact('reports','filter_data','data'));
               
            }            

            public function filter_data(Request $request){ 
                $filter['main_location'] = $request->main_location;
                 $filter['company_id'] = $request->company_id;
                $filter['start_date'] = $request->start_date;
                $filter['end_date'] = $request->end_date;
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
                $login = Session::get('data');
                $custom_loc = '';
                    if($request->custom_id){
                        $main_location= array(
                            'main_location'=>$request->custom_loc,
                            'parent_location_id'=>'',
                            'description'=>''
                        );  
                        
                    $custom_loc[]= DB::table('locations')->insertGetId($main_location);
            }



                $data = new CompanyDetails;
                $data['company_name'] = $request->company_name;
                $data['address'] = '';
                $data['main_location'] = $custom_loc ? json_encode($custom_loc) : json_encode($request->main_location);
                $data['sub_location'] = '';
                $data['type'] = $login['type'];
                $data['description'] = $request->description;                
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
    
    
        public function get_company(){
            $login = Session::get('data');
            $permissions = AccessWebsite::where('user_id',$login['id'])->get();
            if($login['type']=='admin'){
                $get_locations = Location::all();      
                $final_location = CompanyDetails::all();
            }
            else{
                $get_locations = Location::whereIn('id',json_decode($permissions[0]->location_id))->get();   
                $final_location = [];
            }
        
            //print_r($final_location);die;
            $locations=[];
            $final_data =[];
            foreach ($final_location as $location) {
                $final_array['id']= $location->id;
                $final_array['company_name']= $location->company_name;
                $final_array['description']= $location->description;               
                $details = json_decode($location->main_location);   
                
                // echo "<pre>";
                // print_r($details);die;

                $locations = Location::select("parent_location")
                    ->whereIn('id', $details)
                    ->get()->toArray();                
                $final_array['location'] = collect($locations)->pluck('parent_location')->implode(', ');
                array_push($final_data,$final_array);
                
            }    
          return view('admin.company_details',compact('locations','final_data','get_locations'));
              
        }
        
         function update_company(Request $request)
        {          
            $data = CompanyDetails::find($request->id);
            $data->company_name = $request->company_name;
            $data->address = '';
            $data->main_location = $request->main_location;
            $data->sub_location = '';
            $data->description = $request->description;
             if($data->save())
                     echo json_encode(['message'=>'Company Save  Successfully!']);
                else
                   echo json_encode(['message'=>'Some Error!']);
        }
        
        
        function sendEmailWithPdf(){
            $data["email"] = "ritesh@codenomad.net";
            $data["title"] = "This is a test email with pdf file";
            $data["body"] = "Test email";      
            $pdf = PDF::loadView('emails.myTestMail', $data);
      
            Mail::send('emails.myTestMail', $data, function($message)use($data, $pdf) {
                $message->to($data["email"])
                        ->subject($data["title"])
                        ->attachData($pdf->output(), "text.pdf");
            });      
            dd('Mail sent successfully');              
            }
            
        public function get_address($id){
            $locations = Location::select('locations.*','sub_location.id as sub_id','sub_location.sub_location','sub_location.parent_location_id')
            ->leftjoin('sub_location','sub_location.parent_location_id','=','locations.id')->where('locations.id',$id)
            ->get()->toArray();
    
        return response()->json([
            'locations' => $locations
        ]);

    }
    public function sub_location(Request $request){
        $sublocation = array(
            'sub_location'=>$request->custom_location ? $request->custom_location:$request->sub_location,
            'parent_location_id'=>$request->parent_location,
            'description'=>$request->description
        );

        $save = DB::table('sub_location')->insert($sublocation);
        if($save)
            echo json_encode(['message'=>'Sub Location Save  Successfully!']);
        else
            echo json_encode(['message'=>'Some Error!']);
    }

    public function get_report_images(){

        return view('admin.report_image');
 
}
public function update_report_images(Request $request){
    // echo "<pre>";
    // print_r($request->all());die;
    $data = Report_image::find($request->id);
    $data->file = '';
      if($request->hasfile('file')){
        $extension = $request->file->getClientOriginalName();
        $filename = time().'.'.$extension;
        $request->file->move(public_path('images'), $filename);
        $data->file = $filename;
        $data->save();
 
        return view('admin.report_image');
     }
        }
}





