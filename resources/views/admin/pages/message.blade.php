<?php/* require_once("applicationtop.php") ; */?>

<?php/*
$page='message';
$r = "m1"; 
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
	*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li class="active">Message</li>
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
          <h1><strong>Inbox</strong> </h1>
           <?php/* if($_REQUEST['msg']!=''){*/?>
         <div class="success">
       <?php/* echo $_REQUEST['msg'];*/?>
        </div>
        <?php/* } */?>
        </div>
       
         <div class="tile-header">
        <a href="message_add.php">Compose</a>&nbsp;&nbsp;
         <a href="message_sent.php">Sent Message</a>
        </div>
         
        <!-- /tile header -->
<script type="text/javascript" language="javascript">
$(document).ready(function()
{

var $container = $("#data_message");
//$container.load("messenger_data.php");
var refreshId = setInterval(function()
{
  $container.load('message_data.php');

}, 2000*10);

});
</script>
        <!-- tile body -->
        <div class="tile-body nopadding" id="data_message">
         <?php/* require_once("message_data.php") ; */?>
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