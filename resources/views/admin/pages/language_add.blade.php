<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='language';
$r='l2';
*/?>

<?php/*
if((isset($_POST["sendbut"])) && ($_POST["act"] == "signup"))
{
	$msg = $language_obj->fun_language_Add();
}
*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="language.php">Language</a></li>
    <li class="active">Language Add</li>
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
          <h1> Add New</h1>
          
        </div>
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body">
          
          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="form-group col-md-6">
              <label for="input01" class="col-sm-4 control-label">Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="txtlname" id="input01">
              </div>
            </div>

           <div class="form-group col-md-6">
              <label for="input02" class="col-sm-4 control-label">Image</label>
              <div class="col-sm-8">
                <input type="file"  name="image" id="input02">
              </div>
            </div>
</div>

            <div class="form-group form-footer">
              <div class="col-sm-offset-4 col-sm-8">
                <input type="hidden" class="btn btn-primary" name="act" value="signup">
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