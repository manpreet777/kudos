<?php/*
  include("applicationtop.php");
  $page='admin_calendar';	
  include("header.php");
*/?>
<style type="text/css">
  #event-colorpalette>div>button{
    padding: 10px;
  }
  .custom-select-container>label{
    display: block !important;
  }
  .custom-select-container>label>.select2-container,
  .custom-select-container>label>.select2-container>span.selection,
  .custom-select-container>label>.select2-container>span.selection li.select2-search,
  .custom-select-container>label>.select2-container>span.selection li.select2-search>input{
    min-width: 100%;
  }
</style>

<!-- Datepair.js for the datepicker ad time picker  -->
<link rel="stylesheet" type="text/css" href="../css/jquery-timepicker.css" />
<link rel="stylesheet" type="text/css" href="../css/bootstrap-datepicker.css" />
<!-- //datepicker and ime picker dependencies ends here -->

<link rel="stylesheet" href="js/plugins/fullcalendar/fullcalendar.min.css">
<div class="main as-table">        

    <div class="col-md-8 tile nopadding">

        <div id='calendar'></div>
        

    </div><!-- //tile -->
  
</div><!-- //as-table --> 
<!---  modal to edit event clicked --->
  
  <!-- modal --> 
    <div class="modal fade" id="cal-new-event" tabindex="-1" role="dialog" aria-labelledby="new-event" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title thin" id="new-event">Add New Event</h3>
          </div>
          <form role="form" id="add-event" enctype="multipart/form-data" >
            <div class="modal-body">
                
                <div class="form-group">
                  <label class="control-label">Event title *</label>
                  <input type="text" maxlength="100" class="form-control" id="event-title" name="event_title" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                </div><!-- //form-group -->
                <div id="date_time_picker">
                  
                  <div class="form-group col-xs-6">
                      <label for="dateStartInput" class="control-label">Start Date</label>
                      <input type="text" class="date start form-control" id="event-start-date" name="event_start_date" />
                  </div>
                  <div class="form-group col-xs-6">
                      <label for="timeStartInput" class="control-label">Start Time</label>
                      <input type="text" class="time start form-control" id="event-start-time" name="event_start_time" />
                  </div><!-- ///col-xs-6 -->
                  <div class="form-group col-xs-6">
                      <label for="timeEndInput" class="control-label">End Time</label>
                      <input type="text" class="time end form-control" id="event-end-time" name="event_end_time" />
                  </div><!-- ///col-xs-6 -->
                  <div class="form-group col-xs-6">
                      <label for="dateEndInput" class="control-label">End Date</label>
                      <input type="text" class="date end form-control" id="event-end-date" name="event_end_date" />
                  </div><!-- ///col-xs-6 -->
                
                </div><!-- ///form-group -->
                <!--<div class="form-group">
                  <label class="control-label">Start Date *</label>
                  <input type="text" maxlength="50" class="form-control" id="event-start-date" name="event_start_date" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                </div><!-- //form-group -->

                <!--<div class="form-group">
                  <label class="control-label">End Date *</label>
                  <input type="text" maxlength="50" class="form-control" id="event-end-date" name="event_end_date" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                </div><!-- //form-group -->

                <!--<div class="form-group">
                  <label class="control-label">Start Time *</label>
                  <input type="time" maxlength="50" class="form-control" id="event-start-time" name="event_start_time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                </div><!-- //form-group -->

                <!--<div class="form-group">
                  <label class="control-label">End Time *</label>
                  <input type="time" maxlength="50" class="form-control" id="event-end-time" name="event_end_time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                </div><!-- //form-group -->

                <div class="form-group col-xs-12 custom-select-container">
                  <label for="id_label_multiple_hosts" class= "form-label">
                    Enter Host Names
                    <select name="hosts_arr[]" class="multiple-hosts form-control multiple-hosts-select2" id="id_label_multiple" multiple="multiple">
                    </select>
                    </label>

                    <label for="id_label_multiple_staff" class= "form-label">
                    Enter Staff Names
                    <select name="staff_arr[]" class="multiple-staff form-control multiple-staff-select2" id="id_label_multiple" multiple="multiple">
                    </select>
                    </label>

                    <label for="id_label_multiple_guest" class= "form-label">
                    Enter Guest Names
                    <select name="guest_arr[]" class="multiple-guest form-control multiple-guest-select2" id="id_label_multiple" multiple="multiple">
                    </select>
                    </label>
                </div><!-- //form-group -->

                <div class="staff-duties-wrap">
                    
                </div>
                <!--<div class="form-group">
                  <label class="control-label">Event Host</label>
                  <input type="text" maxlength="50" class="form-control" id="event-host" name="event_host" parsley-trigger="change" parsley-minlength="2" parsley-validation-minlength="1">
                </div><!-- //form-group -->

                <!--<div class="form-group">
                  <label class="control-label">Event Guest</label>
                  <input type="text" maxlength="50" class="form-control" id="event-guest" name="event_guest" parsley-trigger="change" parsley-minlength="2" parsley-validation-minlength="1">
                </div><!-- //form-group -->

                <div class="form-group">
                  <label class="control-label">Event Description</label>
                  <textarea class="form-control" id="event-desc" name="event_desc"></textarea>
                </div><!-- //form-group -->

                <div class="form-group">
                  <label class="control-label">Featured Image</label>
                  <input type="file" id="event-image" name="event_image" >
                  <img src="" class="img img-responsive event-image-preview" />
                </div><!-- //form-group -->

                <div class="form-group">
                  <label class="control-label">Featured Video</label>
                  <input class="form-control" type="text" id="event-video" name="event_video" placeholder="eg: https://youtu.be/87KtF3nC12e" >
                </div><!-- //form-group -->

                <div class="form-group">
                  <label class="control-label">Event status</label>
                  <select name="event_status" id="event-status">
                    <option value="0">Hidden</option>
                    <option value="1">Visible</option>
                  </select>
                </div><!-- //form-group -->
              
              

              <div class="form-group">
                <label class="control-label">Color</label>
                <div class="input-group event-color">
                  <input type="text" maxlength="7" class="form-control" id="event-color" name="event_color" readonly="">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-greensea dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tint"></i></button>
                    <ul class="form-label dropdown-menu pull-right">
                      <li>
                        <div id="event-colorpalette" data-return-color="#event-color"></div>
                      </li>
                    </ul>
                  </div><!-- /btn-group -->
                </div><!-- /input-group -->
              </div>

            </div>

            <div class="modal-footer">
              <button class="btn btn-danger removeEventBtn" class="hidden">Remove</button>
              <button class="btn btn-red" data-dismiss="modal" aria-hidden="true">Cancel</button>
              <input type="hidden" class="event_old_image" name="event_old_image" value="">
              <input type="hidden" name="rqst" value="">
              <input type="hidden" name="event_id" value="">
              <button type="submit" class="btn btn-green ladda-button ladda-submit" data-placement="auto" data-size="s"  data-style="expand-right" ><span class="ladda-label">Submit</span></button>
            </div>
          
          
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal fade-->

<!-- ////modal to edit event clickd ends -->
</div><!-- Page content end -->
</div><!-- /row -->
</div><!-- /wrap -->

<script type="text/javascript" src="js/plugins/fullcalendar/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/fullcalendar/moment.min.js"></script>
<script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/colorpalette/bootstrap-colorpalette.js"></script>
<script type="text/javascript" src="js/plugins/parsley/parsley.min.js"></script>

<script type="text/javascript">
                      

  //initializing the color pallette
    // Initialize colorpalette
  $('#event-colorpalette').colorPalette({ 
    colors:[['#428bca', '#5cb85c', '#5bc0de', '#f0ad4e' ,'#d9534f', '#ff4a43', '#22beef', '#a2d200', '#ffc100', '#cd97eb', '#16a085', '#FF0066', '#A40778', '#1693A5']] 
  }).on('selectColor', function(e) {
    var data = $(this).data();

    $(data.returnColor).val(e.color);
    $(this).parents(".input-group").css("background-color", e.color );
  });

  ///initializing the full calendar 
  $(document).ready(function(){

      $('#calendar').fullCalendar({
          
          height: 570,
          displayEventTime: false,
          customButtons: {
              addEvent: {
                  text: 'Add Event',
                  click: function() {

                      ///hide the remove event button if it appears
                      $('#cal-new-event .removeEventBtn').addClass('hidden');
                      
                      ///reset event image preview
                      $('#cal-new-event .event-image-preview').attr('src','');
                      $('#cal-new-event .event_old_image').val('');

                      //reset staff duty div
                      $('.staff-duties-wrap').html('');
                      //reset event video
                      $('#cal-new-event #event-video').val('');

                      //reset the values fromthe custom select boxes for event hosts/guest and staffs
                      //adding values to custom select boxes
                      $(".multiple-hosts").select2().val();
                      $(".multiple-guest").select2().val();
                      $(".multiple-staff").select2().val();
                      
                      //change modal data to initialize it for adding a new event
                      $('.modal-header h3').html("Add new event.");
                      $('#cal-new-event form')[0].reset();
                      
                      //adding event if=d and request type to the form before submit
                      $('#cal-new-event .modal-footer .rqst').val('add_event');
                      
                      //removing the image preview for from the form , that is generated when a post is to be updated
                      $('#cal-new-event .event-image-preview').hide();
                      //removing event id generated if update event clicked previously
                      $('#cal-new-event .modal-footer input[name="event_id"]').val('');
                      //adding submit  button to the form
                      $('#cal-new-event .modal-footer input[type="submit"]').val('Add event');
                      $('#cal-new-event .modal-footer input[name="rqst"]').val('add_event');


                      $('#cal-new-event').modal('show');
                       
                      
                      //when new event request is submitted
                     
                      

                  }
              }
          },
          header: {
           left: 'prev,next today, addEvent',
           center: 'title',
           right: 'month,agendaWeek,agendaDay'
          },
          editable: true,
          droppable: false,
          eventStartEditable: false,
          //allDay: true,
          events: {
                url: '../handlers/admin_calendar_handler.php?rqst=get_events',
                error: function(error)
                {
                  console.log(error);
                  console.log("Error in adding events to the calendar");
                }, 
                success: function(data)
                {
                  console.log(data);
                  console.log("Successfuly loaded events to the calendar");
                }
          },
          eventClick: function(event, jsEvent, view) {
              ///reset event image preview
             
              $('#cal-new-event .event-image-preview').attr('src','');

             var title = event.title;
             var desc = event.event_desc;
             var start_date = moment(event.start).format('DD/MM/YYYY');
             var end_date = moment(event.end).format('DD/MM/YYYY');
             var start_time = event.start_time;
             var end_time = event.end_time;

             //populate the modal with data from the clicked event before oepning it up
             $('.modal-header h3').html("Edit event details");

             $('#cal-new-event #event-title').val(title);
             $("#cal-new-event #event-start-date").val(start_date);
             $("#cal-new-event #event-end-date").val(end_date);
             $("#cal-new-event #event-start-time").val(start_time);
             $("#cal-new-event #event-end-time").val(end_time);
             //$("#cal-new-event #event-host").val(event.event_host);
             //$("#cal-new-event #event-guest").val(event.event_guest);
             if(event.event_video != '')
                $("#cal-new-event #event-video").val('https://youtu.be/'+event.event_video);
             $("#cal-new-event #event-desc").val(desc);
             $(".event-color #event-color").val(event.color);
             $("#event-status option[value="+event.status+"]").prop("selected", true);
             
             $.each( event.staff_duty, function(key, value){
                console.log("Key=>"+ key + " value => "+ value);
             });

             ///hide the remove event button if it appears
            $('#cal-new-event .removeEventBtn').removeClass('hidden');

             //adding existing event image to the form for preview
             if(event.event_image == '' || event.event_image == null)
                $('#cal-new-event .event-image-preview').attr('caption','No image').show();
             else
                $('#cal-new-event .event-image-preview').attr('src','images/events/'+event.event_image+'').show(); 
             
              if(event.event_old_image == '' || event.event_old_image == null )
                $('#cal-new-event .event_old_image').val('');
              else
                $('#cal-new-event .event_old_image').val(event.event_old_image);
             //add submit button before showing the modal
             //adding submit  button to the form
             $('#cal-new-event .modal-footer input[type="submit"]').val('Update Event');
              
              //update hidden input field to set it for updating the event
              $('#cal-new-event .modal-footer input[name="rqst"]').val('update_event');
              $('#cal-new-event .modal-footer input[name="event_id"]').val(event.id);

              //adding values to custom select boxes
              $(".multiple-hosts").select2().val( (event.event_host).split(',') ).trigger("change");
              $(".multiple-guest").select2().val( (event.event_guest).split(',') ).trigger("change");
              $(".multiple-staff").select2().val( (event.event_staff).split(',') ).trigger("change");

              if( event.staff_duty != false  )
              {
                  $.each( event.staff_duty, function(key, value){
                        var htmlToAdd = '<div class="form-group custom-select-container"><label for="id_label_multiple_staff_selected" class= "form-label">Duty for '+ value +'<select name="staff_duty['+ key +'][]" class="multiple-staff-duty-selected form-control multiple-staff-duty-selected-select2" id="id_label_multiple_staff_duty_selected" multiple="multiple"><option>Photography</option><option>Doctor</option></select></label></div>';  
                        $('.staff-duties-wrap').append( htmlToAdd );
                  });
              }
              //var htmlToAdd = '<div class="form-group custom-select-container"><label for="id_label_multiple_staff_selected" class= "form-label">Duty for '+ selectedOptions[i] +'<select name="staff_duty['+ selectedIds[i] +'][]" class="multiple-staff-duty-selected form-control multiple-staff-duty-selected-select2" id="id_label_multiple_staff_duty_selected" multiple="multiple"><option>Photography</option><option>Doctor</option></select></label></div>';    
                //$('.staff-duties-wrap').append(htmlToAdd);
              
              //open modal and edit the cllicked event
             $('#cal-new-event').modal('show');
            
            // calling remve function to remove an event with ajax call
             
             //if( $('#cal-new-event .modal-footer input[name="rqst"]').val() == 'update_event' )
             //ajax call for updating an event
             //{
                
              //}
          
          }/*,

          eventDrop: function(event, delta, revertFunc) {
             var title = event.title;
             var start = event.start.format();
             var end = (event.end == null) ? start : event.end.format();
          }*/

      });


  });
  //initialize datepicker
  //show date picker
  //$('#event-start-date, #event-end-date').datepicker({
    //dateFormat: 'dd/mm/yy'
  //});
  $('.removeEventBtn').on('click', function(e){
      e.preventDefault();
      
      if( confirm("Remove selected event?") == 1 )
      {
        //fetching the hidden event id to be deleted
        var eventID = $('#cal-new-event .modal-footer input[name="event_id"]').val();
        $(this).attr('disabed');
        $.ajax({
          url: '../handlers/admin_calendar_handler.php',
          method: "POST",
          data: {
            rqst: 'remove_event',
            event_id: eventID 
          },
          success: function(response){
            //refreshing the calendar by fetching the records again
            $('#calendar').fullCalendar('refetchEvents');
            //clear the form conetnts after adding the form
            $('#cal-new-event form')[0].reset();
            $('#cal-new-event').modal('hide');    
          },
          error: function(error){
            console.log("Error in getting val "+ error);
          }
        
        });
        //remove handler after modal closes
        //$this1.off("click");  
        
      }
      //remove handler after modal closes
      //$('.removeEventBtn').off("click");
      //$this1.off("click", ".removeEventBtn");

   });

  //for adding a new event or updating an existing one
  $('#cal-new-event form').on('submit', function(e){
        e.preventDefault();
        
        //checking if the request is to update an event
        
        //calling function to update the clicked event
        
        var $this1 = $('#cal-new-event form');

        //initialize ladda button for loader effect on button
        var laddaBtn = Ladda.create( $('#cal-new-event .ladda-submit')[0] );
        //console.log(laddaBtn[0]);
        //disable the submit button on click
        $('.ladda-submit').attr('disabled', true);
        laddaBtn.start();

          //update existing event
          $.ajax({
              url: '../handlers/admin_calendar_handler.php',
              method: "POST",
              contentType: false,
              processData: false,
              data: new FormData(this),
              cache: false,
              success: function(response){
                
                if(response == 1 || response == true)
                {
                  //delay effect to stop the button animation effect
                  setTimeout(function(){
                    laddaBtn.stop();
                    //refreshing the calendar by fetching the records again
                    $('#calendar').fullCalendar('refetchEvents');
                    //clear the form conetnts after adding the form
                    $('#cal-new-event form')[0].reset();
                    $('#cal-new-event').modal('hide');
                    //$this1.off('submit');
                    
                  }, 1200);

                }
                else{
                    console.log("We got something weird"+ response);
                  }
              },
              error: function(error){
                console.log("Error in getting val "+ error);
              }
          });
        
          
          //removing handler after click
          //$('#cal-new-event form').off("submit");

        
        //removing handler after click
        //$('#cal-new-event form').off("submit");
    });

</script>
<!-- ///date time picker dependencies -->
<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="../js/jquery-timepicker-v1.11.1.js"></script>
<!-- ///date time dependencies ends -->

<script type="text/javascript" src="../js/datepair-v0.4.14.js"></script>
<script>
    ////date time picker

    // initialize input widgets first
    $('#date_time_picker .time').timepicker({
        'showDuration': false,
        'timeFormat': 'h:i a',
        'defaultTimeDelta': '3600000'
    });

    $('#date_time_picker .date').datepicker({
        'format': 'dd/mm/yyyy',
        'autoclose': true,
        'defaultDateDelta': null
    });

    //fetching all the site users for the event hosts and guests select options
    $.ajax({
          url: '../handlers/common_db_handler.php',
          method: "POST",
          dataType: "JSON",
          data: {
            fetch_rqst: 'fetch_site_users'
          },
          success: function(response){

              //populating the custom select box wid the fields for hosts and guests
              $.each(response, function(key, val){
                  $('.multiple-hosts-select2').append('<option value="'+val.id+'">'+val.text+'</option>');
                  $('.multiple-guest-select2').append('<option value="'+val.id+'">'+val.text+'(USER)</option>');

              });
                
          },
          error: function(error){
            console.log(error);
          }
    });
    //fetching site staff for the event staff selection
    $.ajax({
          url: '../handlers/common_db_handler.php',
          method: "POST",
          dataType: "JSON",
          data: {
            fetch_rqst: 'fetch_site_staff'
          },
          success: function(response){
              //populating the custom select box  wid the staff and guest fields
              $.each(response, function(key, val){
                  $('.multiple-staff-select2').append('<option value="'+val.id+'">'+val.text+'</option>');
                  $('.multiple-guest-select2').append('<option value="'+val.id+'">'+val.text+' (STAFF)</option>');
              });
                
          },
          error: function(error){
            //console.log(error);
          }
    });

    //fetching non registered users for selection
    //fetching site staff for the event staff selection
    $.ajax({
          url: '../handlers/common_db_handler.php',
          method: "POST",
          dataType: "JSON",
          data: {
            fetch_rqst: 'fetch_non_site_members'
          },
          success: function(response){
              //populating the custom select box  wid the staff and guest fields
              $.each(response, function(key, val){
                  $('.multiple-staff-select2').append('<option value="'+val.id+'">'+val.text+' (Non-site member)</option>');
                  $('.multiple-guest-select2').append('<option value="'+val.id+'">'+val.text+' (Non-site member)</option>');
                  $('.multiple-hosts-select2').append('<option value="'+val.id+'">'+val.text+' (Non-site member)</option>');
              });
                
          },
          error: function(error){
            //console.log(error);
          }
    });

    // initialize datepair
    var date_time_pickerEl = document.getElementById('date_time_picker');
    var datepair = new Datepair(date_time_pickerEl);

    ///initializing custom select box with searching
      $(document).ready(function() {
        
        $(".multiple-hosts").select2({
            placeholder: "Start with a name to search and add"
        });
        //onchange event
        $(".multiple-staff").on("change", function(e){
            //clear previous staff duty assignment div on every change
            $('.staff-duties-wrap').html('');
            
            var selections = $('.multiple-staff').select2('data');
            var selectedIds = [];
            var selectedOptions = [];
            for (var i = 0; i < selections.length; i++)
            {
                selectedIds.push(selections[i].id);
                selectedOptions.push(selections[i].text);
                //selectedStaffName.push(selections[i].name);        
            }

            for( var i=0; i<selections.length; i++ )
            {
                //naming select tags as multi-dimensional array to recognize duties for individual  staff
                var htmlToAdd = '<div class="form-group custom-select-container"><label for="id_label_multiple_staff_selected" class= "form-label">Duty for '+ selectedOptions[i] +'<select name="staff_duty['+ selectedIds[i] +'][]" class="multiple-staff-duty-selected form-control multiple-staff-duty-selected-select2" id="id_label_multiple_staff_duty_selected" multiple="multiple"><option>Photography</option><option>Doctor</option></select></label></div>';    
                $('.staff-duties-wrap').append(htmlToAdd);
            }
            $(".multiple-staff-duty-selected-select2").select2({
                placeholder: "Add a duty for the staff",
                tags: true
            });
            
            //console.log("Selected opions is"+ selections[0].text);
        });

        
        $(".multiple-staff").select2({
          placeholder: "Start with a name to search and add"
        });

        $(".multiple-guest").select2({
          placeholder: "Start with a name to search and add"
        });

      });
</script>
</body>
</html>