<?php/* include("applicationtop.php") ; */?>
<?php/*
$r = "m1";
$page='message';
if($_REQUEST["s"] == "false")
	{
		$_SESSION["con1"] = ""; 
		$_SESSION["pn"] = "";
	}
	else
	{
		$con = $_SESSION["con1"];
	}
	if($_REQUEST["curpage"] !='')
	{
		$_SESSION["pn"] = $_REQUEST["curpage"];
	}
	else
	{
		if($_SESSION["pn"] !='')
		{
			$_REQUEST["curpage"] = $_SESSION["pn"];
		}
	}

	$pageSize =25;
	$order = ' order by dos DESC';
	
	$resultarray = $login_obj->pagno(" tblmessage where  M_sender_id='Admin' ".$order,$pageSize);
	$pageno = $resultarray[0];
	$resultselect = $resultarray[1];
	$check=mysql_num_rows($resultselect);
	
	*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li><a href="message.php">Message</a></li>
    <li class="active">Sent Item</li>

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
          <h1><strong>Sent Message</strong> </h1>
           <?php/* if($_REQUEST['msg']!=''){*/?>
         <div class="success">
       <?php/* echo $_REQUEST['msg'];*/?>
        </div>
        <?php/* } */?>
        </div>
       
         <div class="tile-header">
        <a href="message_add.php">Compose</a>&nbsp;&nbsp;
         <a href="message.php">Inbox</a>
        </div>
       
        
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body nopadding">
          <?php/*
if($check<=0)
{
echo 'No Record Found';
}
else
{

*/?>
          <table class="table">
            <thead>
              <tr>

                 <th class="col-md-2 text-left">To</th>
                 <th>Subject</th>
	     <th class="col-md-2 text-right">Date</th>
                  
              </tr>
            </thead>
            <tbody>
	<?php/*
	$sno=0;
              while($result = $db_obj->fetch_object($resultselect))
              {
		$sno++;
		if($sno%2==0)
		$cl='success';
		else
		$cl='warning';
              */?>
              <tr class="<?php/* echo $cl;*/?>">
                
                 
                   <td><?php/*
		 $username=$obj_Common->get_field_name("Uid='".$result->M_receiver_id."'",'tbl_user',"u_username");
		 echo $username['u_username'];*/?></td>
                 <td><a href="message_view.php?id=<?php/* echo $result->Message_id;*/?>" target="_parent" > <?php/* echo $result->M_Subject;*/?></a></td>
               
	   <td class="text-right"><?php/* echo date('d-M-Y',$result->dos);*/?></td>
               
              </tr>
             <?php/* } */?>
             <?php/* if($pageno>1){  $login_obj->paging_no("message.php",$pageno,"5");} */?>
            </tbody>
          </table>
<?php/* } */?>
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