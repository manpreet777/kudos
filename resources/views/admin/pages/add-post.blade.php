<?php  /* include("applicationtop.php") ;
$page='add-post';
if( isset($_GET['id']) && is_numeric($_GET['id']) )
{
  $id = $_GET['id'];
  if($_GET['action'] == 'edit')
    {
      $postData = $adminBlog_obj->fetchPostData($_GET['id']);
      $desc = unserialize(htmlspecialchars_decode(stripslashes($postData->post_content)));
      $tit = unserialize(htmlspecialchars_decode(stripslashes($postData->post_title)));
    }
}
if((isset($_POST["add-post-btn"])) && ($_POST["act"] == "add-blog-post"))
  {
    $msg = $adminBlog_obj->addPost();
    switch ($msg) {
      case 1:
        $msg = "Post Added";
        break;

      case 0:
        $msg = "Error Adding Post";
        break;
      
      default:
        $msg = $msg;
        break;
    }
    @header("Location: view-posts.php?msg=$msg");
  }
if(isset($_POST['add-post-btn']) && $_POST["act"] == "edit-blog-post")
  {
    $msg = $adminBlog_obj->updatePost($_GET['id']);
    @header("Location: view-posts.php?msg=$msg");
  }
include("header.php");*/?>
<style type="text/css">
  .custom-select-container label{
    width: 100%;
    display: inline-block !important;
  }
  .custom-select-container label>.select2-container,
  .custom-select-container label>.select2-container>span.selection,
  .custom-select-container label>.select2-container>span.selection li.select2-search,
  .custom-select-container label>.select2-container>span.selection li.select2-search>input{
    min-width: 100%;
  }
</style>
      <!-- breadcrumbs -->
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
          <li class="active"><?php /* if(isset($_REQUEST['action']) == 'edit') echo "Edit"; else echo "Add"; */?> blog post</li>
        </ol>
      </div>
      <!-- /breadcrumbs -->
      <!-- content main container -->
      <div class="main">
        <!-- row -->
        <div class="row">
          <div class="col-md-12">
            <!-- tile -->
            <section class="tile cornered">
              <!-- tile header -->
              <div class="tile-header">
                <h1><strong>Text</strong> Inputs</h1>
                <?php /* if( isset($msg) )
                        echo "<div class='success'>".$_msg."</div>";
                      if( isset($_GET['msg']) )
                        echo "<div class='success'>Post updated successfully!</div>";
                */?>
              </div><!-- ///tile-header -->
              <!-- /tile header -->

              <!-- "tile-body"> -->
              <div class="tile-body">
                      
                  <form class="form-horizontal" method="post" enctype="multipart/form-data" action="" role="form">
                    
                    <!-- form-group col-md-12"> -->
                    <div class="form-group col-md-12">
                      <label for="input01" class="col-sm-4 col-sm-pull-2 control-label">Post Category</label>
                        <!-- col-sm-6 col-sm-pull-2"> -->
                      <div class="col-sm-6 col-sm-pull-2">
                        <select class="form-control" name="post_cat">
                          <option></option>
                          <?php /* $q = $obj_Common->get_query("is_active != '0'", "blog_category", "*"); 
                            while($row = mysql_fetch_assoc($q)) {
                              $qCat = unserialize($row['name']);
                              $qCat = $qCat[$_SESSION['langid']-1];
                          */?>
                            <option value="<?php /* echo $row['id']; */?>" <?php /* if(isset($postData) && $postData->post_cat == $row["id"]) echo "selected"; */?>><?php /* echo $qCat; */?></option>
                          <?php /*
                            }
                          */?>
                          
                        </select>
                      </div><!-- ///col-sm-6 col-sm-pull-2"> -->
                    </div> <!-- ///form-group col-md-12"> -->
                    <div class="form-group col-md-12">
                      <label for="input01" class="col-sm-4 col-sm-pull-2 control-label">Sub Category</label>
                      <div class="col-sm-6 col-sm-pull-2">
                        <select class="form-control" name="post_sub_cat">
                          <option></option>
                          <?php /* $q = $obj_Common->get_query("is_active != '0' && main_cat_id = '".$postData->post_cat."'", "blog_sub_category", "*"); 
                            while($row = mysql_fetch_assoc($q)) {
                              $qSubCat = unserialize($row['name']);
                              $qSubCat = $qSubCat[$_SESSION['langid']];
                          */?>
                            <option value="<?php /* echo $row['id']; */?>" <?php /* if(isset($postData) && $postData->post_sub_cat == $row["id"]) echo "selected"; */?>><?php /* echo $qSubCat; */?></option>
                          <?php /*
                            }
                          */?>
                          
                        </select>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                        <?php /*
                          //checking if a featured image is added with the post
                          if(isset($postData->post_files) )
                            $postImgUrl = $postData->post_files;
                        */?>
                        <label for="input02" class="col-sm-4 col-sm-pull-2 control-label">Featured image</label>
                        <div class="col-sm-6 col-sm-pull-2">
                          <?php /* if(isset($postImgUrl)){ */?>
                          <label class="form-label">
                            <img src="<?php /* //echo SITE_ADMIN_URL;*/?>images/blog/<?php /* echo $postImgUrl; */?>" class="img img-responsive">
                          </label>
                          <?php /* } */?>
                          <input type="file" class="form-control-file" name="image" id="input02" />
                        </div><!-- //col-sm-8 -->
                    </div><!-- //form-group -->
                    <!-- form-group col-md-12"> -->
                    <div class="form-group col-md-12">
                      
                      <label for="input06" class="col-sm-2 control-label">Tags</label>
                      

                      <div class="col-sm-10 custom-select-container">
                        <label for="id_label_tags" class= "form-label"><select name="tags_arr[]" class="multiple-tags form-control multiple-tags-select2" id="id_label_multiple" multiple="multiple">
                        </select>
                        </label>
                      </div><!-- ///col-sm-10 -->
                      
                    </div><!-- ///form-group col-md-12"> -->
                    <?php /*
                      //fetching the images
                      //if(isset($postData))
                        //$image = explode("|",$postData->post_files);
                    */?>
                    <?php /*
                        $langq = "select * from tbl_language where  Lg_id!='' order by Lg_title";
                        $resultlang = mysql_query($langq);
                        while($rowlang = mysql_fetch_object($resultlang))
                        {
                      */?>
                      <div class="form-label col-md-12">
                        <h4><?php /* echo ucfirst($rowlang->Lg_title);*/?></h4>
                         <input type="hidden" class="form-control" value="<?php /* echo $rowlang->Lg_id;*/?>" name="txtlgkey[]" id="input<?php /* echo $rowlang->Lg_id;*/?>">
                      </div><!-- //form-label -->
                      <div class="form-group col-md-12">
                        <label for="input01" class="col-sm-4 col-sm-pull-2 control-label">Post Title</label>
                        <div class="col-sm-6 col-sm-pull-2">
                          <input type="text" name="post_title[]" class="form-control" id="input01"
                          <?php /* if(isset($tit)) echo 'value="'.$tit[$rowlang->Lg_id-1].'"';//postData->post_title.'"'; 
                          */?>>
                         </div>
                      </div>
                    
                      <div class="form-group col-md-12">
                        <label for="input06" class="col-sm-2 control-label">Post Content</label>
                        <div class="col-md-10">
                          <div class="form-control inputHtmlEdit">
                            
                          </div>
                        </div>
                      </div><!-- //form-group -->

                      <!--<div class="form-group col-md-12">
                        <label for="input01" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-9">
                        <textarea name="des[]" class="form-control"><?php /* //if(isset($_POST['des'])) echo $_POST['des'];*/?><!--</textarea>
                        <!--</div>
                      </div>-->
                      <div class="clearfix">
                        
                      </div>
                    <?php /* } */?>
                        <!-- form-group" -->
                    <div class="form-group" style="margin-top: 10px;">
                      <div class="col-sm-8 col-sm-offset-2">
                        <input type="hidden" name="act" value="<?php /* if(isset($_GET['action']) && $_GET['action'] == "edit") echo "edit-blog-post"; else echo "add-blog-post"; */?>"></input>
                        <input type="hidden" name="post_author" value="admin"></input>
                        
                        <textarea id="engContent" name="post_content[]" style="display: none;"></textarea>
                        <textarea id="porContent" name="post_content[]" style="display: none;"></textarea>
                        <textarea id="spaContent" name="post_content[]" style="display: none;"></textarea>
                        <button type="submit" name="add-post-btn" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                      </div>
                    </div><!-- ////form-group" -->
               
                  </form>
 
              </div><!-- /tile body -->
            
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
<?php /* if(isset($postData) && $postData->post_content != ""){ 
      $content = htmlspecialchars_decode(stripslashes($postData->post_content));
*/?>
<div class="postContent hidden">
    <pre><?php /* echo htmlspecialchars($content); */?></pre>
</div>
<div class="eng-content hidden">
      <pre><?php /* echo htmlspecialchars($desc[0]); */?></pre>
    </div>
    <div class="por-content hidden">
      <pre><?php /* echo htmlspecialchars($desc[1]); */?></pre>
    </div>
    <div class="spa-content hidden">
      <pre><?php /* echo htmlspecialchars($desc[2]); */?></pre>
    </div>

<?php /* } */?>
<!-- Wrap all page content end -->
<script type="text/javascript">
$(document).ready(function(){
    //populating the custom select2 wid data when editting a post
    <?php /* if(isset($postData) && $postData->post_tags != ""){ */?>
      var selectedTags = "<?php /* echo $postData->post_tags; */?>";
      //adding options to teh custom select box 
      $.each( selectedTags.split(','), function(key, val){
          $('.multiple-tags-select2').append('<option value="'+val+'">'+ val +'</option>');
      });
      //populating preselected boxes when editting
      $(".multiple-tags").select2().val( selectedTags.split(',') ).trigger("change");

    <?php /* } */?>

    $('.inputHtmlEdit').eq(0).summernote({
      height: 130 ,  //set editable area's height
      callbacks: {
          onChange: function(contents, $editable){
            $('#engContent').html(contents);
            //console.log('onchange:', contents, $editable);
          },
          onImageUpload: function(files, editor, welEditable){
            //upload image to server and create img node
            //$('.inputHtmlEdit').eq(0).summernote('insertNode', files);  
            sendFile(files[0], editor, welEditable, 0);
            //console.log("Url returned after uploading="+upUrl);
            //if(upUrl != ""){
              //$('.inputHtmlEdit').eq(0).summernote('insertImage', upUrl);
              //$('#engContent').html($('.inputHtmlEdit').eq(0).summernote('code'));
            //}
          }
      }
    });
    $('.inputHtmlEdit').eq(1).summernote({
      height: 130 ,  //set editable area's height
      callbacks: {
          onChange: function(contents, $editable){
            $('#porContent').html(contents);
            //console.log('onchange:', contents, $editable);
          },
          onImageUpload: function(files, editor, welEditable){
            //upload image to server and create img node
            //$('.inputHtmlEdit').eq(0).summernote('insertNode', files);  
            sendFile(files[0], editor, welEditable, 1);
            //console.log("Url returned after uploading="+upUrl);
            //if(upUrl != ""){
              //$('.inputHtmlEdit').eq(0).summernote('insertImage', upUrl);
              //$('#engContent').html($('.inputHtmlEdit').eq(0).summernote('code'));
            //}
          }
      }
    });
    $('.inputHtmlEdit').eq(2).summernote({
      height: 130 ,  //set editable area's height
      callbacks: {
          onChange: function(contents, $editable){
            $('#spaContent').html(contents);
            //console.log('onchange:', contents, $editable);
          },
          onImageUpload: function(files, editor, welEditable){
            //upload image to server and create img node
            //$('.inputHtmlEdit').eq(0).summernote('insertNode', files);  
            sendFile(files[0], editor, welEditable, 2);
            //console.log("Url returned after uploading="+upUrl);
            //if(upUrl != ""){
              //$('.inputHtmlEdit').eq(0).summernote('insertImage', upUrl);
              //$('#engContent').html($('.inputHtmlEdit').eq(0).summernote('code'));
            //}
          }
      }
    });
    <?php /* //if(isset($postData) && $postData->post_content != ""){ */?>
        //var text1 = "<?php /* //echo htmlspecialchars(stripslashes($postData->post_content)); */?>";
        //text1 = replace(text1, "<br>", "&#10;");
        var text1 = $(".eng-content pre").text();
        $('.inputHtmlEdit').eq(0).summernote('code',text1);
        $('#engContent').html(text1);

        var text2 = $(".por-content pre").text();
        $('.inputHtmlEdit').eq(1).summernote('code',text2);
        $('#porContent').html(text2);

        var text3 = $(".spa-content pre").text();
        $('.inputHtmlEdit').eq(2).summernote('code',text3);
        $('#spaContent').html(text3);
        


    <?php /* //} */?>

    $(".multiple-tags").select2({
        placeholder: "Enter tags about post",
        tags: true,
        tokenSeparators: [',', ' ']
    });

    function sendFile(file, editor, welEditable){
      data = new FormData();
      data.append("file", file);
      $.ajax({
        url: "summernote-img-uploader.php",
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        type: "POST",
        success: function(url){
          //alert(url);
          $('.inputHtmlEdit').summernote('insertImage', url);
        },
        error: function(jqXHR, textStatus, errorThrown){
          //console.log(textStatus+" "+errorThrown);
        }
      });
    }
});

//for categories and sub categories
    $('select[name="post_cat"]').on('change', function(index){
        var mainCatId = this.value;
        //console.log(mainCatId);
        $.ajax({
            url: "../handlers/fetch_blog_subcat_handler.php",
            type: "GET",
            dataType: "JSON",
            data: {
              rqst: "fetch_blog_subcat",
              id: mainCatId
            }            
        }).done(function(data){
                var subcat = $('select[name="post_sub_cat"]');
                subcat.empty();
                subcat.append('<option value="">Select one</option>');
                $.each( data, function(index, value) {
                    //console.log(index+"=>"+ value);
                    subcat.append('<option value="'+value['id']+'">'+value['name']+'</option>');
                });
        }).error(function(errorData, v,k){ 
                console.log("error after ajax request"+ errorData+ " "+ v+" ="+ k);
        });
    });
</script>
</body>
</html>