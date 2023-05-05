<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessWebsite extends Model
{
    use HasFactory;
    protected $table = "access_websites";
    
        protected $casts = [
             'location_id' => 'array',
             'control_users' => 'array',
             'company_id'=>'array',
             'sub_location'=>'array',
        ];
  
}
