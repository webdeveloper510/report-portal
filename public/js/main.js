(function($) {
	"use strict";
  
	 $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });

        $('#multiple-checkboxes1').multiselect({
          includeSelectAllOption: true,
        });
        $('#multiple_user-checkboxes').multiselect({
            includeSelectAllOption: true,
          });
    });
  })(jQuery);
/**------------------------------------------------------------Add Report ----------------------------------------------------*/


var delete_id=''  
var base_url =  window.location.origin+'/report-portal';
    $('#report').on('submit', function(event){
        console.log('yeee');
      event.preventDefault();
      var url = base_url+'/insert_activity'
      $.ajax({
          url: url,
          method: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,
          success:function(response)
          {
              $('#add').modal('hide');
              toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              toastr.success(response.message);
              setTimeout(function(){
                  location.reload();
              },3000)
          },
          error: function(response) {
              //$('.error').remove();
          }
      });
  });


    
  var inputEle = document.getElementById('timeInput');
            function onTimeChange() {
            var timeSplit = inputEle.value.split(':'),
                hours,
                minutes,
                meridian;
            hours = timeSplit[0];
            minutes = timeSplit[1];
            if (hours > 12) {
                meridian = 'PM';
                hours -= 12;
            } else if (hours < 12) {
                meridian = 'AM';
                if (hours == 0) {               
                hours = 12;
                }
            } else {
                meridian = 'PM';
            }
            $("#meridian").val(meridian);
            }
            
            function runMyFunction(data){
              console.log(data)
              let time = data.report_time.split(':');
              console.log(time)
              let str = time[1].replace("AM",'');
        
              $("#time").attr({'value': time[0] + ':' +str.trim() })
              $('#date').val(data.report_date)
              $('#report_type').val(data.report_type);
              $('#report_title').val(data.report_title);
              $('#parent_loc').val(data.main_location);
              $('#sub_loc').val(data.sub_location);
              $('#hidden').val(data.id);
              $('#user_id').val(data.user_id);  
          }

  // *---------------------------------------------------EDIT REPORT----------------------------------------------//

          $('#update_report').on('submit', function(event){
            event.preventDefault();
            var url = base_url+'/edit_reports'
            $.ajax({
                url: url,
                method: 'POST',
                data: new FormData(this),
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(response)
                {
                    $('#add').modal('hide');
                    toastr.options =  {
                        "closeButton" : true,
                        "progressBar" : true,
                    }
                    toastr.success(response.message);
                    setTimeout(function(){
                        location.reload();
                    },3000)
                },
                error: function(response) {
                    //$('.error').remove();
                }
            });
        });

    function deleteData(id){
          delete_id = id;
      }

        // *---------------------------------------------------DELETE REPORT----------------------------------------------//

      function DataDelete(table){
        $.ajax({
           url: base_url+"/delete_data/"+delete_id+'/'+table,
           type: 'GET',
           dataType: 'json', // added data type
           success: function(res) {                   
           toastr.options =  {
                       "closeButton" : true,
                       "progressBar" : true,
                   }
                   toastr.success(res.message);
                   setTimeout(function(){
                       location.reload();
                   },3000)
           }
       });
   }



   function delete_location(){
    $.ajax({
       url: base_url+"/delete_location/"+delete_id,
       type: 'GET',
       dataType: 'json', // added data type
       success: function(res) {                   
       toastr.options =  {
                   "closeButton" : true,
                   "progressBar" : true,
               }
               toastr.success(res.message);
               setTimeout(function(){
                   location.reload();
               },3000)
       }
   });
}
//-------------------------------------------------Report Title----------------------------------------//
$(document).ready(function(){
    $(".icon").click(function(){
        let id = $(this).attr('data-id');
        console.log(id)
        let text = $('.text_'+id).text()
        $('#show_data').val(text)
        $("#update_data").removeAttr('action')
        $("#Report_user").text('Edit Report');
        $("#hidden").val(id);
        $("#Report").modal('show');
    });


    $('.add_report').click(function(){
        $('#show_data').val('')
        $("#Report_user").text('Add Report');
        $("#Report").modal('show');
    })
});


$('#update_data').on('submit',function(e){
e.preventDefault();    
let title = $('#show_data').val();
let id = $('#hidden').val(); 
let url = ''
if(id){
     url = base_url+"/edit_title";
}   
else{
     url = base_url+"/insert_title";
} 
$.ajaxSetup({
    headers:
    {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$.ajax({
  url: url,
  type:"POST",
  data:{
    title:title,
    id:id,

  },
  success:function(response){
        let done = JSON.parse(response);
        toastr.options =  {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.success(done.message);
  },
   error: function(response) {
  
  },
  });
});
//----------------------------------------------------------Company Details-----------------------------------------------//
var base_url =  window.location.origin+'/report-portal';
    $('#company').on('submit', function(event){
     
      event.preventDefault();
      var url = base_url+'/company_details'
      $.ajax({
          url: url,
          method: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,
          success:function(response)
          {
              $('#add').modal('hide');
              toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              toastr.success(response.message);
              setTimeout(function(){
                  location.reload();
              },3000)
          },
          error: function(response) {
              //$('.error').remove();
          }
      });
  });
    $('#editData').on('submit', function(event){
      event.preventDefault();
      var url = base_url+'/edit_company'
      $.ajax({
          url: url,
          method: 'POST',
          data: new FormData(this),
          dataType: 'JSON',
          contentType: false,
          cache: false,
          processData: false,
          success:function(response)
          {
              console.log(response)
            toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              toastr.success(response.message);
              setTimeout(function(){
                  location.reload();
              },3000)
          },
          error: function(response) {
              //$('.error').remove();
          }
      });
  });
function showCompany(data){
    console.log(data)
    //let obj = JSON.parse(data);
    //console.log(obj)
    $('.company_name').val(data.company_name)
    $('.description').val(data.description)
    $('.hidden').val(data.id)
}