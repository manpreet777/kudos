<?php/* include("applicationtop.php") ;
$page='add-site-video';
if( isset($_REQUEST['rqst']) )
{
  $url = $_REQUEST['url'];
  if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  }
else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
    $values = $id[1];
  } 
  else {   
      $values = "";
  }
  $title = serialize($_REQUEST['title']);
  $video_caption = serialize($_REQUEST['video_caption']);

  if($_REQUEST['rqst'] == 'add')
  {
      $insert = $obj_Common->insert_query("channel_videos","('','".$title."','".$video_caption."','".$values."','1')");
      if($insert == 1)
        $msg = "Video added successfully!";
      else
        $msg = "Unable to add video. Please try again later!";
  }
  if($_REQUEST['rqst'] == 'edit')
  {
    $insert = $obj_Common->update_query("id='".$_REQUEST['vid-id']."'", "channel_videos", "title = '".$title."', description = '".$video_caption."', url='".$values."'");//channel_videos","('','".$title."','".$video_caption."','".$values."','1')");
    if($insert == 1)
        $msg = "Video updated successfully!";
      else
        $msg = "Unable to update video. Please try again later!";
  } 
  @header("Location: site-videos.php?msg=$msg");
}

  $results = array();
  $resultarray = $obj_Common->get_query("status != 0 ","channel_videos","*",null);
	if(mysql_num_rows($resultarray) < 1)
      $msg = "No videos to show!";  
	else
  {
    while($row = mysql_fetch_array($resultarray))
      array_push($results, $row); 
  }
*/?>
<style type="text/css">
  .youtube-link{
    position: relative;
  }
  .link-notify{
    position: absolute;
    right: 10%;
    bottom: 24%;
    font-size: 24px;
  }
  .fa-check{
    color: green;
  }
  .fa-times{
    color: red;
  }
</style>
<?php/* include("header.php");*/?>

          <!-- breadcrumbs -->
          <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
              <li class="active"><a href="site-videos.php">Site videos</a></li>
              <li class="active"><?php/* if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit') echo "Edit video"; else echo "Add new video";*/?></li>
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
                    <h1><strong><?php/* if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit') echo "Edit video"; else echo "Add new video";*/?></strong> </h1>
                      
                    <div class="success">
                      <?php/* echo (isset($msg) ? $msg : "");*/?>
                      <?php/* echo (isset($_REQUEST['msg']) ? $_REQUEST['msg'] : "");*/?>
                    </div>
                      
                  </div>
                  <!-- /tile header -->
                  <?php/*
                  */?>
                  <!-- tile body -->
                  <div class="tile-body nopadding">
                    <!-- tile body -->
                  <div class="tile-body">
                   
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                      <div class="row">
                      <?php/*
                        $sqllg1="select * from tbl_language order by Lg_title";
                        $resutllg=mysql_query($sqllg1);
                        $numrow=mysql_num_rows($resutllg);
                        
                        while($row = mysql_fetch_array($resutllg))
                          $langNames[] = $row['Lg_title'];//$db_obj->fetch_array($resutllg);
                        //fetching custom html content by admin
                              $q2 = "SELECT * FROM channel_videos WHERE id = '".$_REQUEST['id']."' AND status = '1'";
                              $r2 = mysql_query($q2);
                              $rs2 = mysql_fetch_assoc($r2);
                              $title_lang = unserialize($rs2['title']);
                              $content_lang = unserialize($rs2['description']);
                              for($i=0; $i<count($langNames); $i++)
                        {
                      */?>                        
                      <fieldset>
                          <h2 style="margin-left: 10px;"><?php/* echo $langNames[$i];*/?></h2>
                        <div class="form-group col-sm-12">
                          <label for="input01" class="col-sm-3 control-label">Video Title</label>
                          <div class="col-sm-8">
                            <input type="text" required name="title[]"  class="form-control" <?php/* if(isset($title_lang[$i])) echo 'value="'.$title_lang[$i].'"'; */?>/>
                          </div>
                        </div>
                        <div style="clear: both"></div>
                        <div class="form-group col-sm-12">
                          
                          <label for="input01" class="col-sm-3 control-label">Video Caption</label>
                          <div class="col-sm-8">
                            <textarea name="video_caption[]" class="form-control col-sm-8" rows="3"><?php/* if(isset($content_lang[$i])) echo $content_lang[$i]; */?></textarea>
                          </div>
                        </div>
                      </fieldset>  
                      <?php/* } */?>
                      <!-- "clearfix"> -->
                        <div class="clearfix"></div>
                      
                        <div class="form-group col-md-12">
                          <label for="input01" class="col-sm-3 control-label">Youtube Video url</label>
                            <div class="col-sm-8">
                              <input type="text" required name="url" placeholder="https://youtu.be/7Mv65bRZJNE" <?php/* if(isset($rs2['url'])) echo 'value="https://youtu.be/'.$rs2['url'].'"'; */?>  class="form-control youtube-link"><span class="link-notify"><i class="fa fa-check hidden" aria-hidden="true"></i><i class="fa fa-times hidden" aria-hidden="true"></i></span>
                            </div>
                        </div><!-- //form-group -->

                      </div> <!-- ///"clearfix"> -->         
                      <div class="form-group form-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                          <input type="submit" class="btn btn-primary" value="<?php/*
                            if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit') echo "Edit"; else echo "Add"; */?>" >
                          <input type="hidden" name="rqst" value="<?php/*
                            if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit') echo "edit"; else echo "add"; */?>">
                          <input type="hidden" name="vid-id" value="<?php/* echo $_REQUEST['id']; */?>">
                        </div>
                      </div>

                    </form>

                  </div>
                  <!-- /tile body -->
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

  <script type="text/javascript">
    
    $('.youtube-link').on("blur", function(){
        validateYouTubeUrl();
    });
    function validateYouTubeUrl()
    {
        $('fa-times').addClass('hidden');
        $('.fa-check').addClass('hidden');
        $valid = 0;
        var url = $('.youtube-link').val();
            if (url != undefined || url != '') {
                var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=|\?v=)([^#\&\?]*).*/;
                var match = url.match(regExp);
                if (match && match[2].length == 11) {
                    // Do anything for being valid
                    console.log("match ="+ match[2]);
                    // if need to change the url to embed url then use below line
                    $('#ytplayerSide').attr('src', 'https://www.youtube.com/embed/' + match[2] + '?autoplay=0');
                    $valid = 1;
                }
                else {
                  console.log("Invalid link format");
                    // Do anything for not being valid
                    
                    $valid = 0;
                }
            }
        if($valid == 1)
        {
          $('.fa-times').addClass('hidden');
          $('.fa-check').removeClass('hidden');
        }
        else
        {
          $('.fa-times').removeClass('hidden');
          $('.fa-check').addClass('hidden');
        }
    }
  </script>
  </body>
</html>