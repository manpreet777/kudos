<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='lotto-update';
$r='ls1';
*/?>
<?php/* include("header.php");*/?>

<style type="text/css">
    .loading{
        background: url(../images/bx_loader.gif) center center no-repeat;
        padding: 10px 20px;
        margin-left: 15px;
        height: auto;
}

</style>

<!-- breadcrumbs -->
<div class="breadcrumbs">
<ol class="breadcrumb">
  <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
  <li class="active">Lotto Stats Update</li>
</ol>
</div>
<!-- /breadcrumbs -->

<!-- content main container -->
<div class="main">

<!-- row -->
<div class="row">
  <div class="col-md-12">
	
	<!-- tile -->

	<section class="tile">

	  <!-- tile header -->
	  <div class="tile-header">
		<h1><strong>Site Lotto</strong> Update</h1>
		<!--<span class="note">Custom Labels</span>-->
		<?php/* if(isset($_REQUEST['msg'])){*/?>
       		<div class="success">
     			<?php/* echo $_REQUEST['msg'];*/?>
      		</div>
      	<?php/* } */?>
	  </div>
	  <!--	//tile header
			//tile body-->
	  <div class="tile-body">
		   
        <div class="container">
            <div class="upcoming-lotto-update col-sm-4">
                
                <form action="<?php/* echo $_SERVER['PHP_SELF']; */?>" method="post">
                    <fieldset>
                    <legend>Update upcoming stats for Mega-sena</legend>
                    <div class="form-group">
                        <label>Next Draw Date</label>
                        <input type="text" id="datepicker" class="upcoming_date" name="date" required class="form-control">
                    </div><!--//form-group -->
                    <div class="form-group">
                        <label>Estimated jackpot</label>
                        <input type="text" class="upcoming_jackpot" name="jackpot" required class="form-control">
                    </div><!-- //form-group -->
                        <input type="submit" name="upcoming_mega_update" class="btn btn-info upcoming_mega_update" value="Update">
                        <span class="msg"></span>
                    </fieldset>
                </form>
            </div>
            <div class="col-sm-4 last-entry-upcoming-lotto">
                <h3>Previous Upcoming data stats data for Mega-Sena</h3>
                <p class="date">Date: <b></b></p>
                <p class="amt">Jackpot Amount: <b></b></p>
            </div><!--//// last-entry-upcoming-lotto -->
            <div class="clearfix"></div>
            <div class="lotto-update col-sm-6">
           
			<H3>Update lotto results</H3>
            
		  		<div class="mega">
		  			<h5>Mega sena</h5>
		  			<a href="#" class="btn btn-lg btn-info lotto-update-btn">Update megasena lotto stats<i></i></a>
		  			<span></span>
		  		</div>
		  		<div class="euro">
		  			<h5>Euro-millions</h5>
		  			<a href="#" class="btn btn-lg btn-info lotto-update-btn">Update euro-millions lotto stats<i></i></a>
		  			<span></span>
		  		</div>
		  		<div class="power">
		  			<h5>Power-ball</h5>
		  			<a href="#" class="btn btn-lg btn-info lotto-update-btn">Update power-ball lotto stats<i></i></a>
		  			<span></span>
		  		</div>
		  		
		  	</div><!-- //lotto-update -->

		  	<div class="lotto-restore col-sm-6">
				<H3>Restore lotto results</H3>
		  		<p>Please be patient, restoring data may take quiet a while some time!</p>
                <div class="mega">
		  			<h5>Mega sena</h5>
		  			<a href="#" class="btn btn-lg btn-info lotto-restore-btn">Restore megasena lotto stats<i></i></a>
		  			<span></span>
		  		</div>
		  		<div class="euro">
		  			<h5>Euro-millions</h5>
		  			<a href="#" class="btn btn-lg btn-info lotto-restore-btn">Restore euro-millions lotto stats<i></i></a>
		  			<span></span>
		  		</div>
		  		<div class="power">
		  			<h5>Power-ball</h5>
		  			<a href="#" class="btn btn-lg btn-info lotto-restore-btn">Restore power-ball lotto stats<i></i></a>
		  			<span></span>
		  		</div>
		  		
		  	</div><!-- ///lotto-restore -->

	    </div><!-- //container -->
      </div><!--// /tile body -->

	</section>
  
  </div><!-- //col-md-12 -->
</div>
<!-- /row -->
</div>
<!-- /content container -->
        </div>
        <!-- Page content end -->
      </div>
      <!-- Make page fluid-->

    </div>
    <script src="../js/moment.js"></script>
    <script src="../js/moment-timezone.js"></script>
    <script type="text/javascript">
    //jquery ui calendar for input

    $(function() {
        $( "#datepicker" ).datepicker();
    });

    //show megasena upcoming stats
    refreshMegaUpcomingStats();
    ///////////////////////////

    
    /////jquery ui calendar ends her ////////////

    	$('document').ready(function(){
    		$('.lotto-update .mega a').on('click', function(e){
    			e.preventDefault();
                var this1 = $(this);
                this1.find('i').addClass('loading');
    			$('.lotto-update .mega span').text("Updating.. Do not close the browser or navigate to another page");
    			$.ajax({
    				url: "web-scrap/mega-sena-scrap.php",
    				data: {
    					rqst: "admin"
    				},
    			}).done(function(data){
    				//console.log("data after frst ajax call"+data);
                    if(data == "error")
                    {
                        this1.find('i').removeClass('loading');
                        $('.lotto-update .mega span').text("Error while updating lotto stats!");
                    }
                    if(data == "1" || data == 1)//when a new data record is added
                        //check for winners from the db by fetching the last entry
                        //in the json file
                    {
                        
                        $.ajax({
                            url: 'web-scrap/update_megasena_meta_stats.php',
                            data: {
                                rqst: "admin"
                            }
                        }).done(function(data1){
                            //console.log("after update megasena meta stats"+data1);
                            if(data1 == 1 || data1 == '1')                
                            {
                                $('.lotto-update .mega span').text("Updated successfully.");
                                this1.find('i').removeClass('loading');
                            }
                            else 
                            {
                                $('.lotto-update .mega span').text("Error updating megasena stats.");
                                this1.find('i').removeClass('loading');
                            
                            }
                        }).error(function(error1){
                            $('.lotto-update .mega span').text("Error updating megasena stats.");
                            this1.find('i').removeClass('loading');
                        });
                    }
                    
                    else if(data == "0" && data == 0)
    				{
                        $('.lotto-update .mega span').text("Updated successfully. No new data added");
    					this1.find('i').removeClass('loading');
                    }
    				
    				else if(data == "illegal")
        			{	
                        $('.lotto-update .mega span').text("Illegal updation request!");
    			     this1.find('i').removeClass('loading');
                    }
                }).error(function(data){
                        $('.lotto-update .mega span').text("Not able to perform updation right now!");
                        this1.find('i').removeClass('loading');
    			});

    		});
    		$('.lotto-update .euro a').on('click', function(e){
    			e.preventDefault();
                var this1 = $(this);
                $(this).find('i').addClass('loading');
    			$('.lotto-update .euro span').text("Updating.. Do not close the browser or navigate to another page");
    			$.ajax({
    				url: "web-scrap/euro-millions-ball-scrap.php",
    				data: {
    					rqst: "admin"
    				}
    			}).done(function(data){
                    console.log("euro data =>"+ data);
    				if(data != "error" && data != "illegal")
    				{	
    					if(data == "1" || data == 1)//when a new data record is added
    					//check for winners from the db by fetching the last entry
    					//in the json file
    					{
	    					//checking for users who won jackpot or other lotto prize
	    					
	    					$.ajax({
                                url: "web-scrap/lotto_meta.php",
                                type: "POST",
                                statusCode: {
                                    404: function(){
                                        alert("Unable to update right now!");
                                    }
                                },
                                data: {
                                    lotto : 'euromillions'
                                }

                            }).done(function(data){
                                console.log("done**"+data);
                                this1.find('i').removeClass('loading');
                                $('.lotto-update .euro span').text("Updated successfully.");
                            }).error(function(data){
                                console.log("Error in 2nd ajax call"+data);
                                this1.find('i').removeClass('loading');
                                $('.lotto-update .euro span').text("Update Error! Please try again later or else restore data by clicking on the restore button below.");
                                //console.log("error***"+data);
                            });
    					}
                        else
                        {
                            this1.find('i').removeClass('loading');
                            $('.lotto-update .euro span').text("Updated successfully. No new data added")
                        }

    				}
    				if(data == "error")
                    {
    				    this1.find('i').removeClass('loading');
                    	$('.lotto-update .euro span').text("Error while updating lotto stats!");
                    }
    				if(data == "illegal")
                    {
                        this1.find('i').removeClass('loading');
    					$('.lotto-update .euro span').text("Illegal updation request!");
                    }
    			}).error(function(data){
                        console.log("error in first ajax call"+data);
                        this1.find('i').removeClass('loading');
    					$('.lotto-update .euro span').text("Not able to perform updation right now!");
    			});

    		});
    		$('.lotto-update .power a').on('click', function(e){
    			e.preventDefault();
                var this1 = $(this);
                $(this).find('i').addClass('loading');
    			$('.lotto-update .power span').text("Updating.. Do not close the browser or navigate to another page");
    			$.ajax({
    				url: "web-scrap/power-ball-scrap.php",
    				data: {
    					rqst: "admin"
    				}
    			}).done(function(data){
                    console.log("data after frst request"+ data);
    				if(data != "error" && data != "illegal")
    				{
    					//$('.lotto-update .power span').text("Updated successfully.");
    					
    					if(data != "oldData")//when a new data record is added
    					//check for winners from the db by fetching the last entry
    					//in the json file
    					{
	    					//checking for users who won jackpot or other lotto prize
	    					if(data == "1" || data == 1)
                            {
	    					  
	    					  $.ajax({
	    						url: "web-scrap/lotto_meta.php",
                                type: "POST",
                                statusCode: {
                                    404: function(){
                                        alert("Unable to update right now!");
                                    }
                                },
                                data: {
                                    lotto : 'powerball'
                                }
    						  }).done(function(data){
                                    this1.find('i').removeClass('loading');
    				    			$('.lotto-update .power span').text("Updated successfully.");
                              }).error(function(data){
                                    this1.find('i').removeClass('loading');
                                    $('.lotto-update .power span').text("Update Error! Please try again later or else restore data by clicking on the restore button below.");
    						  });
    					   }
    				    }
                    }
    				if(data == "error")
                    {
                        this1.find('i').removeClass('loading');
    					$('.lotto-update .power span').text("Error while updating lotto stats!");
                    }
    				if(data == "illegal")
                    {
                        this1.find('i').removeClass('loading');
    					$('.lotto-update .power span').text("Illegal updation request!");
                    }
    			}).error(function(error){
                    this1.find('i').removeClass('loading');
                    $('.lotto-update .power span').text("Update Error!");
                });

    		});

    		$('.lotto-restore .mega a').on('click', function(e){
    			e.preventDefault();
                var this1 = $(this);
                this1.find('i').addClass('loading');
    			$('.lotto-restore .mega span').text("Updating.. Do not close the browser or navigate to another page");
    			$.ajax({
    				url: "web-scrap/mega.php",
    				data: {
    					rqst: "admin"
    				}
    			}).done(function(data){
    				this1.find('i').removeClass('loading');
                    if(data == "success")
                    {
    				   $('.lotto-restore .mega span').text("Updated successfully.");
                    }
    				if(data == "error")
                    {
    				 	$('.lotto-restore .mega span').text("Error while updating lotto stats!");
                    }
    				if(data == "illegal")
                    {
                    	$('.lotto-restore .mega span').text("Illegal updation request!");
                    }
    			}).error(function(data){
                    this1.find('i').removeClass('loading');
    					$('.lotto-restore .mega span').text("Not able to perform updation right now!");
    			});

    		});

    		$('.lotto-restore .euro a').on('click', function(e){
    			e.preventDefault();
                var this1 = $(this);
                this1.find('i').addClass('loading');
    			$('.lotto-restore .euro span').text("Updating.. Do not close the browser or navigate to another page");
    			$.ajax({
    				url: "web-scrap/euro.php",
    				data: {
    					rqst: "admin"
    				}
    			 }).done(function(data){
                        this1.find('i').removeClass('loading');
        				if(data == "success")
        					$('.lotto-restore .euro span').text("Updated successfully.");
        				if(data == "error")
        					$('.lotto-restore .euro span').text("Error while updating lotto stats!");
        				if(data == "illegal")
        					$('.lotto-restore .euro span').text("Illegal updation request!");
        		}).error(function(data){
                        this1.find('i').removeClass('loading');
        					$('.lotto-restore .euro span').text("Not able to perform updation right now!");
        		});

    		});

    		$('.lotto-restore .power a').on('click', function(e){
    			e.preventDefault();
                var this1 = $(this);
                this1.find('i').addClass('loading');
    			$('.lotto-restore .power span').text("Updating.. Do not close the browser or navigate to another page");
    			$.ajax({
    				url: "web-scrap/power.php",
    				data: {
    					rqst: "admin"
    				}
    			}).done(function(data){
                    this1.find('i').removeClass('loading');
    				if(data == "success")
    					$('.lotto-restore .power span').text("Updated successfully.");
    				if(data == "error")
    					$('.lotto-restore .power span').text("Error while updating lotto stats!");
    				if(data == "illegal")
    					$('.lotto-restore .power span').text("Illegal updation request!");
    			}).error(function(data){
                    this1.find('i').removeClass('loading');
    					$('.lotto-restore .power span').text("Not able to perform updation right now!");
    			});

    		});

    	});
        $('.upcoming_mega_update').on('click', function(e){
            e.preventDefault();
            
            var date = new Date($('.upcoming_date').val());
            console.log(date+"Date");
            var jackpot = $('.upcoming_jackpot').val();
            if(date != ""  && jackpot != "")
            {
                date = moment(date);
                var formatted_date = moment(date).format('dddd DD MMMM YYYY');
            
                //open json file and add data to it
                console.log(formatted_date);
                $.ajax({
                    url: "web-scrap/lotto_meta.php",
                    type: "POST",
                    data: {
                        lotto: "megasena",
                        date: formatted_date,
                        jackpot: jackpot
                    }
                }).done(function(data){
                    if(data == 1)
                        $('.upcoming-lotto-update .msg').text('Data updated successfully.');
                    if(data == -1)
                        $('.upcoming-lotto-update .msg').text('Data already exits. Please check the data again!');
                    if(data == 0)
                        $('.upcoming-lotto-update .msg').text('Something went wrong... Please refresh the page and try again!').hide(10000);  
                    refreshMegaUpcomingStats();
                }).error(function(error_data){
                    console.log(error_data);
                });
            }
            else
                $('.upcoming-lotto-update .msg').text('Please enter date and jackpot amount to continue');  
        });
        function refreshMegaUpcomingStats()
        {
            $.getJSON('web-scrap/json/mega-sena-upcoming-draw-archive.json', function(data){
                var items = [];    
                $.each( data, function( key, val ) {
                    item = [];
                    item = {
                        date:     val['Date'],
                        jackpot:  val['Jackpot']
                    } 
                    items.push(item);
                });
                //display last record for upcoming lotto details for megasena
                $('.last-entry-upcoming-lotto .date b').text(items[items.length-1]['date']);
                $('.last-entry-upcoming-lotto .amt b').text(items[items.length-1]['jackpot']);
            });
        }
    </script>
  </body>
</html>