<?php/* 
	include("applicationtop.php");
	$r='g4';
	$login_obj->fun_check_login() ;
	$sqlsel="select * from tbl_gallery where g_id=".$_REQUEST['id'];
	$seldel=mysql_query($sqlsel);
	$rowdel=mysql_fetch_array($seldel);
	unlink("../img/gallery/".$rowdel["g_image"]);
	$query= "delete from tbl_gallery where g_id=".$_REQUEST["id"];
	if (mysql_query($query))
		{
			header("location:gallery.php?msg=Record Successfully Deleted");
		}
	*/?>