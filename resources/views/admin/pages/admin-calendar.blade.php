<?php/*
  include("applicationtop.php");
  $page='admin_calendar';	
  include("header.php");
*/?>
<link rel="stylesheet" href="js/plugins/fullcalendar/fullcalendar.css">
<!-- "main as-table" -->
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
          </div><!-- //"date-info"> -->

          <div id="event-delete"><i class="fa fa-trash-o fa-4x"></i></div>                  
          
          <div id="external-events" class="events-wrapper">
            
            <h4 class="thin events">
              <strong>Draggable</strong> Events
              <a class="new-event pull-right" data-toggle="modal" href="#cal-new-event"><i class="fa fa-plus"></i></a>
            </h4>
            <div class="external-event" data-color="red">The Custom Event #1</div>
            <div class="external-event" data-color="cyan">The Custom Event #2</div>
            <div class="external-event" data-color="orange">The Custom Event #3</div>
            <div class="external-event" data-color="amethyst">The Custom Event #4</div>
            <div class="external-event" data-color="drank">The Custom Event #5</div>
            <div class="external-event">The Custom Event #6</div>
    
            <div class="checkbox">
              <input type="checkbox" value="1" id="drop-remove">
               <label for="drop-remove">Remove after drop</label>
            </div>
           
          </div><!-- //"external-events" -->

        </div><!-- //"cal-options"> -->

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
                <input type="text" class="form-control" id="event-title" name="event-title" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                <label class="control-label">Start Time *</label>
                <input type="time" class="form-control" id="event-start-time" name="event-start-time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
                <label class="control-label">End Time *</label>
                <input type="time" class="form-control" id="event-end-time" name="event-end-time" parsley-trigger="change" parsley-minlength="4" parsley-validation-minlength="1">
              </div>

              <div class="form-group">
                <label class="control-label">Color</label>
                <div class="input-group event-color">
                  <input type="text" class="form-control" id="event-color" name="event-color" readonly="">
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-greensea dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tint"></i></button>
                    <ul class="dropdown-menu pull-right">
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
<!--<script type="text/javascript" src="js/plugins/fullcalendar/fullcalendar.js"></script>-->

<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.js'></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/plugins/colorpalette/bootstrap-colorpalette.js"></script>
<script type="text/javascript" src="js/plugins/parsley/parsley.min.js"></script>

<script type="text/javascript">

    $(function(){  
      // Initialize external events
    
      $('#external-events div.external-event').each(function() {
        
        // Make events draggable using jQuery UI
        $(this).draggable({
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
        drop: function(date, allDay) { 
          var  copiedEventObject = {
            //title: $(this).text(),
            start: date,
            //end: (date.getTime() + 1800000)/1000;
            allDay: allDay,
            color: $(this).css('border-left-color')
          };
          $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
          // is the "remove after drop" checkbox checked?
          if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
          }
          var eventTitle = this.innerHTML;

          var formdata = {
              title: eventTitle,
              //start: copiedEventObject.start,
              

              //end: copiedEventObject.end
          };
          
          $.ajax({
             url: '../handlers/admin_calendar_handler.php',
             data: formdata,
             type: "POST",
             success: function(responseText){
                console.log(responseText);
                //$('#calendar').fullCalendar('updateEvent', responseText.NewID);
             },
             error: function(data){
              console.log(data);
             }
          });

        },

        /*drop: function(date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = $(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;

            // render the event on the calendar
            // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            console.log("This is \n");
            var eventDesc = this.innerHTML;
            console.log(eventDesc);
            //var formdata = "startdatum="+copiedEventObject.start;
            //console.log(formdata);
            /*$.ajax({
             url: '<cfoutput>#application.TartalomURL#</cfoutput>mod_Kalender/act_event_ins.cfm',
             data: formdata,
             type: "POST",
             dataType: "json",
             cache: false,
             success: function(responseText){
             $('#calendar').fullCalendar('updateEvent', responseText.NewID);
             }
              }); 
        }//,*/

        /*eventReceive: function(event){
           var title = event.title;
           var start = event.start.format("YYYY-MM-DD[T]HH:MM:SS");
           $.ajax({
             url: 'process.php',
             data: 'type=new&title='+title+'&startdate='+start+'&zone='+zone,
             type: 'POST',
             dataType: 'json',
             success: function(response){
               console.log(response);
               event.id = response.eventid;
               $('#calendar').fullCalendar('updateEvent',event);
             },
             error: function(e){
               console.log(e.responseText);
             }
           });
           $('#calendar').fullCalendar('updateEvent',event);
        }*/
        
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
        $(this).parents(".input-group").css("border-bottom-color", e.color );
      });


      // Submitting new event form
      $('#add-event').submit(function(e){
        e.preventDefault();
        var form = $(this);
        
        if(form.parsley('isValid')) {
       
          var newEvent = $('<div class="external-event" data-color="'+$("#event-color").val()+'">'+$('#event-title').val() +'</div>');
          
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
      $('#calendar').children('.fc-content').children().append('<div id="calendarTrash" style="float: right; padding-top: 5px; padding-right: 5px; padding-left: 5px;"><span class="ui-icon ui-icon-trash"></span></div>');
      
      $('.cal-options #event-delete').droppable({
        accept: "#external-events .external-event",
        hoverClass: "active",
        drop: function(event, ui) {
          ui.draggable.remove();
          $(this).removeClass( "active in" );
          $('.cal-options .date-info').removeClass('out')
        }
      });
      

    })
    

    </script>
<!-- Wrap all page content end -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</body>
</html>