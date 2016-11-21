<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='ads-cat';
$r='nc1';
*/?>

<?php/*
if($_REQUEST['action'] == 'delete')
{
  $table = strip_tags($_REQUEST['rqst']);
  $qDelete = $obj_Common->delete_query("id = '".$_REQUEST['id']."'", "$table");
  $qDelete2 = $obj_Common->delete_query("main_cat_id = '".$_REQUEST['id']."'", "tbl_ads_sub_categories");
  if($qDelete && $qDelete2)
    $msg = "Catgeory deleted";
  else
    $msg = "Unable to delete category";
}
if($_REQUEST['action'] == 'act')
{
  $table = strip_tags($_REQUEST['rqst']);
  $q = $obj_Common->update_query("id = '".$_REQUEST['id']."'", "tbl_ads_categories", "is_active = '1'");
  $q2 = $obj_Common->update_query("main_cat_id = '".$_REQUEST['id']."'", "tbl_ads_sub_categories", "is_active = '1'");
  if($q && $q2)
    $msg = "Category activated";
  else
    $msg = "Unable to activate category";
}
if($_REQUEST['action'] == 'deact')
{
  $table = strip_tags($_REQUEST['rqst']);
  $q = $obj_Common->update_query("id = '".$_REQUEST['id']."'", "tbl_ads_categories", "is_active = '0'");
  $q2 = $obj_Common->update_query("id = '".$_REQUEST['id']."'", "tbl_ads_sub_categories", "is_active = '0'");
  if($q && $q2)
    $msg = "Category de-activated";
  else
    $msg = "Unable to de-activate category";
}

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
  $ct = strtotime(date('d-m-Y'));
  $resultselect = $obj_Common->get_query("id != '' ", "tbl_ads_categories", "*");
  $check=mysql_num_rows($resultselect);
  */?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li class="active">Ads Categories</li>
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
          <h1><strong>Ads Category </strong> </h1>
            <?php/* if(isset($_REQUEST['msg'])!=''){*/?>
         <div class="success">
       <?php/* echo $_REQUEST['msg'];*/?>
        </div>
        <?php/* } */?>
        <?php/* if(isset($msg)!=''){*/?>
         <div class="success">
       <?php/* echo $msg;*/?>
        </div>
        <?php/* } */?>
        </div>
      
          <div class="tile-header">
            
          </div>
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body nopadding">
          <div class="col-md-12">
          <h3>Main Categories<a href="ads-cat-add.php?rqst=main" class="btn btn-info pull-right">Add New</a></h3>
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
                <th>Name</th>
                
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
                $catName = unserialize($result->cat_name);
              */?>
              <tr class="<?php/* echo $cl;*/?>">
                <td><?php/* echo $sno;*/?></td>
                <td><?php/* echo $catName[$_SESSION['langid']-1];*/?></td>
                <td> <a href="ads-cat-edit.php?id=<?php/* echo $result->id;*/?>&rqst=main" target="_parent" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil">Edit</i></a>
                <?php/* if( $result->is_active == '1' ) {*/?>
                <a href="ads-cat.php?id=<?php/* echo $result->id;*/?>&rqst=main&action=deact" target="_parent" data-toggle="tooltip" title="Deactivate" class="btn btn-mini btn-warning"><i class="icon-pencil">Deactivate</i></a>
                <?php/* }else{ */?>
                  <a href="ads-cat.php?id=<?php/* echo $result->id;*/?>&rqst=main&action=act" target="_parent" data-toggle="tooltip" title="Activate" class="btn btn-mini btn-success"><i class="icon-pencil">Activate</i></a>
                <?php/* } */?>
                <a href="ads-cat.php?id=<?php/* echo $result->id;*/?>&rqst=tbl_ads_categories&action=delete" onClick="return confirm('Are you sure to delete this detail.');"data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove">Delete</i></a></td>
              </tr>
             <?php/* } */?>
              <?php/* //if($pageno>1){  $login_obj->paging_no("ads-cat.php",$pageno,"5");} */?> 
            </tbody>
            </table>
          <?php/* } */?>
          </div><!-- //col-md-6 -->
          
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