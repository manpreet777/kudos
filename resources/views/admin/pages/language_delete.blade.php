<?php/* 
	include("applicationtop.php");
	$r='l4';
	$login_obj->fun_check_login() ;
	$sqlsel="select * from tbl_language where Lg_id=".$_REQUEST['id'];
	$seldel=mysql_query($sqlsel);
	$rowdel=mysql_fetch_array($seldel);
	unlink("../img/language/".$rowdel["Lg_image"]);
	$query= "delete from tbl_language where Lg_id=".$_REQUEST["id"];
	if (mysql_query($query))
		{
			header("location:language.php?msg=Record Successfully Deleted");
		}
	*/?>