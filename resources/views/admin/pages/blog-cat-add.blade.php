<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='newscategory';
$r='nc2';
*/?>

<?php/*
if( isset($_POST["sendbut"]) )
{
	//$msg = $newscat_obj->fun_newscat_Add();
  $catToAdd = serialize($_REQUEST['cat_name']);
  $q = $obj_Common->insert_query("".$_REQUEST['table']."", "(null, '".$catToAdd."', '1')");
  if($q)
    @header('Location: blog-cat.php?msg="Catgeory Added"');
  else
    $msg = "Something went wrong adding category";
}
*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="blog-cat.php">Blog categories</a></li>
    <li class="active">Main Category Add</li>
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
          <h1> Add New Main Category</h1>
           <?php/* if(isset($msg)!=''){*/?>
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
              

                <!--<label for="input01" class="col-sm-4 control-label">Category name:</label>
                <div class="col-sm-8">
                  <input type="text[]" class="form-control" value="<?php/* //echo (isset($_POST['cat_name']) ? $_POST['cat_name'] : '');*/?>" name="cat_name" id="input01">
                </div>-->

              <?php/*
                $langq = "select * from tbl_language where  Lg_id!='' order by Lg_title";
                $resultlang = mysql_query($langq);
                while($rowlang = mysql_fetch_object($resultlang))
                {
              */?>
                <div class="form-group col-md-6">
                  <label for="input01" class="col-sm-4 control-label"><?php/* echo ucfirst($rowlang->Lg_title); */?>:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php/* echo (isset($_POST['cat_name']) ? $_POST['cat_name'] : '');*/?>" name="cat_name[]" id="input01" required>
                  </div>
                </div>  
              <?php/* } */?>
              
            </div>                        

            <div class="form-group form-footer">
              <div class="col-sm-offset-4 col-sm-8">
                <input type="hidden" name="table" value="blog_category">
                <input type="submit" class="btn btn-primary" name="sendbut" value="Add">
                <input type="reset" class="btn btn-default" name="reset" value="Reset">
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