<?php include("applicationtop.php") ; ?>
<?php $page = "index";?>
<?php
if((isset($_POST["login"])) && ($_POST["act"] == "adminlogin"))
{
	//echo "hello";
	$msg = $login_obj->fun_login($_POST['txtusername'],$_POST['txtpassword']);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Section</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8" />

    <link rel="icon" type="image/ico" href="images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap-checkbox.css">

    <link href="css/minoral.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  <body class="brownish-scheme">

   

    <!-- Wrap all page content here -->
    <div id="wrap">

      


      <!-- Make page fluid -->
      <div class="row">         
        




        
        <!-- Page content -->
        <div id="content" class="col-md-12 full-page login">


          <div class="welcome">
            <img src="images/logo-big.png" alt class="logo">
          
		 <form id="form-signin"  method="post" class="form-signin" style="display: block;">
              <section>
                <div class="input-group">
                    <input type="text" name="txtusername"  class="form-control" id="login-email" placeholder="Username..">
                  <div class="input-group-addon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group">
                  <input type="password" class="form-control" name="txtpassword" placeholder="Password">
                  <div class="input-group-addon"><i class="fa fa-key"></i></div>
                </div>
                 <div class="input-group">
                   <input id="contacthidden" type="hidden" name="act" value="adminlogin" />
                        <input type="submit" name="login" style="vertical-align:middle" value="Login" class="btn btn-success" />
                  
                </div>
              </section>
            
              
         
          </div>
          

          
          <a href="#" class="log-in hide">Log In<i class="fa fa-arrow-right fa-5x"></i></a>

   </form>

        </div>
        <!-- Page content end -->






      </div>
      <!-- Make page fluid-->




    </div>
    <!-- Wrap all page content end -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
    <script src="js/run_prettify.js"></script>
    <script src="js/plugins/jquery.nicescroll.min.js"></script>
    <script src="js/plugins/blockui/jquery.blockUI.js"></script>


    <script src="js/minoral.min.js"></script>

    <script>
    $(function(){
      
      $('.welcome').addClass('animated bounceIn');

    })
      
    </script>
  </body>
</html>