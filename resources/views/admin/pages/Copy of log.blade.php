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

    <!-- col 12 -->
    <div class="col-md-12">
          
      <!-- tile -->
      <section class="tile cornered">

        <!-- tile header -->
        <div class="tile-header">
          <h1><strong>Log</strong> </h1>
           <?php/* if($_REQUEST['msg']!=''){*/?>
         <div class="success">
       <?php/* echo $_REQUEST['msg'];*/?>
        </div>
        <?php/* } */?>
        </div>

        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body nopadding">
          
                          <table class="table">
                            <tr class="red">
           <th>Average Login Time</th>
          <th>Total User</th>
             
          </tr>
          <tr class="success">
           <td>
                  <?php/* echo $avgtime; */?>
              </td>
         <td>
                  <?php/* echo $totalcnt; */?>
              </td>
              
          </tr>
           <tr class="red">
         
              <th>Browser</th>
                <th>Total User</th>
                
          </tr>
       <?php/* 
$sno1=0;
while($rowbr=mysql_fetch_object($browser)){
 $sno1++;
		if($sno1%2==0)
		$cl='warning';
		else
		$cl='success';
*/?>
          <tr class="<?php/* echo $cl;*/?>">
              <td>
                <?php/* echo $rowbr->lg_browser; */?>
                
              </td>
              <td>
                   <?php/* echo $rowbr->bk; */?>
              </td>
          
          </tr>
          <?php/* } */?>
            <tr class="red">
         
              <th>Operating System</th>
                <th>Total User</th>
                
          </tr>
          <?php/*
$sno=0;
while($rowo=mysql_fetch_object($ops)){ 
$sno++;
		if($sno%2==0)
		$cl='warning';
		else
		$cl='success';
*/?>
          <tr class="<?php/* echo $cl;*/?>">
              <td>
                <?php/* echo $rowo->lg_os; */?>
                
              </td>
              <td>
                   <?php/* echo $rowo->ok; */?>
              </td>
          
          </tr>
          <?php/* } */?>
      
      </table>
        </div>
        <!-- /tile body -->
      
      </section>
      <!-- /tile -->

    </div>
    <!-- /col 12 -->

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
 
  </body>
</html>