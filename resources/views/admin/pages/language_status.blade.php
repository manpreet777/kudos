<?php/* 
include("applicationtop.php") ;
$r='l3';
$login_obj->fun_check_login() ; 
$query = "select * from tbl_language where Lg_id='".$_REQUEST["id"]."'";
$result=mysql_query($query);
if($row=mysql_fetch_array($result))
{
		if($row["Lg_status"]=='1')
		{
		 $updatequery ="update tbl_language set Lg_status='0' where Lg_id=".$_REQUEST["id"];
		}
		else
		{
			if($row["Lg_status"]=='0')
			{
				$updatequery ="update   tbl_language set Lg_status ='1' where Lg_id=".$_REQUEST["id"];
			}
		}
		if(mysql_query($updatequery))
		{
		header("location:language.php?msg=Sucessfully Updated");
		}
}
*/?>