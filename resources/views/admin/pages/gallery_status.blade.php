<?php/* 
include("applicationtop.php") ;
$r='g3';
$login_obj->fun_check_login() ;
$query = "select * from tbl_gallery where g_id='".$_REQUEST["id"]."'";
$result=mysql_query($query);
if($row=mysql_fetch_array($result))
{
		if($row["g_status"]=='1')
		{
		 $updatequery ="update tbl_gallery set g_status='0' where g_id=".$_REQUEST["id"];
		}
		else
		{
			if($row["g_status"]=='0')
			{
				$updatequery ="update   tbl_gallery set g_status ='1' where g_id=".$_REQUEST["id"];
			}
		}
		if(mysql_query($updatequery))
		{
		header("location:gallery.php?msg=Sucessfully Updated");
		}
}
*/?>