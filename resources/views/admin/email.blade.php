<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Candor in Action</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style type="text/css">
    @import url('http://fonts.cdnfonts.com/css/pf-din-text-cond-pro-medium');
    @import url('http://fonts.cdnfonts.com/css/pf-din-text-comp-pro-light');
    @import url('http://db.onlinewebfonts.com/c/2090551770be22b09600a40b0b4673b7?family=Avenir+Medium');


 .level2 {
background: orange !important;
}
.level1 {
    background: green !important;
}
.level3 {
    background: red !important;
}
  </style>

</head>

<body style="margin: 0; padding: 0; ">

                
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
    <tr>
      <td>
      <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="max-width:600px;border-collapse: collapse; ">
         <tr>
              
          <td>
               @if(count($report_image)>0)
                       <img src="<?php echo URL::to('/'); ?>/public/images/{{$report_image ? $report_image[0]->file : ''}}" height="150px" width="600px" style="object-fit:fill;" />
                  
                @endif
                
                <h3 style="text-align:center;">Daily Activity Report </h3>
          </td>
          
          </tr>
          
          <tr >
          <td>
        @foreach($report as $report)
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="max-width:600px; border-collapse: collapse;">  
          <!-- space -->
     
          <tr>
            <td  style="font-family: 'Avenir Medium', sans-serif; font-size: 14px; color: black; padding-right: 12px; padding-left: 25px; padding-top: 15px; justify-content: space-between;display: flex;">
                   <p class="mb-0"><b>Date: </b>{{$report['report_date']}}</p> 
                             <p style="margin-left: auto;"><b>Time: </b>{{$report['report_time']}}</p>   
            </td>
          </tr>
          <!-- colored bars -->
       
          <!-- space -->
          <tr>
            <td bgcolor="#44a5dc"
              style="color: white; font-size: 23px; padding-left:25px !important; text-align: center; padding: 10px;font-family: 'Avenir Medium', sans-serif;">
              {{$report['report_type']}}
            </td>
          </tr>
          <tr>
            <td
              style="font-family: 'Avenir Medium', sans-serif; font-size: 14px; color: black; padding-right: 12px; padding-left: 25px; padding-top: 15px;">
              <table style="width:100%">
                <tr>
                  <td style="width:50%">
                    <p>
                      {{$report['sub_des']}} <br/>
                      <b> Address: </b> {{$report['address']}}<br />
                      <b> Location: </b> {{$report['parent_location']}}<br />
                      <b> Sub Loaction: </b>  {{$report['sub_location']}}<br />
                      {{$report['users']['name']}}

                    </p>
                    <?php
                   if($report['level']=='Normal'){
                       $level = 'Normal';
                       $class = 'level1';
                   }
    
                if($report['level']=='Attention Needed'){
                         $level = 'Attention Needed';
                          $class = 'level2';
                }
    
                    if($report['level']=='Urgent'){
                           $level = 'Urgent';
                            $class = 'level3';
                       }
                    ?>
                    <div class="{{$class}} me-3">
                        <p class="text-white  mx-2" style="text-transform: capitalize;">{{$level}}</p>  
                     </div>
                  </td>
                  <td style="width: 50%; display: contents;">
                    <p><b>Description : </b></p>
                    <p>
                    {{$report['description']}}
                    </p>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            
            <td style="margin-top: 20px;display:flex; flex-wrap:wrap; padding-right: 12px; padding-left: 25px; flex-wrap;wrap;">
            
                  @foreach (json_decode($report['report_photo']) as $member)
                
              <img src="{{ URL::to('/') }}/public/images/{{ $member }}" width="200px" class="four_images" />   
              
            @endforeach
            </td>
          </tr>
        </table>
        @endforeach
      </td>
    </tr>
       </table>
       </td>
       </tr>
       </table>
</body>
</html>