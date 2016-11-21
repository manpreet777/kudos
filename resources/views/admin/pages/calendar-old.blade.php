<?php/*
  include("applicationtop.php");
  $page='admin_calendar';	
  include("header.php");
*/?>
<style type="text/css">
  #event-colorpalette>div>button{
    padding: 10px;
  }
</style>
<link rel="stylesheet" href="js/plugins/fullcalendar/fullcalendar.css">
<div class="main as-table">        

    <div class="col-md-8 tile nopadding">
      <!-- tile widget -->
      <div class="tile-widget nopadding">
        <div class="cal-header">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs">
            <li class="active"><a href="#" id="change-view-month" data-toggle="tab">Month</a></li>
            <li><a href="#" id="change-view-week" data-toggle="tab">Week</a></li>
            <li><a href="#" id="change-view-day" data-toggle="tab">Day</a></li>
            <li><a href="#" id="change-view-today">Today</a></li>
          </ul>
          <!-- / Nav tabs -->
        </div>
      </div>
      <!-- /tile widget -->

      <!-- tile body -->
      <div class="tile-body">                
        <div id='calendar'></div>
      </div><!-- //tile-body -->

    </div><!-- //tile -->

    <div class="col-md-4 tile color greensea">
      <div class="tile-body">
        
        <div class="cal-options">
          
          <div class="date-info">
            <h2 class="text-center">
              <i class="fa fa-angle-left pull-left" id="cal-prev"></i>
              <span id="cal-current-date"></span>
              <i class="fa fa-angle-right pull-right" id="cal-next"></i>
            </h2>
            <h3 class="large-thin text-center" id="cal-current-day"></h3>
          </div>

          <div id="event-delete"><i class="fa fa-trash-o fa-4x"></i></div>                  
          
          <div id="external-events" class="events-wrapper">
            
            <h4 class="thin events">
              <strong>Draggable</strong> Events
              <a class="new-event pull-right" data-toggle="modal" href="#cal-new-event"><i class="fa fa-plus"></i></a>
            </h4>
            <?php/*
                // fetching the events from the db
                global $obj_Common;
                $query = "SELECT * FROM calendar WHERE status = '1'";
                $result = mysql_query($query);
                while($row = mysql_fetch_assoc($result) )
                {
            */?>
            <div class="external-event" style="border-left: 10px solid <?php/* echo $row['color']; */?>">
              <div class="event-id" style="display: none;" ><b>Id</b> <p><?php/* echo $row['id']; */?></p></div>
              <div class="event-title" ><b>Title</b> <p><?php/* echo $row['title']; */?></p></div>
              <div class="event-start-time" ><b>Start Date</b> <p><?php/* echo $row['start_date']; */?></p></div>
              <div class="event-start-time"><b>Event Start Time</b> <p><?php/* echo $row['start_time']; */?></p></div>
              <div class="event-end-time" ><b>Event End Time</b> <p><?php/* echo $row['end_time']; */?></p></div>
              <div class="event-host" ><b>Event Host</b> <p><?php/* echo $row['event_host']; */?></p></div>
              <div class="event-guest" ><b>Event Guest</b> <p><?php/* echo $row['event_guest']; */?></p></div>
              <div class="event-desc" ><b>Event Description</b> <p><?php/* echo $row['event_desc']; */?></p></div>              
              <div class="event-color" display:"<?php/* echo $row['color']; */?>" ></div>
            </div>
            <?php/* } */?>
    
            <div class="checkbox">
              <input type="checkbox" value="1" id="drop-remove">
               <label for="drop-remove">Remove after drop</label>
            </div>
           
          </div>

        </div>

      </div>
    </div><!-- //color green sea -->


    <!-- modal --> 
    <div class="modal fade" id="cal-new-event" tabindex="-1" role="dialog" aria-labelledby="new-event" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title thin" id="new-event">Add New Event</h3>
          </div>
          <form role="form" id="add-event" parsley-validate>
            <div class="modal-body">
                
              <div class="form-group">
                <label class="control-label">Event title *</label>
                <input type="text" maxlength="100" class="form-control" id="event-title" name="event-title" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                <label class="control-label">Start Date *</label>
                <input type="date" maxlength="50" class="form-control" id="event-start-date" name="event-start-time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                <label class="control-label">Start Time *</label>
                <input type="time" maxlength="50" class="form-control" id="event-start-time" name="event-start-time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                <label class="control-label">End Time *</label>
                <input type="time" maxlength="50" class="form-control" id="event-end-time" name="event-start-time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                <label class="control-label">Event Host</label>
                <input type="text" maxlength="50" class="form-control" id="event-host" name="event-duration" parsley-trigger="change" parsley-minlength="2" parsley-validation-minlength="1">
                <label class="control-label">Event Description</label>
                <textarea class="form-control" id="event-desc" name="event-desc"></textarea>
                <input type="text" maxlength="50" class="form-control" id="event-guest" name="event-guest" >
              </div>

              <div class="form-group">
                <label class="control-label">Color</label>
                <div class="input-group event-color">
                  <input type="text" maxlength="7" class="form-control" id="event-color" name="event-color" readonly="">
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
              <button class="btn btn-red" data-dismiss="modal" aria-hidden="true">Cancel</button>
              <button type="submit" class="btn btn-green">Add event</button>
            </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal fade-->  
  
  </div><!-- //as-table --> 

</div><!-- Page content end -->
</div><!-- /row -->
</div><!-- /wrap -->
<script type="text/javascript" src="js/plugins/fullcalendar/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar.js"></script>
<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>-->
<script type="text/javascript" src="js/plugins/colorpalette/bootstrap-colorpalette.js"></script>
<script type="text/javascript" src="js/plugins/parsley/parsley.min.js"></script>

<script type="text/javascript">

    $(function(){

    // Initialize external events
      $('#external-events div.external-event').each(function() {
        
        // Make events draggable using jQuery UI
        $(this).draggable({
          cursor: true,
          clone: true,
          zIndex: 99999,
          containment: ".main",
          drag: function() {
            $('.cal-options .date-info').addClass('out')
            $('.cal-options #event-delete').addClass('in')
          },
          stop: function() {
            $('.cal-options .date-info').removeClass('out')
            $('.cal-options #event-delete').removeClass('in')
          }
        });
        
      });
    
    
      // Initialize the calendar 
      //var zone = "05:30";
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        editable: true,
        droppable: true,
        events: '../handlers/admin_calendar_handler.php?rqst=get_events',
        /*eventSources: [
            {
              url:  '../handlers/admin_calendar_handler.php?rqst=get_events'
                  //color: 'color',
            }
        ],*/
        eventRender: function(event, element) { 
            //this is firning automatically on every change made to database
            var host = event.host;
            var guest = event.guest;
            //console.log("GUepreet" + event.host + "Sukhdeep seaon" +guest);
            element.find('.fc-event-title').append("<br/><span class='id' style='display: none;'>"+ event.id+"</span><span class='event-duration' style='display: none;'>"+ event.duration+"</span><span class='event-host' style='display: none;'>"+ event.host+"</span><span class='event-guest' style='display: none;'>"+ event.guest+"</span>");
        }, 
        drop: function(date, allDay, event, ui) {
          
          var event_start_time = $('.event-start-time', this).text();
          var event_end_time = $('.event-end-time', this).text();
          var eventTitle = $('.event-title', this).text();
          var start = date;
          
          var  copiedEventObject = {
            title: eventTitle,
            //start: date,
            //end: (date.getTime() + 1800000);
            allDay: allDay,
            color: $(this).css('border-left-color')
          };
          $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
            //console.log(this);
          };

          var formdata = {
              rqst: "add_event",
              title: eventTitle,
              start: date,
              //start: Date.parse(start),
              event_duration: $('.event-duration p', this).text(),
              event_host: $('.event-host p', this).text(),
              event_guest: $('.event-guest p', this).text(),
              color: $(this).css('border-left-color')
          };
          $.each(formdata, function(index, value){
            console.log(index+" => "+value);
          });
          if(confirm("Are you sure u want to add this event?") == 1)
          { 

            $.ajax({
               url: '../handlers/admin_calendar_handler.php',
               data: formdata,
               type: "POST",
               success: function(event, element, id, title, date){
                  //console.log(this);
                  //console.log(event);                
                  $('#calendar').fullCalendar('updateEvent', event);
                  updateEvent(id, title, date);
                  location.reload();
               },
               error: function(data){
                console.log("Error");
               }
            });
          }

        },  //drop funciton ends//
        eventClick: function(event, ui){
            //var id = $('#myCalendar').fullCalendar('removeEvents',event._id);
            //console.log(this);
            //var event_id = $('.id', this).text();
            //console.log(event_id+"  = Event id");
            /*if(confirm("Are you sure u want to remove this event?") == true)
            {

              var formdata = {
                  rqst: "event_delete",
                  id: event_id
              };

              $.ajax({
                 url: '../handlers/admin_calendar_handler.php',
                 data: formdata,
                 type: "POST",
                 success: function(responseText, event, id, title, date){
                    //console.log(responseText);
                    //$('#calendar').fullCalendar('updateEvent', event);
                    updateEvent(id, title, date);
                    //console.log("success result ="+responseText);
                    location.reload();
                 },
                 error: function(data){
                  console.log("Error!");
                 }
              });
            }
            else
            {
              console.log("Ignored by user");
            }*/
        }
        
      });

      // Hide default header
      $('.fc-header').hide();
      
      // Show current date
      var currentDate = $('#calendar').fullCalendar('getDate');
      
      $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));
      $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));     
    
      // Previous month action
      $('#cal-prev').click(function(){
        $('#calendar').fullCalendar( 'prev' );
        currentDate = $('#calendar').fullCalendar('getDate'); 
        $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));  
        $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));
      });

      // Next month action
      $('#cal-next').click(function(){
        $('#calendar').fullCalendar( 'next' );
        currentDate = $('#calendar').fullCalendar('getDate');
        $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));   
        $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));
      });
      
      // Change to month view
      $('#change-view-month').click(function(){
        $('#calendar').fullCalendar('changeView', 'month');

        // safari fix 
        $('#content .main').fadeOut(0, function() {
          setTimeout( function() {
            $('#content .main').css({'display':'table'}); 
          }, 0);
        });

      });
      
      // Change to week view
      $('#change-view-week').click(function(){
        $('#calendar').fullCalendar( 'changeView', 'agendaWeek');
        
        // safari fix 
        $('#content .main').fadeOut(0, function() {
          setTimeout( function() {
            $('#content .main').css({'display':'table'}); 
          }, 0);
        });

      });
      
      // Change to day view
      $('#change-view-day').click(function(){
        $('#calendar').fullCalendar( 'changeView','agendaDay');

        // safari fix 
        $('#content .main').fadeOut(0, function() {
          setTimeout( function() {
            $('#content .main').css({'display':'table'}); 
          }, 0);
        });
        
      });

      // Change to today view
      $('#change-view-today').click(function(){
        $('#calendar').fullCalendar('today');
        currentDate = $('#calendar').fullCalendar('getDate');  
        $('#cal-current-day').html($.fullCalendar.formatDate(currentDate, "dddd"));
        $('#cal-current-date').html($.fullCalendar.formatDate(currentDate, "MMM yyyy"));
      });

      // Initialize colorpalette
      $('#event-colorpalette').colorPalette({ 
        colors:[['#428bca', '#5cb85c', '#5bc0de', '#f0ad4e' ,'#d9534f', '#ff4a43', '#22beef', '#a2d200', '#ffc100', '#cd97eb', '#16a085', '#FF0066', '#A40778', '#1693A5']] 
      }).on('selectColor', function(e) {
        var data = $(this).data();

        $(data.returnColor).val(e.color);
        $(this).parents(".input-group").css("background-color", e.color );
      });


      // Submitting new event form
      $('#add-event').submit(function(e){
        e.preventDefault();
        var form = $(this);
        
        if(form.parsley('isValid')) {
       
          var newEvent = $('<div class="external-event" data-color="'+$("#event-color").val()+'"><div class="event-duration">'+$("#event-duration").val()+'</div><div class="event-guest">'+$("#event-guest").val()+'</div><div class="event-host">'+$("#event-host").val()+'</div><div class="event-title" data-color="'+$("#event-color").val()+'">'+$('#event-title').val() +'</div><div class="event-start-time" data-color="'+$("#event-color").val()+'">'+$('#event-start-time').val() +'</div><div class="event-end-time" data-color="'+$("#event-color").val()+'">'+$('#event-end-time').val() +'</div><div class="event-color" display:"none" data-color="'+$("#event-color").val()+'">'+$('#event-color').val() +'</div></div>');
          
          newEvent.css({'border-left-color': $("#event-color").val() || "#717171"});

          if ($('#external-events .external-event').length > 0) {
            $('#external-events .external-event:last').after(newEvent);
          } else {
            $('#external-events .events').after(newEvent);
          };

          $('#external-events .external-event:last').after(newEvent);

          $('#external-events .external-event').draggable({
            zIndex: 999,
            revert: true,     
            revertDuration: 0,
            drag: function() {
              $('.cal-options .date-info').addClass('out')
              $('.cal-options #event-delete').addClass('in')
            },
            stop: function() {
              $('.cal-options .date-info').removeClass('out')
              $('.cal-options #event-delete').removeClass('in')
            }
          });

          form[0].reset();

          $('#cal-new-event').modal('hide');

        } else {
          
          $('#event-title').focus();
          return false;

        }
        
      });

      // Event deleting function

      $('.cal-options #event-delete').droppable({
        accept: "#external-events .external-event",
        hoverClass: "active",

        drop: function(event, ui) {
          var flag = confirm("Are you sure u want to remove this event?");
          if(flag == true)
          { 
              ui.draggable.remove();
              $(this).removeClass( "active in" );
              $('.cal-options .date-info').removeClass('out')
              //removing from database
              html = [ui.helper[0], event];
              //console.log(html);
              var event_id = $('.event-id p', html).text();
              var formdata = {
                  rqst: "event_delete",
                  id: event_id
              };
              $.ajax({
                 url: '../handlers/admin_calendar_handler.php',
                 data: formdata,
                 type: "POST",
                 success: function(responseText, event, id, title, date){
                    location.reload();
                    //console.log("Ajax call returns done successfully "+responseText);
                    //$('#calendar').fullCalendar('updateEvent', event);
                    //updateEvent(id, title, date);
                 },
                 error: function(data){
                  console.log("Error!");
                 }
              });
          }
        }
      
      });

    })
    function updateEvent(id, title, date) {

    i = id;

    /*This is the id of the event on full calendar,
    in my case i set this id when I create each event*/

    event = $('#calendar').fullCalendar( 'clientEvents', [i] )[0];
    /*This method returns an array of object with id == i
    That's why is necessary to aggregate [0] at the end 
    to get the event object.*/

      if (event != null){
        //make your modifications and update
        event.title = title;
        event.start = date;
        $('#calendar').fullCalendar( 'updateEvent', event );
      }
    }

    </script>
<!-- Wrap all page content end -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</body>
</html>