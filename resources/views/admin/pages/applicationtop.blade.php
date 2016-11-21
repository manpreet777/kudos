<?php/* ob_start();*/?>
<?php/* 
include("../config/class_db.php");
include("../classes/class_email.php");
include("includes/class_login.php");
include("includes/class_images.php");
include("includes/class_commen.php");
include("includes/class_page.php");
include("includes/class_language.php");
include("includes/class_newsctegory.php");
include("includes/class_reporter.php");
include("includes/class_news.php");
include("includes/class_gallery.php");
include("includes/class_voip_count.php");
include("includes/class_team.php");
include("includes/class_values.php");
include("includes/class_staff.php");
include("includes/class_sites.php");
include("includes/class_admin_blog.php");
@session_start();
$sid = session_id(); 
		$notfication=array(
		'1'=>'Just got registered',
		'2'=>'Just logged in',
		'3'=>'Just updated his/her profile',
		'4'=>'Just changed his/her profile picture',
		'5'=>'Just sent a message',
		'6'=>'Just sent a reply',
		'7'=>'Just changed his/her password',
		'8'=>'Just post a new ads',
		'9'=>'edited his/her ads',
		'10'=>'New contact us message received',
		'11'=>'Just wrote a testimonial'
		);
		$totalnoti=$obj_Common->get_query("nto_read ='0'",'tbl_notification',"*");	
		$totalcntnotif=mysql_num_rows($totalnoti);
define("SITE_ADMIN_URL","http://localhost/winlearnnew/admin/");
//define("SITE_ADMIN_URL","http://winnerslearners.com/admin/");
*/?>