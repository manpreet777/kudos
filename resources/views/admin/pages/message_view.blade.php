<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='message';
*/?>

<?php/*
$r = "m3";
if($_REQUEST['uid']!='')
	{
		mysql_query("update tblmessage set admin_read='1' where  Message_id='".$_REQUEST["id"]."'");
	}
if((isset($_POST["sendbut"])) && ($_POST["act"] == "signup"))
{
	@extract($_POST);
		if(mysql_query("insert into tblmessage set M_sender_id='Admin',M_receiver_id='".$_REQUEST['uid']."',dos='".time()."',M_Subject='".addslashes($subject)."',Message='".addslashes($message)."'"))
		{
			header("location:message_sent.php");
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
              <li class="active">View</li>
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
                   
                     <?php/* if($msg!=''){*/?>
                   <div class="danger">
                 <?php/* echo $msg;*/?>
                  </div>
                  <?php/* } */?>
                  </div>
                  
                  <!-- /tile header -->
 <div class="tile-header">
                  <a href="<?php/* echo  $_SERVER['HTTP_REFERER'];*/?>" class="pull-right"><< Back</a>
                  </div>
                  <!-- tile body -->
                  <div class="tile-body">
                    <?php/* 
					$rowlg = $obj_Common->get_field_name("Message_id='".$_REQUEST['id']."' ","tblmessage");
					*/?>
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
					<div class="form-group col-md-12" style="border-bottom: solid 2px #ddd;">
						<?php/* echo  $rowlg["M_Subject"]*/?>
					</div>
					  <div class="clearfix"></div>
					<div class=" form-group col-md-6">
					<?php/* if($_REQUEST["uid"] != ''){*/?>
						<?php/*  $username=$obj_Common->get_field_name("Uid='".$rowlg['M_sender_id']."'",'tbl_user',"u_username");
							 echo $username['u_username'];*/?>
					<?php/* } else {*/?>
						<?php/*  $username=$obj_Common->get_field_name("Uid='".$rowlg['M_receiver_id']."'",'tbl_user',"u_username");
							 echo $username['u_username'];*/?>
					<?php/* } */?>
					</div>
					<div class="form-group col-md-6 text-right">
						<?php/* if($rowlg['dos']!=0){echo date('M d, Y',$rowlg['dos']);}*/?>
					</div>
					  <div class="clearfix"></div>
					<div class=" form-group col-md-12" style="border-bottom: solid 2px #ddd;">
						 <?php/* echo  $rowlg["Message"]*/?>
					</div>
					<?php/* if($_REQUEST["uid"] != ''){*/?>
                      <div class="row">
                     
                       <div class="clearfix"></div>
                       <div class="form-group col-md-6">
                        
                        <div class="col-sm-8">
                        
                        	<input type="hidden" name="subject" value="Re-<?php/* echo  $rowlg["M_Subject"]*/?>" class="frmtxt"/>
                        </div>
                      </div>
                       <div class="clearfix"></div>
                        <div class="form-group col-md-12">
                        <label for="input01" class="col-md-12">Reply</label>
                        <div class="col-md-12">
                         <textarea class="form-control" name="message"></textarea>
                        </div>
                      </div>
					</div>
                    					
                      <div class="form-group form-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                          <input type="hidden" class="btn btn-primary" name="act" value="signup">
                          <input type="submit" class="btn btn-primary" name="sendbut" value="Reply">
                          <input type="submit" class="btn btn-default" name="reset" value="Reset">
                        </div>
                      </div>
					<?php/* } */?>
                    </form>
                      <div class="clearfix"></div>
                  </div>
                  <!-- /tile body -->
                <div class="clearfix"></div>

                </section>
                <!-- /tile -->

                     <div class="clearfix"></div>

              </div>
              <!-- /col 6 -->

                    <div class="clearfix"></div>

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