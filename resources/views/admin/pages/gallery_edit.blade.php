<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='gallery';
$r='g3';
*/?>

<?php/*
if((isset($_POST["sendbut"])) && ($_POST["act"] == "signup"))
{
	$msg = $gallery_obj->fun_update_gallery();
}
*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li class="active">Gallery Update</li>
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
          <h1> Update</h1>
           <?php/* if($msg!=''){*/?>
         <div class="red">
       <?php/* echo $msg;*/?>
        </div>
        <?php/* } */?>
        </div>
        <!-- /tile header -->
      </section>
      <?php/* 
           $rowlg = $obj_Common->get_field_name("g_id='".$_REQUEST['id']."' ","tbl_gallery");
           $small_obj_arr[] = unserialize($rowlg['g_small_images']);
      */?>

    </div>
    <!-- /col 12 -->
    <div class="col-md-12">

      <section class="tile">

          <div class="tile-header">
            <h1><strong>Vertical</strong> Form</h1>
            <div class="controls">
              <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
              <a href="#" class="remove"><i class="fa fa-times"></i></a>
            </div>
          </div>

          <div class="tile-body">
            <form method="post" enctype="multipart/form-data" action="">
            <div class="row">
         
              <div class="form-group col-sm-3">
                <label for="exampleInputPassword1">Slide Url</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="eg. www.google.com" value="<?php/* echo $rowlg['g_url']; */?>" name="g_url">
              </div>
              <div class="form-group col-sm-4">
                <label for="exampleInputCity">Background Image</label>
                <img class="img-responsive"src="<?php/* echo '../img/gallery/'.$rowlg['g_bg_image']; */?>" />
                Change Image<input type="file" class="form-control" name="g_sm_new_img_0" id="input02">
                <input type="hidden" name="g_sm_img_0" value="<?php/* echo $rowlg["g_bg_image"]; */?>">
              </div>
              <div class="form-group col-sm-3">
                <label for="exampleInputPassword2">Order</label>
                <input type="text" class="form-control" id="exampleInputPassword2" placeholder="eg 1" value="<?php/* if(isset($rowlg['g_order']))echo $rowlg['g_order'];*/?>" name="g_order">

              </div>
         
            </div>
         
            <div class="row">
                <div class="form-group col-sm-push-4 col-sm-4">
                  <label for="exampleInputCountry">Number of objects</label>
                  <select class="form-control sub-objects-select" name="objects_count">
                    <?php/* 
                        echo "<option selected class='form-input' >".$small_obj_arr[0][0]['objects_count']."</option>";
                    */?>    
                  </select>
                </div>
            </div>
            <div class="row objects">
            <?php/*
              for($i=1; $i<=$small_obj_arr[0][0]['objects_count']; $i++)
              {
                echo '<input type="hidden" name="g_sm_img_'.$i.'" value="'.$small_obj_arr[0][$i-1]["imgsrc"].'">';
            */?>
              <fieldset>
                <legend>
                  Slide <b># <?php/* echo $i; */?></b> <em>Animation and styles</em>
                </legend>
                <div class="form-group col-sm-3">
                  <label for="Image'+i+'">Image<?php/* echo $i; */?></label>
                  <?php/* if( $small_obj_arr[0][$i-1]['imgsrc'] == null) echo "No Image!"; else{ */?>
                  <img src="../img/gallery/<?php/* echo $small_obj_arr[0][$i-1]['imgsrc']; */?>" class="img-responsive"><?php/* } */?>
                  Change Image<input type="file" class="form-control"  placeholder="eg. 0" name="g_sm_new_img_<?php/* echo $i; */?>">
                  Show/Hide Image
                  <select name="g_sm_img_active_<?php/* echo $i; */?>"><option value="1" <?php/* if($small_obj_arr[0][$i-1]['slide-text'] == '1') echo "selected"; */?>>Show</option><option value="0" <?php/* if($small_obj_arr[0][$i-1]['g_sm_img_active'] == '0') echo "selected"; */?> >Hide</option></select>
                </div>
                <div class="form-group col-sm-6"> 
                  <label for="Image'+i+'">Slide #<?php/* echo $i; */?> Text</label> 
                  <textarea class="form-control" style="resize: vertical;"  placeholder="Add text to slide, instead of image" name="g_sm_text_<?php/* echo $i; */?>" rows="4" cols="8"><?php/* echo $small_obj_arr[0][$i-1]['slide-text']; */?></textarea> 
                </div><!-- //form-group -->
                <div class="form-group col-sm-3"><label for="Incoming Animation">Incoming Animation</label><select class="form-control" name="g_sm_caption_incoming_animation_<?php/* echo $i; */?>""><option selected><?php/* echo $small_obj_arr[0][$i-1]['caption_incoming_animation']; */?></option> 
                <option value="sft">Short from Top</option> <option value="sfb">Short from Bottom</option> <option value="sfr">Short from Right</option> <option value="sfl">Short from Left</option> <option value="lft">Long from Top</option> <option value="lfb">Long from Bottom</option> <option value="lfr">Long from Right</option> <option value="lfl">Long from Left</option> <option value="skewfromleft">Skew from Left</option> <option value="skewfromright ">Skew from Right</option> <option value="skewfromleftshort ">Skew Short from Left</option> <option value="skewfromrightshort">Skew Short from Right</option> <option value="fade">fading</option> </select></div>
                <div class="form-group col-sm-2">
                  <label for="Position X">Position X</label> 
                  <input type="text" class="form-control" value="<?php/* echo $small_obj_arr[0][$i-1]['data-x']; */?>"  placeholder="eg. 0" name="g_sm_pos_x_<?php/* echo $i; */?>">
                </div>
                <div class="form-group col-sm-2">
                  <label for="Position Y">Position Y</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="eg. 0" name="g_sm_pos_y_<?php/* echo $i; */?>" value="<?php/* echo $small_obj_arr[0][$i-1]['data-y']; */?>">
                </div>
                <div class="form-group col-sm-2">
                  <label for="exampleInputPassword1">Data Speed</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="in ms eg. 2000" name="g_sm_data_speed_<?php/* echo $i; */?>" value="<?php/* echo $small_obj_arr[0][$i-1]['data-speed']; */?>">
                </div>
                <div class="form-group col-sm-2">
                  <label for="exampleInputPassword1">Data Start</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="in ms eg. 2000" name="g_sm_data_start_<?php/* echo $i; */?>" value="<?php/* echo $small_obj_arr[0][$i-1]['data-start']; */?>">
                </div>
                <div class="form-group col-sm-2">
                  <label for="exampleInputPassword1">Data End speed</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="in ms eg. 2000" name="g_sm_data_end_speed_<?php/* echo $i; */?>" value="<?php/* echo $small_obj_arr[0][$i-1]['data-end-speed']; */?>">
                </div>
                <div class="form-group col-sm-3">
                  <label for="exampleInputPassword1">Data Easing</label>
                  <select class="form-control" name="g_sm_data_easing_<?php/* echo $i; */?>">
                  <option selected><?php/* echo $small_obj_arr[0][$i-1]['data-easing']; */?></option>
                  <option>Linear.easeNone</option> <option>Power0.easeIn</option> <option>Power0.easeInOut</option> <option>Power0.easeOut</option> <option>Power1.easeIn</option> <option>Power1.easeInOut</option> <option>Power1.easeOut</option> <option>Power2.easeIn</option> <option>Power2.easeInOut</option> <option>Power2.easeOut</option> <option>Power3.easeIn</option> <option>Power3.easeInOut</option> <option>Power3.easeOut</option> <option>Power4.easeIn</option> <option>Power4.easeInOut</option> <option>Power4.easeOut</option> <option>Quad.easeIn</option> <option>Quad.easeInOut</option> <option>Quart.easeIn</option> <option>Back.easeIn</option> <option>Back.easeInOut</option> <option>Back.easeOut</option> <option>Bounce.easeIn</option> <option>Bounce.easeInOut</option> <option>Bounce.easeOut</option> <option>Circ.easeIn</option> <option>Circ.easeInOut</option> <option>Circ.easeOut</option> <option>Elastic.easeIn</option> <option>Elastic.easeInOut</option> <option>Elastic.easeOut</option> <option>Expo.easeIn,</option> <option>Expo.easeInOut</option> <option>Expo.easeOut</option> <option>Sine.easeIn</option> <option>Sine.easeInOut</option> <option>Sine.easeOut</option> <option>SlowMo.ease</option> <option>easeInOutBounce</option> <option>easeOutBounce</option> <option>easeInBounce</option> <option>easeInOutBack</option> <option>easeOutBack</option> <option>easeInBack</option> <option>easeInOutElastic</option> <option>easeOutElastic</option> <option>easeInElastic</option> <option>easeInOutCirc</option> <option>easeOutCirc</option> <option>easeInCirc</option> <option>easeInOutExpo</option> <option>easeOutExpo</option> <option>easeInExpo</option> <option>easeOutQuint</option> <option>easeInOutQuint</option> <option>easeInSine</option> <option>easeOutSine</option> <option>easeInOutSine</option> <option>easeInQuint</option> <option>easeInOutQuart</option> <option>easeOutQuart</option> <option>easeInQuart</option> <option>easeInOutCubic</option> <option>easeOutBack</option> <option>easeInQuad</option> <option>easeOutQuad</option> <option>easeInOutQuad</option> <option>easeInCubic</option> <option>easeOutCubic</option>
                </select>
              </div>
              <div class="form-group col-sm-3">
                <label for="exampleInputPassword1">Data End-easing</label> 
                <select class="form-control" name="g_sm_data_end_easing_<?php/* echo $i; */?>">
                  <option selected><?php/* echo $small_obj_arr[0][$i-1]['data-end-easing']; */?></option>
                  <option>Linear.easeNone</option> <option>Power0.easeIn</option> <option>Power0.easeInOut</option> <option>Power0.easeOut</option> <option>Power1.easeIn</option> <option>Power1.easeInOut</option> <option>Power1.easeOut</option> <option>Power2.easeIn</option> <option>Power2.easeInOut</option> <option>Power2.easeOut</option> <option>Power3.easeIn</option> <option>Power3.easeInOut</option> <option>Power3.easeOut</option> <option>Power4.easeIn</option> <option>Power4.easeInOut</option> <option>Power4.easeOut</option> <option>Quad.easeIn</option> <option>Quad.easeInOut</option> <option>Quart.easeIn</option> <option>Back.easeIn</option> <option>Back.easeInOut</option> <option>Back.easeOut</option> <option>Bounce.easeIn</option> <option>Bounce.easeInOut</option> <option>Bounce.easeOut</option> <option>Circ.easeIn</option> <option>Circ.easeInOut</option> <option>Circ.easeOut</option> <option>Elastic.easeIn</option> <option>Elastic.easeInOut</option> <option>Elastic.easeOut</option> <option>Expo.easeIn,</option> <option>Expo.easeInOut</option> <option>Expo.easeOut</option> <option>Sine.easeIn</option> <option>Sine.easeInOut</option> <option>Sine.easeOut</option> <option>SlowMo.ease</option> <option>easeInOutBounce</option> <option>easeOutBounce</option> <option>easeInBounce</option> <option>easeInOutBack</option> <option>easeOutBack</option> <option>easeInBack</option> <option>easeInOutElastic</option> <option>easeOutElastic</option> <option>easeInElastic</option> <option>easeInOutCirc</option> <option>easeOutCirc</option> <option>easeInCirc</option> <option>easeInOutExpo</option> <option>easeOutExpo</option> <option>easeInExpo</option> <option>easeOutQuint</option> <option>easeInOutQuint</option> <option>easeInSine</option> <option>easeOutSine</option> <option>easeInOutSine</option> <option>easeInQuint</option> <option>easeInOutQuart</option> <option>easeOutQuart</option> <option>easeInQuart</option> <option>easeInOutCubic</option> <option>easeOutBack</option> <option>easeInQuad</option> <option>easeOutQuad</option> <option>easeInOutQuad</option> <option>easeInCubic</option> <option>easeOutCubic</option> 
                </select> 
              </div>
              <div class="form-group col-sm-4">
                <label for="exampleInputPassword2">Style</label>
                <textarea class="form-control" placeholder="eg. z-index:3; border-color: #FFF;" name="g_sm_style_<?php/* echo $i; */?>" ><?php/* echo $small_obj_arr[0][$i-1]['style']; */?></textarea>
              </div>
            </fieldset>
          <?php/* } */?>
          </div>
          <div class="row">
              <div class="form-group form-footer">
                <div class="col-sm-offset-4 col-sm-8">
                  <input type="hidden" class="btn btn-primary" name="act" value="signup">
                  <input type="submit" class="btn btn-primary" name="sendbut" value="Add">
                  <input type="reset" class="btn btn-default" name="reset" value="Reset">
                </div>
              </div><!-- //form-group -->
          </div><!-- //row -->
         </form>
        </div><!-- //tile-body -->
         
      </section>

    </div><!-- //col-md-12 -->

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