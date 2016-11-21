<?php/* include("applicationtop.php") ; */?>
<?php/*
$r = "lc3"; 
*/?>
<?php/*
if(isset($_POST["sendbut"]))
{
	//echo "<pre>";
//	print_r($_POST);
//	exit;
//	echo "<pre>";
	$arrayupdate=serialize($_POST["textinpur"]);
	$sqlupdate="update tbl_language_conv set Lgc_conversion='".$arrayupdate."' where Lgc_id='1'";
	if(mysql_query($sqlupdate))
	{
		header("location:language_convert.php?msg=successfully updated");	
	}
}
*/?>

<?php/*
$page='languagecov';
 $textarray=array
        (
           'About','Contact','News','Ads','Login','Register','Inquiry','News','Event','Promoters','Clints','World','Name','Work With Us','Meet Us At','Phone','Email','Address','Skype','Password','User Name','First Name','Last Name','Promoters','Message','Logout','Welcome','View','Inbox','New','Add','User','Captcha','Read','Reply','Back','Reset','Active ','Cancel','Delete','Type','Status','Activate','Change','Search','Save','Select','Submit','Go','Update','Profile','Zipcode','Registration Completed','Current','Confirm','Not Match','Forgot Password','Image',
'Dashboard','Title','Date','Description','Action','Deactive','Approve','Pending','Country',	'login_autentication','click_here','login_with_new',			'linkgen','copy_to_clipboard','download_html_file','Write Testimonial','Sent','Compose','From','Subject','Send','To','team','testimonial','logged_as','your_login_is','my_adcentral','publishing_site','generate_and_save','single_link','to_see_link_validation','copy_save','You_Have','unread_messages'
        )
*/?>

<?php/* include("header.php");*/?>
<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
     <li><a href="language_convert.php"><i class="fa fa-home"></i>Language Convert Home</a></li>
    <li class="active">Language Convert</li>
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
          <h1><strong>Language Converter Edit</strong> </h1>
        </div>
         <?php/* if($msg!=''){*/?>
             <div class="success">
           <?php/* echo $msg;*/?>
            </div>
            <?php/* } */?>
        <div class="tile-body nopadding">
        <form action="" method="post">
          <table class="table">
            <thead>
              <tr>
                <th>Text/Language Name</th>
               <?php/*
		 	$inputarray	=array();
			$sqllg1="select * from tbl_language order by Lg_title";
			$resutllg=mysql_query($sqllg1);
			$numrow=mysql_num_rows($resutllg);
			
			while($result = $db_obj->fetch_object($resutllg))
			{
				$inputarray[$result->Lg_id]=$result->Lg_title;
		 */?>
                <th><?php/* echo $result->Lg_title;*/?></th>
               <?php/* }
		 */?>
              </tr>
            </thead>
            <tbody>
             <?php/*
		$selectsqlcnt="select * from tbl_language_conv ";
		$resutcnt=mysql_query($selectsqlcnt);
		$rowcnt=mysql_fetch_object($resutcnt);
		$selectarray=unserialize($rowcnt->Lgc_conversion);
	   foreach($textarray as $key => $value){
	   */?>
              <tr>
                <td><?php/* echo $value;*/?></td>
               <?php/*
			foreach($inputarray as $ktxt =>$textv)
			{
		 */?>
                <td><input type="text" value="<?php/* echo $selectarray[$ktxt][$value];*/?>" name="textinpur[<?php/* echo $ktxt;*/?>][<?php/* echo $value;*/?>]"></td>
               <?php/* } */?>
               </tr>
               <?php/* } */?>
               <tr>
               <td><input type="submit" name="sendbut" value="Save"></td>
               </tr>
            </tbody>
          </table>
          </form>
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
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
</body>
</html>