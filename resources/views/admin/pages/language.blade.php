<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='language';
$r='l1';
*/?>

<?php/*
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
	$resultarray = $login_obj->pagno(" tbl_language where  Lg_id!='' ".$con.$order,$pageSize);
	$pageno = $resultarray[0];
	$resultselect = $resultarray[1];
	$check=mysql_num_rows($resultselect);
	*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li class="active">Language</li>
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
          <h1><strong>Language </strong> </h1>
            <?php/* if($_REQUEST['msg']!=''){*/?>
         <div class="success">
       <?php/* echo $_REQUEST['msg'];*/?>
        </div>
        <?php/* } */?>
        </div>
      
          <div class="tile-header">
        <a href="language_add.php">Add New</a>
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
                <th>S No.</th>
                <th>Language Name</th>
                 <th>Status</th>
                 <th>Image</th>
                <th>Action</th>
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
                <td><?php/* echo $sno;*/?></td>
                <td><?php/* echo $result->Lg_title;*/?></td>
                 <td> <a href="language_status.php?id=<?php/* echo $result->Lg_id;*/?>" target="_parent" data-toggle="tooltip" title="Edit" ><?php/* if($result->Lg_status=='1'){echo "Active";}else{ echo "De-active";}*/?></a></td>
                    <td><img src="../img/language/<?php/* echo $result->Lg_image;*/?>"></td>
                <td> <a href="language_edit.php?id=<?php/* echo $result->Lg_id;*/?>" target="_parent" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil">Edit</i></a>
                <a href="language_delete.php?id=<?php/* echo $result->Lg_id;*/?>" onClick="return confirm('Are you sure to delete this detail.');"data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove">Delete</i></a></td>
              </tr>
             <?php/* } */?>
             <?php/* if($pageno>1){  $login_obj->paging_no("language.php",$pageno,"5");} */?> 
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
  </body>
</html>