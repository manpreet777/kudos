<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='log';
$totalq=$obj_Common->get_visitors_country_wise("lg_id!='0'",'tbl_logs',"lg_id");
$totalcnt=$totalq->number;

$browser=$obj_Common->get_query("lg_id!='0'",'tbl_logs',"lg_browser,count(lg_id) as bk","group by lg_browser");
$ops=$obj_Common->get_query("lg_id!='0'",'tbl_logs',"lg_os,count(lg_id) as ok","group by lg_os");


$lintime=$obj_Common->get_sum_of_cnt("lg_logout_time!='0'",'tbl_logs',"lg_login_time");
$logintime=$lintime->cnt;
$lotime=$obj_Common->get_sum_of_cnt("lg_logout_time!='0'",'tbl_logs',"lg_logout_time");
$logouttime=$lotime->cnt;
$subtract= $logouttime- $logintime;
$time=(int)($subtract/$totalcnt);
$avgtime=$obj_Common->time_difference($time)	 
	*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li class="active">Log</li>
  </ol>
</div>
<!-- /breadcrumbs -->

<!-- content main container -->
<div class="main">
  <!-- row -->
  <div class="row">
    <!-- col 8 -->
    <div class="col-lg-8 col-md-12">
      <!-- tile -->
      <section class="tile cornered">
        <!-- tile widget -->
       
        <!-- /tile widget -->
        
        <!-- tile body -->
        <div class="tile-body">
          <div class="row">
            <ul class="inline">
              
              <li class="col-md-4 col-sm-6 col-xs-6">
                <h5 class="underline">Browser</h5>
                <ul class="progress-list">
			<?php/* 
                      while($rowbr=mysql_fetch_object($browser)){
                      */?>
                 <li>
                    <div class="details">
                      
                      <div class="title"><?php/* echo $rowbr->lg_browser; */?></div>
                    </div>
                    <div class="status pull-right">
                      <span class="animate-number" data-value="<?php/* echo $rowbr->bk; */?>" data-animation-duration="800">0</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="progress progress-little no-radius">
                      <div class="progress-bar progress-bar-amethyst animate-progress-bar" data-percentage="<?php/* echo $rowbr->bk; */?>" style="width: 0%;"></div>
                    </div>
                  </li>
                  <?php/* } */?>     
                </ul>
              </li>
              <li class="col-md-4 col-sm-6 col-xs-6">
                <h5 class="underline">Operating system</h5>
                <ul class="progress-list">
                 <?php/*
while($rowo=mysql_fetch_object($ops)){ 
*/?>
                  <li>
                    <div class="details">
                  
                      <div class="title"><?php/* echo $rowo->lg_os; */?></div>
                    </div>
                    <div class="status pull-right">
                      <span class="animate-number"  data-value="<?php/* echo $rowo->ok; */?>" data-animation-duration="1500">0</span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="progress progress-little no-radius" >
                      <div class="progress-bar progress-bar-green animate-progress-bar" data-percentage="<?php/* echo $rowo->ok; */?>" style="width: 0%;"></div>
                    </div>
                  </li>
                  <?php/* } */?>     
                </ul>
              </li>
              <li class="col-md-4 col-sm-6 col-xs-6">
                <h5 class="underline">Average Login Time</h5>
                <ul class="progress-list">
               
                  <li>
                    <div class="details">
                    <strong><?php/* echo $avgtime; */?></strong>
                    </div>
                  </li>
                   <li>
                    <div class="details" style="margin-top:20px;">
                  
                      <div class="title">Total User</div>
                    </div>
                    <div class="status pull-right"  style="margin-top:20px;">
                      <span class="animate-number"  data-value="<?php/* echo $totalcnt; */?>" data-animation-duration="1500">0</span>
                    </div>
                    
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- /tile body -->

      </section>
      <!-- /tile -->
 
    </div>
    <!-- /col 8-->
  </div>
  <!-- /row -->
  <!-- row -->
  <div class="row">

  </div>
  <!-- /row -->         
</div>
<!-- /content container -->

        </div>
        <!-- Page content end -->

      </div>
      <!-- Make page fluid-->
    </div>
    <!-- Wrap all page content end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="js/plugins/jquery.easypiechart.min.js"></script>

    <script src="js/plugins/jquery.animateNumbers.js"></script>

    <script src="js/plugins/flot/jquery.flot.animator.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.orderBars.js"></script>

    <script>
    $(function(){
      //animate numbers with class .animate-number with data-value attribute
      $(".animate-number").each(function() {
        var value = $(this).data('value');
        var duration = $(this).data('animation-duration');

        $(this).animateNumbers(value, true, duration, "linear");
      });

      //animate progress bars
      $('.animate-progress-bar').each(function(){
        var progress =  $(this).data('percentage');
        $(this).css('width', progress);
      })

    })
      
    </script>
  </body>
</html>