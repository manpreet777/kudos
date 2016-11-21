<?php/* require_once("applicationtop.php") ; */?>
<?php/*
$page='dashboard';
$lasttwomonth = mktime(0, 0, 0, date("m")-2, date("d"),   date("Y"));
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$currentmonth = mktime(0, 0, 0, date("m"), date("d"),   date("Y"));
$sart=strtotime(date('d-m-Y'));
$enddate=$sart+86400;

	$datewiselast=$obj_Common->get_visitors_country_wise(''.$lastmonth.' > udate  && '.$lasttwomonth.' <= udate','tbl_user','u_id');
	$lasstmonthuser=$datewiselast->number;
	$datewisethis=$obj_Common->get_visitors_country_wise(''.$lastmonth.' < udate  ','tbl_user','u_id');
	$thismonthuser=$datewisethis->number;
	$today=$obj_Common->get_visitors_country_wise(''.$sart.' <= udate  && '.$enddate.' >= udate','tbl_user','u_id');
	$todayuser=$today->number;
	
	$actuser=$obj_Common->get_visitors_country_wise('u_status = "1"','tbl_user','u_id');
	$acuser=$actuser->number;
	
	$inacusers=$obj_Common->get_visitors_country_wise('u_status = "0"','tbl_user','u_id');
	$inacuser=$inacusers->number;
	
$total=$obj_Common->get_visitors_country_wise("1=1",'tbl_user','u_country');
$toaluser=$total->number;

$datewiselast_vi=$obj_Common->get_visitors_country_wise(''.$lastmonth.' > vt_date  && '.$lasttwomonth.' <= vt_date','tbl_visitors','vt_id');
	$lasstmonthuser_vi=$datewiselast_vi->number;
	$datewisethis_vi=$obj_Common->get_visitors_country_wise(''.$lastmonth.' < vt_date  ','tbl_visitors','vt_id');
	$thismonthuser_vi=$datewisethis_vi->number;
	$today_vi=$obj_Common->get_visitors_country_wise(''.$sart.' <= vt_date  && '.$enddate.' >= vt_date','tbl_visitors','vt_id');
	$todayuser_vi=$today_vi->number;
	$total_vi=$obj_Common->get_visitors_country_wise("1=1",'tbl_visitors','vt_id');
	$toaluser_vi=$total_vi->number;
	
	$todayonline=$obj_Common->get_visitors_country_wise('u_is_login="1"','tbl_user','u_id');
	$tisonline=$todayonline->number;
	
*/?>
<input type="hidden" value="<?php/* echo $todayuser;*/?>" name="todaycount" id="todaycount">
			<input type="hidden" value="<?php/* echo $tisonline;*/?>" name="tisonline" id="tisonline">
			<input type="hidden" value="<?php/* echo $lasstmonthuser;*/?>" name="lasstmonthuser" id="lasstmonthuser">

			<input type="hidden" value="<?php/* echo $todayuser_vi;*/?>" name="todaycount_vi" id="todaycount_vi">
			<input type="hidden" value="<?php/* echo $toaluser_vi;*/?>" name="toaluser_vi" id="toaluser_vi">
			<input type="hidden" value="<?php/* echo $lasstmonthuser_vi;*/?>" name="lasstmonthuser_vi" id="lasstmonthuser_vi">

			<input type="hidden" value="<?php/* echo $toaluser;*/?>" name="toaluser" id="toaluser">
			<input type="hidden" value="<?php/* echo $inacuser;*/?>" name="inacuser" id="inacuser">
			<input type="hidden" value="<?php/* echo $acuser;*/?>" name="acuser" id="acuser">
			
			<input type="hidden" value="<?php/* echo $toaluser;*/?>" name="toaluser" id="toaluser">
			<input type="hidden" value="<?php/* echo $inacuser;*/?>" name="inacuser" id="inacuser">
			<input type="hidden" value="<?php/* echo $acuser;*/?>" name="acuser" id="acuser">
			
			<input type="hidden" value="<?php/* echo $voipc_obj->fun_get_all();*/?>" name="tvopic" id="tvopic">
			<input type="hidden" value="<?php/* echo $voipc_obj->fun_get_all('1');*/?>" name="tvuser" id="tvuser">
			<input type="hidden" value="<?php/* echo $voipc_obj->fun_get_all('0');*/?>" name="tvvist" id="tvvist">