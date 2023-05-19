<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;
use DB;
use App\Models\User;
use App\Models\Report;
class SendQueueEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $details;
    public $timeout = 7200; // 2 hours

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //
        $this->details = $details;
        // set_time_limit(300);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        set_time_limit(300);
        $data = User::select('users.*','access_websites.user_id','access_websites.location_id','access_websites.company_id','access_websites.sub_location')  
      ->join('access_websites','access_websites.user_id','users.id')
      ->where('users.type', '=', 'client')->get()->toArray();

        // print_r($data);die;
       $report_image  = DB::table('report_images')->get()->toArray();
    //   echo "<pre>";
    //   print_r($report_image);die;
    foreach ($data as $user) {
        $company_id =  $user['company_id'];
        $email =  $user['email'];
        $sub_location =  $user['sub_location'];
        $input = $this->details['subject'];
        $report = Report::select('reports.*', 'custom_title.title','locations.parent_location','sub_location.sub_location','sub_location.description as sub_des','sub_location.id as sub_id')
            ->join('custom_title', 'custom_title.id', '=', 'reports.report_title')
            ->join('sub_location', 'reports.sub_location', '=', 'sub_location.id')
            ->join('locations', 'locations.id', '=', 'reports.main_location')
            ->with('users')
            ->whereIn('reports.sub_location',json_decode($sub_location))
            ->whereIn('company_id',json_decode($company_id))->get()->toArray();
            $to_name = "Ritesh";
            $to_email = $email;
            // echo "<pre>";  
            // print_r($report);die;
            Mail::send("admin.email", ['report'=>$report ,'report_image' => $report_image], function($message) use ($to_name, $to_email,$input) {
                $message->to($to_email, $to_name)
                ->subject($input);
                $message->from('reports@quickreportingsystems.com','Reports');
                // $mail->to($to_email->email)->subject(' Confirm Website Email');
                });
    }
}
}
