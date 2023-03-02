(function($) {
	"use strict";
  
	 $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });

        $('#multiple-checkboxes1').multiselect({
          includeSelectAllOption: true,
        });
    });
  })(jQuery);
/**------------------------------------------------------------Add Report ----------------------------------------------------*/
var delete_id=''  
    $('#report').on('submit', function(event){
      event.preventDefault();
      var url = 'http://localhost/report-portal/insert_activity'
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
            var url = 'http://localhost/report-portal/edit_reports'
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

    function deleteReport(id){
          delete_id = id;
      }

        // *---------------------------------------------------DELETE REPORT----------------------------------------------//

      function ReportDelete(){
        $.ajax({
           url: "http://localhost/report-portal/delete_report/"+delete_id,
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
	 

