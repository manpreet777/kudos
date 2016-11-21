<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='blog-cat-edit';
$r='nc3';
*/?>

<?php/*
if ( isset($_POST["sendbut"]) )
{
    $q = $obj_Common->update_query("id = ".$_REQUEST['id']."", "".$_REQUEST['table']."", "name='".serialize($_REQUEST['cat_name'])."'");
  if($q)
    @header('Location: blog-cat-edit.php?msg=Category Updated&id='.$_REQUEST["id"].'');
  else
    $msg = "Something went wrong updating category";
}
if( isset($_POST['add-sub-cat-btn']) )
{
    $q = $obj_Common->insert_query("blog_sub_category", "(null, '".$_POST['main-cat-id']."', '".serialize($_POST['subcat_name'])."', '1')");
    if($q)
      @header('Location: blog-cat-edit.php?id='.$_POST["main-cat-id"].'&msg=Sub-Category added');
    else
      @header('Location: blog-cat.php?id='.$_POST["main-cat-id"].'&msg=Something went wrong adding Sub-Category');
}
if(isset($_POST['editCatName']) && $_POST['editCatName'] == 'Update')
{
    $q = $obj_Common->update_query("id = '".$_REQUEST['subCatId']."'","blog_sub_category", "name = '".serialize($_POST['new_name'])."' ");
    if($q)
      @header('Location: blog-cat-edit.php?id='.$_REQUEST["mainCatId"].'&msg=Category updated');
    else
      @header('Location: blog-cat-edit.php?id='.$_REQUEST["mainCatId"].'&msg=Something went wrong updating category');
}
if( isset($_REQUEST['action']) && $_REQUEST['action'] == 'delete')
{
  $qDelete2 = $obj_Common->delete_query("id = '".$_REQUEST['id']."'", "blog_sub_category");
  if($qDelete2)
    $msg = "Catgeory deleted";
  else
    $msg = "Unable to delete category";
  @header('Location: blog-cat-edit.php?id='.$_REQUEST["mainCatId"].'&msg='.$msg.'');
}
if( isset($_REQUEST['action']) && $_REQUEST['action'] == 'deact')
{
  $qDelete2 = $obj_Common->update_query("id = '".$_REQUEST['id']."'", "blog_sub_category", "is_active = '0'");
  if($qDelete2)
    $msg = "Catgeory de-activated";
  else
    $msg = "Unable to de-activate category";
  @header('Location: blog-cat-edit.php?id='.$_REQUEST["mainCatId"].'&msg='.$msg.'');
}
if( isset($_REQUEST['action']) && $_REQUEST['action'] == 'act')
{
  $qDelete2 = $obj_Common->update_query("id = '".$_REQUEST['id']."'", "blog_sub_category", "is_active = '1'");
  if($qDelete2)
    $msg = "Catgeory activated";
  else
    $msg = "Unable to activate category";
  @header('Location: blog-cat-edit.php?id='.$_REQUEST["mainCatId"].'&msg='.$msg.'');
}
*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard.php</a></li>
    <li><a href="blog-cat.php">Blog Category</a></li>
    <li class="active">Blog Main Category Update</li>
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
          <h1> Update Blog Main Category</h1>
            <?php/* if(isset($msg)!=''){*/?>
            <div class="danger">
              <?php/* echo $msg;*/?>
            </div>
            <?php/* } */?>
            <?php/* if(isset($_REQUEST['msg'])!=''){*/?>
            <div class="danger">
              <?php/* echo $_REQUEST['msg'];*/?>
            </div>
            <?php/* } */?>
        </div>
        
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body">
          <?php/* 
            $rowlg = $obj_Common->get_field_name("id='".$_REQUEST['id']."' ","blog_category");
         */?>
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="row">
              <?php/*
                $langq = "select * from tbl_language where  Lg_id!='' order by Lg_title";
                $resultlang = mysql_query($langq);
                while($rowlang = mysql_fetch_object($resultlang))
                {
                  $name = unserialize($rowlg['name']);
              */?>
              <div class="form-group col-md-6">
                <label for="input01" class="col-sm-4 control-label"><?php/* echo ucfirst($rowlang->Lg_title); */?></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" value="<?php/* echo $name[$rowlang->Lg_id-1];*/?>" name="cat_name[]" id="input01">
                </div>
              </div>
              <?php/* } */?>
            </div>
          

            <div class="form-group form-footer">
              <div class="col-sm-offset-4 col-sm-8">
                <input type="hidden" name="cat_id" value="<?php/* echo $_REQUEST['id']; */?>">
                <input type="hidden" class="btn btn-primary" name="table" value="blog_category">
                <input type="submit" class="btn btn-primary" name="sendbut" value="Save">
                <input type="button" class="btn btn-danger" name="reset" value="Reset">
              </div>
            </div>

          </form>

          <h2>Category: <?php/* echo $name[$_SESSION['langid']-1];*/?></h2>
        

          <div class="col-md-8">
            
            <h3>Sub Categories</h3>
            <?php/*
              $qSubCat = $obj_Common->get_query("main_cat_id = '".$_REQUEST['id']."'", "blog_sub_category", "*");
              if(mysql_num_rows($qSubCat)<=0)
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
                while($row = mysql_fetch_object($qSubCat))
                {
                  $sno++;
                  if($sno%2==0)
                  $cl='success';
                  else
                  $cl='warning';
                  $subCatName = unserialize($row->name);
                */?>
                
                <tr class="<?php/* echo $cl;*/?>">
                  <td><?php/* echo $sno;*/?></td>
                  <td><form class="form" action="<?php/* echo $_SERVER['PHP_SELF']; */?>" method="POST">
                    <input type="hidden" name="subCatId" value="<?php/* echo $row->id; */?>">
                    <input type="hidden" class="btn btn-primary" name="mainCatId" value="<?php/* echo $_REQUEST['id']; */?>">

                    <?php/*
                      $langq = "select * from tbl_language where  Lg_id!='' order by Lg_title";
                      $name = unserialize($row->name);
                      $resultlang = mysql_query($langq);
                      while($rowlang = mysql_fetch_object($resultlang))
                      {
                    */?>
                    <div class="form-group row">
                      <label class="form-control-label"><?php/* echo $rowlang->Lg_title; */?></label>
                      <input type="text" class="form-control" value="<?php/* echo $name[$rowlang->Lg_id-1]; */?>" required name="new_name[]" placeholder="Enter new name in <?php/* echo $rowlang->Lg_title; */?>" />
                    </div>
                    <?php/* } */?>
                     
                  </td>
                  <td>
                      <input type="submit" name="editCatName" class="btn btn-mini btn-success" value="Update"></a>
                      <?php/*
                        if($row->is_active == '1'){
                      */?>
                        <a href="blog-cat-edit.php?id=<?php/* echo $row->id;*/?>&action=deact&mainCatId=<?php/* echo $row->main_cat_id */?>" onClick="return confirm('Are you sure to de-activate this category?');"data-toggle="tooltip" title="De-activate" class="btn btn-mini btn-danger">De-activate</a>
                      <?php/* }else{ */?>
                        <a href="blog-cat-edit.php?id=<?php/* echo $row->id;*/?>&action=act&mainCatId=<?php/* echo $row->main_cat_id */?>" onClick="return confirm('Are you sure to activate this category?');"data-toggle="tooltip" title="Activate" class="btn btn-mini btn-success">Activate</a>
                      <?php/* } */?>
                      <a href="blog-cat-edit.php?id=<?php/* echo $row->id;*/?>&action=delete&mainCatId=<?php/* echo $row->main_cat_id */?>" onClick="return confirm('Are you sure to delete this category?');"data-toggle="tooltip" title="Delete" class="btn btn-mini btn-danger"><i class="icon-remove">Delete</i></a>
                  </form>
                  </td>
                </tr>
               <?php/* } */?>
                <?php/* //if(isset($pageno)>1){  $login_obj->paging_no("blog_cat.php",$pageno,"5");} */?> 
              </tbody>
              </table>
            <?php/* } */?>
          
          </div><!-- //col-md-6 -->
          <div class="col-md-4">

              <h3>Add Sub Categories</h3>  
              <form action="<?php/* echo $_SERVER['PHP_SELF']; */?>" method="POST">
                <?php/*
                  $langq = "select * from tbl_language where  Lg_id!='' order by Lg_title";
                  $resultlang = mysql_query($langq);
                  while($rowlang = mysql_fetch_object($resultlang))
                  {
                */?>
                <div class="form-group">
                    <label><?php/* echo ucfirst($rowlang->Lg_title); */?></label>
                    <input type="text" placeholder="Add a new sub-category in <?php/* echo ucfirst($rowlang->Lg_title); */?>" class="form-control" name="subcat_name[]" maxlength="25" />
                </div>
                <?php/* } */?>
                <div class="form-group">
                    
                      <input type="submit" name="add-sub-cat-btn" value="Add New Sub-Category" class="btn btn-inverse btn-warning">
                      <input type="hidden" name="main-cat-id" value="<?php/* echo $_REQUEST['id']; */?>">
                </div><!-- ///col-md-4 -->
                
              </form>

          </div>

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