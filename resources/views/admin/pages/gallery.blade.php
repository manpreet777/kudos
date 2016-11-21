<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='gallery';
$r='g1';
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
	$resultarray = $login_obj->pagno(" tbl_gallery where  g_id!='' ".$con.$order,$pageSize);
	$pageno = $resultarray[0];
	$resultselect = $resultarray[1];
	$check=mysql_num_rows($resultselect);
	*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li class="active">Gallery</li>
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
          <h1><strong>Gallery </strong> </h1>
            <?php/* if( isset($_REQUEST['msg']) && $_REQUEST['msg']!=''){*/?>
         <div class="success">
       <?php/* echo $_REQUEST['msg'];*/?>
        </div>
        <?php/* } */?>
        </div>
      
          <div class="tile-header">
        <a href="gallery_add.php">Add New</a>
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
                <!--<th>Title</th>-->
                <th>Url</th>
                 <th>Status</th>
                 <th>Background Image of slider</th>
                  <th>Order</th>
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
                <!--<td><?php/* //echo $result->g_title;*/?></td>-->
                 <td><?php/* echo $result->g_url;*/?></td>
                 <td> <a href="gallery_status.php?id=<?php/* echo $result->g_id;*/?>" target="_parent" data-toggle="tooltip" title="Edit" ><?php/* if($result->g_status=='1'){echo "Active";}else{ echo "De-active";}*/?></a></td>
                    <td><img src="<?php/* echo '../img/gallery/'.$result->g_bg_image; */?>" style="height:100px; width:100px;"></td>
                     <td><?php/* echo $result->g_order;*/?></td>
                <td> <a href="gallery_edit.php?id=<?php/* echo $result->g_id;*/?>" target="_parent" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil">Edit</i></a>
                <a href="gallery_delete.php?id=<?php/* echo $result->g_id;*/?>" onClick="return confirm('Are you sure to delete this detail.');"data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove">Delete</i></a></td>
              </tr>
             <?php/* } */?>
             <?php/* if($pageno>1){  $login_obj->paging_no("gallery.php",$pageno,"5");} */?> 
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