<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Mail;
class SendMail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:sendmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Mail to this command';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $usersMail = User::select('email')->get();
        $emails = [];
         foreach($usersMail as $mail){
             $emails[] = $mail['email'];
         }
        
         Mail::send('admin.email',[], function($message) use ($emails){
             $message->to($emails)->subject('this is the test mail for multiple users');
         });
    }
}
