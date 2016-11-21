<?php/* include("applicationtop.php");
    //process if request form submit
    if(isset($_POST['form-submit']) )
    {
        
        //lloking for image upload
        $imgname = '';
        if( isset($_FILES['img']['name']) && $_FILES['img']['size'] > 0 )
        {  
          $filename = stripslashes($_FILES["img"]['name']);
          $ext = explode(".",$filename);
          $extension = strtolower(end($ext));
          if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif")) 
          {
            $msg="Unknown Image extension";
            $imgname = '';
          }
          else
          {  
            $imgname = time().$filename;
            $img_obj->fun_insert_img ($_FILES['img']['tmp_name'],'','',$imgname,$extension,'images/events');
          }
        }
        
        $vals = '("", "'.$_POST['name'].'", "'.$_POST['cat'].'", "'.$imgname.'", "1")';
        //check if successful insert
        if( $q = $obj_Common->insert_query('event_meta_non_site_members', $vals) )
          $msg = "New member added!";
        else
          $msg = "Error adding member";

        @header("Location: events-meta.php?msg=$msg");
    }
*/?>
<?php/*
$page='events_meta_form';
*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="newscategory.php">Events Meta</a></li>
    <li class="active">Events meta <em><?php/* echo ucfirst($_REQUEST['rqst']).' '.ucfirst($_REQUEST['cat']);  */?></em></li>
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
          <h1><?php/* echo ucfirst($_REQUEST['rqst']).' '.ucfirst($_REQUEST['cat'] ); */?></h1
        </div>
         
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body">
          
          <form class="form-horizontal" action="<?php/* echo $_SERVER['PHP_SELF']; */?>" method="post" enctype="multipart/form-data">
            <div class="row">
                
                <div class="form-group col-md-6">
                  <label for="input01" class="col-sm-4 control-label">Name</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="name" id="input01">
                  </div>
                </div>

            </div><!-- //row -->

            <div class="row">
                
                <div class="form-group col-md-6">
                  <label for="input01" class="col-sm-4 control-label">Display Picture</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" name="img">
                  </div>
                </div>

            </div><!-- //row -->

            <div class="form-group form-footer">
              <div class="col-sm-offset-4 col-sm-8">
                
                <input type="hidden" name="cat" value="<?php/* echo $_REQUEST['cat']; */?>">
                <input type="submit" class="btn btn-lg btn-primary" name="form-submit" value="<?php/* echo ucfirst($_REQUEST['rqst']); */?>">
                <input type="reset" class="btn btn-lg btn-default" name="reset" value="Reset">
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