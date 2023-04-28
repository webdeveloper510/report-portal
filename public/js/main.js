(function($) {
	"use strict";
  
	 $(document).ready(function() {
        $('#multiple-checkboxes').multiselect({
          includeSelectAllOption: true,
        });
        

        $('#multiple-checkboxes4').multiselect({
          includeSelectAllOption: true,
        });
          $('#multiple-checkboxes1').multiselect({
          includeSelectAllOption: true,
        });
           $('#multiple-checkboxes2').multiselect({
          includeSelectAllOption: true,
        });
        
        $('#multiple-checkboxes3').multiselect({
          includeSelectAllOption: true,
        });
        $('#multiple_user-checkboxes').multiselect({
            includeSelectAllOption: true,
          });
        $('#parent_loc').multiselect({
            includeSelectAllOption: true,
        
        });
        $('.edit').multiselect({
            includeSelectAllOption: true,
        });
    });
  })(jQuery);
/**------------------------------------------------------------Add Report ----------------------------------------------------*/


var delete_id=''  
var base_url =  window.location.origin+'/report-portal';
    $('#report').on('submit', function(event){
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
               console.log(response);
              if($.isEmptyObject(response.error)){
             $('#add').modal('hide');
              toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              toastr.success(response.message);
              setTimeout(function(){
                  location.reload();
              },3000)
            }else{
                printErrorMsg(response.error);
              }

          },
          error: function(response) {
              //$('.error').remove();
          }
      });
  });

  var base_url =  window.location.origin+'/report-portal';
    $('#sub_location').on('submit', function(event){
      event.preventDefault();
      
      var url = base_url+'/sub_location';     
      $.ajaxSetup({
        headers:
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
          url: url,
          method: 'POST',
          data:$(this).serialize(),
          cache : false,
          processData: false,
          success:function(response)
          {
              console.log(response)
           if($.isEmptyObject(response.error)){
             $('#address').modal('hide');
              toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              let data = JSON.parse(response);
              toastr.success(data.message);
              setTimeout(function(){
                  location.reload();
              },3000)
            }else{
                printErrorMsg(response.error);
              }

          },   
          error: function(response) {
              //$('.error').remove();
          }
      });
  });


$('#edit_sub').on('submit', function(event){
      event.preventDefault();
      
      var url = base_url+'/edit_sublocation';     
      $.ajaxSetup({
        headers:
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
          url: url,
          method: 'POST',
          data:$(this).serialize(),
          cache : false,
          processData: false,
          success:function(response)
          {
           if($.isEmptyObject(response.error)){
             $('#edit').modal('hide');
              toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              let data = JSON.parse(response);
              toastr.success(data.message);
              setTimeout(function(){
                  location.reload();
              },3000)
            }else{
                printErrorMsg(response.error);
              }

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
              console.log(data);
              let time = data.report_time.split(':');
              let str = time[1].replace("AM",'');
            console.log(data.company_id);
              $("#time").attr({'value': time[0] + ':' +str.trim() })
              $('#date').val(data.report_date)
              $('#report_type').val(data.report_type);
              $('#report_title').val(data.report_title);
              $('#days').val(data.days);
              $('#start_shift').val(data.start_shift);
              $('#end_shift').val(data.end_shift);
              $('#company_id').val(data.company_id);
              $('#update_report #main_location').val(data.main_location);
              $('.sub_location').val(data.sub_location);
              $('#hidden').val(data.id);
              
              $('.level').val(data.level);
              $('#desc').html(data.description);
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
                if($.isEmptyObject(response.error)){
                  console.log(response);
                            $('#add').modal('hide');
                            toastr.options =  {
                                "closeButton" : true,
                                "progressBar" : true,
                            }
                            toastr.success(response.message);
                            setTimeout(function(){
                                location.reload();
                            },3000)
                    }
            else{
                printErrorMsg(response.error);
              }
                   
                },
                error: function(response) {
                    //$('.error').remove();
                }
            });
        });

    function deleteData(id){
          delete_id = id;
      }
      /*-------------------------------------------------------Show Access Data--------------------------------------------------------*/
      
      function show_access_info(a){
          let user_id = $(a).val();
        $.ajax({
           url: base_url+"/show_info/"+user_id,
           type: 'GET',
           success: function(res) { 
              // console.log(res)
            // $('.company_id').val(res.permision[0].company_id)
             $('.create_report').prop('checked', res.permision[0].create_report==1 ? true : false);
             $('.edit_report').prop('checked', res.permision[0].edit_report==1 ? true : false);
             $('.delete_report').prop('checked', res.permision[0].delete_report==1 ? true : false);
             $('.view_report').prop('checked', res.permision[0].view_report==1 ? true : false);
             $('.report_assign').val(res.permision[0].report_assign)
             $('.site_access').prop('checked', res.permision[0].view_report==1 ? true : false);
             $('.create_account').prop('checked', res.permision[0].view_report==1 ? true : false);
          
           }
       });
      }

        // *-----------------------------------------------------------DELETE REPORT----------------------------------------------//

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
      var url = base_url+'/company_post_details'
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
              //console.log(response);return false;
            if($.isEmptyObject(response.error)){
             $('#add').modal('hide');
              toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              toastr.success(response.message);
              setTimeout(function(){
                  location.reload();
              },3000)
            }else{
                printErrorMsg(response.error);
              }

          },
          error: function(response) {
              //$('.error').remove();
          }
      });
  });
  /*----------------------------------------------------------Show Error messages--------------------------------------*/
  function printErrorMsg (msg) {
          $.each( msg, function( key, value ) {
            console.log(value);
              $('.'+key+'_err').text(value);
            });
    }
    
    
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
               if($.isEmptyObject(response.error)){
               toastr.options =  {
                  "closeButton" : true,
                  "progressBar" : true,
              }
              toastr.success(response.message);
              setTimeout(function(){
                  location.reload();
              },3000)
            }else{
                printErrorMsg(response.error);
              }
              console.log(response)
          
          },
          error: function(response) {
              //$('.error').remove();
          }
      });
  });
  
  
  
//-------------------------Assign to Client----------------------------------------//  
    $('.assign_client').on('change', function() {
   
     var value = $(this).val();
     var data_id = $(this).attr("data-id");
     var url = base_url+'/assign-client';
     $.ajaxSetup({
    headers:
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
      $.ajax({
          
          url: url, 
          method: 'POST',
          data: {value:value, id:data_id},
          success:function(response)
          {
            //   console.log(response);return false;
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

    function input_shows(a){
        console.log('trrrrrrr');
     let id = $(a).val()
     if($(a).val()=='other'){
          $(a).parent().parent().find("#other").show()
      }
      else{
         $(a).parent().parent().find("#other").hide()
         var url = base_url+'/get_sub_address/'+id;
             $.ajaxSetup({
                headers:
                {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({ 
              url: url,
              type:"GET",
        
              success:function(response){
                  console.log(response) 
                $('textarea#add').val(response.locations[0].address);
                $('textarea#text_address').val(response.locations[0].address);
              },
               error: function(response) {
              
              },
              });

          }
      }
     


      function input(a){
        if($(a).is(':checked')){
          $('#other').show()
        }else{
          $('#other').hide()
        }
    }
  

      function inputs(a){
        if($(a).is(':checked')){
          $('#others').show()
        }else{
          $('#others').hide()
        }
    }
    
    function showCustomInput(a,flag){
        if(flag=='location'){
             if($(a).is(':checked'))
                $('#editmain').show()
                
             else
                $('#editmain').hide()
        }
        else{
              if($(a).is(':checked'))
                $('#editsub').show()
                
             else
                $('#editsub').hide()
        }
    }

function showCompany(data){
    console.log(data)
    //let obj = JSON.parse(data);
    //console.log(obj)
    $('.company_name').val(data.company_name);
    $('.description').val(data.description);
    $('#address').text(data.address);
    $('.hidden').val(data.id);
}

function showSublocation(data){
    console.log(data);
    $('#sub_id').val(data.sub_id);
    $('.main_location').val(data.id);
    $('.address').val(data.sub_address);
    $('.sub_location').val(data.sub_location);
}


//-----------------------------------------Show Location Company----------------------

function showCompanyLocation(a){
    var id = $(a).val();
    console.log(id);
    var text =$(a).find("option:selected").text()
    var url = base_url+'/get_location/'+id;
    $.ajax({
      url: url,
      type:"GET",

      success:function(response){ 
         $(a).closest("form").find('#main_location').empty();
         $(a).closest("form").find('#main_location').append("<option value=''>Choose Main Location</option>");
          $(a).closest("form").find('.location_id').empty();
         $(a).closest("form").find('.location_id').append("<option value=''>Choose Main Location</option>");
        
        $(a).closest("form").find('.company_sublocation').empty();
         $(a).closest("form").find('.company_sublocation').append("<option value=''>Choose Sub Location</option>");
         
              $(a).closest("form").find('.company_sublocations').empty();
         $(a).closest("form").find('.company_sublocations').append("<option value=''>Choose Sub Location</option>");
         for(let i=0; i<response.location.length;i++){
        $(a).closest("form").find('#main_location')
         .append($("<option></option>")
                    .attr("value", response.location[i][0].id)
                    .text(response.location[i][0].parent_location)); 
           $(a).closest("form").find('.location_id')
           .append($("<option></option>")
                .attr("value", response.location[i][0].id)
                .text(response.location[i][0].parent_location+'('+response['company'][i]+')'));     
         }
         
        for(let i=0;i<response.sub_location.length;i++){
         
            for(let j=0; j<response.sub_location[i].length; j++){
              
           $(a).closest("form").find('.company_sublocation')
               .append($("<option></option>")
                    .attr("value", response.sub_location[i][j].id)
                    .text(response.sub_location[i][j].sub_location)); 
            }       
        }
          for(let i=0; i<response.sub_location.length;i++){
              for(let j=0; j<response.sub_location[i].length;j++){
        $(a).closest("form").find('.company_sublocations')
         .append($("<option></option>")
                    .attr("value", response.sub_location[i][j].id)
                    .text(response.sub_location[i][j].sub_location+'('+response['company'][i]+','+response.sub_location[i][j].address+')')); 
                    
              }
           
         }
         
         $(a).closest("form").find('.location_id').multiselect('rebuild');
          $(a).closest("form").find('.company_sublocation').multiselect('rebuild');
             $(a).closest("form").find('.company_sublocations').multiselect('rebuild');
      },
       error: function(response) {
      
      },
      });

    
}

//----------------------------------------------reports----------------------------------------//
function get_address(a){
    var id = $(a).val();
    console.log(id);
    var url = base_url+'/get_address/'+id;
    
     $.ajaxSetup({
        headers:
        {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
      url: url,
      type:"GET",

      success:function(response){
         //console.log(response);
         if(response.locations.length > 0){
         $(a).closest("form").find('.sub_location').html('');
         $(a).closest("form").find('.sub_location').append(`<option value="">Choose Sub Location</option>`)
        var add = response.locations[0].address;
          for(let i=0;i<response.locations.length;i++){
              $(a).closest("form").find('.sub_location').append(`<option value="${response.locations[i].sub_id}">
                ${response.locations[i].sub_location}
                </option>`);
            }
         $(a).closest("form").find('.sub_location').append(`<option value="other">Other</option>`)
         $("#remove_option option[value='other']").remove();
          $("#multiple-checkboxes1 option[value='other']").remove();
      
         }
         
         else
           $(a).closest("form").find('.sub_location option').remove();
           
         $(a).closest("form").find('.sub_location').multiselect('rebuild');

      
      },
       error: function(response) {
      
      },
      });

    }
    
    
//     function get_report_address(a){
//     var id = $(a).val();
//     var url = base_url+'/get_sub_address/'+id;
    
//      $.ajaxSetup({
//         headers:
//         {
//           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//       url: url,
//       type:"GET",

//       success:function(response){
//         $('textarea#add').val(response.locations[0].address);
//         $('textarea#text_address').val(response.locations[0].address);
//       },
//       error: function(response) {
      
//       },
//       });

    
// }