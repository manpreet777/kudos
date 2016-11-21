<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='message';
*/?>
<?php/*
$r = "m2";
if((isset($_POST["sendbut"])) && ($_POST["act"] == "signup"))
{
	@extract($_POST);
	if($_POST["recid"] != '0')
	{
		$queryse1=$obj_Common->get_query("Uid='".$_POST["recid"]."'",'tbl_user','u_username,Uid,u_emailidmain','order by u_username Asc');
		if($row1=mysql_fetch_object($queryse1))
		{
		$name1=$row1->u_username;
		$email1=$row1->u_emailidmain;
		$mquery = "insert into tblmessage set M_sender_id='Admin',M_receiver_id='".$_POST["recid"]."',dos='".time()."',M_Subject='".addslashes($subject)."',Message='".addslashes($message)."'";
		if(mysql_query($mquery))
		{
			$email_obj->fun_notification($email1,$name1);
			header("location:message_sent.php?msg=Message Sent");
		}
		}
	}
	elseif($_POST["recid"] == '0')
	{
		$usercount = 0;
		$queryse=$obj_Common->get_query('Uid!=""','tbl_user','u_username,Uid,u_emailidmain','order by u_username Asc');
		while($row=mysql_fetch_object($queryse))
		{
			$name=$row->u_username;
			$email=$row->u_emailidmain;
			$mquery = "insert into tblmessage set M_sender_id='Admin',M_receiver_id='".$row->Uid."',dos='".time()."',M_Subject='".addslashes($subject)."',Message='".addslashes($message)."'";
			if(mysql_query($mquery))
			{
				$email_obj->fun_notification($email,$name);
				$usercount++;
			}
		}
		header("location:message_sent.php?msg=".$usercount." Messages Sent");
	}
}
*/?>
<?php/* include("header.php");*/?>
<script src="../tiny_mce/tiny_mce.js" type="text/javascript"></script>
    <script src="../js/tinymice.js" type="text/javascript"></script>
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard.php</a></li>
    <li><a href="message.php">Message</a></li>
    <li class="active">Compose</li>
  </ol>
</div>
<!-- /breadcrumbs -->

<!-- content main container -->
<div class="main">

  <!-- row -->
  <div class="row">

    <!-- col 6 -->
    <div class="col-md-12">                
      <!-- tile -->
      <section class="tile">

        <!-- tile header -->
        <div class="tile-header">
          <h1> Compose New Message</h1>
           <?php/* if($msg!=''){*/?>
         <div class="danger">
       <?php/* echo $msg;*/?>
        </div>
        <?php/* } */?>
        </div>
        
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body">
         
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="form-group col-md-6">
              <label for="input01" class="col-sm-4 control-label">To</label>
              <div class="col-sm-8">
               <select name="recid" required="required" class="form-control">
             <option value="">Select one</option>
   <option value="0">All</option>
              <?php/*
	$queryse=$obj_Common->get_query('Uid!=""','tbl_user','u_username,Uid','order by u_username Asc');
	while($row=mysql_fetch_object($queryse))
	{
		*/?>
               <option <?php/* if( isset($_POST['recid']) && $row->Uid==$_POST['recid']){echo "selected='selected'";}*/?> value="<?php/* if(isset($row->Uid)) echo $row->Uid;*/?>"><?php/* if(isset($row->u_username)) echo $row->u_username;*/?></option>
               <?php/* } */?>
              </select>
            
              </div>
            </div>
             <div class="clearfix"></div>
             <div class="form-group col-md-6">
              <label for="input01" class="col-sm-4 control-label">Subject</label>
              <div class="col-sm-8">
              <?php/* if(isset($rowlg["M_Subject"])) echo  $rowlg["M_Subject"]; */?>
              	<input type="text" name="subject"  class="form-control"/>
              </div>
            </div>
             <div class="clearfix"></div>
            
	  <div class="form-group col-md-6">
              <label for="input01" class="col-sm-4 control-label">Message</label>
              <div class="col-sm-8">
               <textarea class="form-control" name="message"></textarea>
              </div>
            </div>
</div>
          					
            <div class="form-group form-footer">
              <div class="col-sm-offset-4 col-sm-8">
                <input type="hidden" class="btn btn-primary" name="act" value="signup">
                <input type="submit" class="btn btn-primary" name="sendbut" value="Send">
                <input type="submit" class="btn btn-default" name="reset" value="Reset">
              </div>
            </div>

          </form>

        </div>
        <!-- /tile body -->                

      </section>
      <!-- /tile -->

    </div>
    <!-- /col 6 -->

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