<?php/* include("applicationtop.php") ; */?>
<?php/*
  if(isset($_POST['quoteBtn']) )
  {
      $staffId = $_REQUEST['staffId'];
      $staffIp = $_REQUEST['staffIp'];
      $quoteId = $_REQUEST['quoteId'];
      $quoteCatId = $_REQUEST['quoteCatId'];
      $quote_reply = $_REQUEST['quote_reply'];
      $values = "('', '".$quoteId."', '".$quote_reply."','".$staffId."', now(), '".$_SERVER['REMOTE_ADDR']."')";
      $result = $obj_Common->insert_query("quotes_reply", $values);//("status = 'pending'", "quotes_user_data", "*");
      if($result == 1)
      {
          //change status of the quote frompending to done
          $r1 = $obj_Common->update_query("id = '".$quoteId."'", "quotes_user_data", "status = 'replied'");
          if($r1 == 1)
          { 
              @header("Location: admin-quotes.php?msg=Quote replied to user successfully");
          }
          else
              @header("Location: admin-quotes.php?msg=Unabke to reply to quote right now!");    
      }
      else
          @header("Location: admin-quotes.php?msg=There is a problem replying to this quote!");
  }
  if(!isset($_REQUEST['action']))
  {
    @header('Location: admin-quotes.php?msg=Please check a quote from below to reply back.');
  }
  else
  {
    if(isset($_REQUEST['id']) && $_REQUEST['action'] == 'single')
    {
        $result = $obj_Common->get_query("id = '".$_REQUEST['id']."'", "quotes_user_data", "*");
        $singleQuote = mysql_fetch_assoc($result);
    }
    else
    {
      if($_REQUEST['action'] == 'all')
      {
        $result = $obj_Common->get_query("id != ''", "quotes_user_data", "*", "ORDER BY id DESC");
        while($row = mysql_fetch_assoc($result))    
          $allQuotes[] = $row;  
      }
    }
  }
	$page='admin-quotes-view';

*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li><a href="admin-quotes.php"><i class="fa fa-home"></i>User Quotes</a></li>
    <li class="active"><?php/* if($_REQUEST['action'] == 'all') echo "All Quotes"; else echo "User Quote Details"; */?></li>
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
                    <h1><strong><?php/* if($_REQUEST['action'] == 'all') echo "All Quotes"; else echo "User Quote"; */?></strong> </h1>
                      <?php/* if($_REQUEST['msg']!=''){*/?>
                     <div class="success">
                   <?php/* echo $_REQUEST['msg'];*/?>
                     </div>
                  <?php/* } */?>
                  </div>
                
                    <div class="tile-header">
                      <a href="admin-quotes.php" class="btn btn-warning">Back</a>
                    </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    <?php/*
				//if allquotes are to be displayed show table else show the requested quote
        if(isset($allQuotes))
        {
				*/?>
            <table class="table">
              <thead>
                <tr>
                    <th>S No.</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Quotes request date</th>
                    <th>Action</th>
                    <th>Status</th>
                </tr>
              </thead>
              <tbody>
						    
            <?php/*
            if( count($allQuotes)<1)
            {
                echo '<tr><td colspan="5">No new quotes!</td></tr>';
            }
            else
            {
						            $sno=0;
                        for($i=0; $i<count($allQuotes); $i++ )
                        {
                        	$data = unserialize($allQuotes[$i]['content']);
							$sno++;
                        */?>
                        <tr class="<?php/* if($allQuotes[$i]['status'] == 'replied') echo "success"; else echo "warning"; */?>">
                          <td><?php/* echo $sno;*/?></td>
                          <td><?php/* echo $data['First_Name'];*/?></td>
                       	  <td><?php/* echo $data['Contact_Email'];*/?></td>
					             	  <td><?php/* echo $allQuotes[$i]['quote_rqst_date']; */?></td>
						              <td><a class="btn btn-info" href="admin-quotes-view.php?id=<?php/* echo $allQuotes[$i]['id']; */?>&action=single"</a>View Quote</td>                         
	                         <td><b><?php/* echo ucfirst($allQuotes[$i]['status']); */?></b></td>  
                        </tr>
                       <?php/* } */?>
                        </tbody>
                    </table>
					<?php/* } 
              }
              if(isset($singleQuote))
              {
                $data = unserialize($singleQuote['content']);

                //fetch quote category name
                $sub_cat_id = $singleQuote['quote_sub_cat_id'];
                $catName = $obj_Common->get_field_name("id='".$sub_cat_id."'","quotes_sub_cat","cat_name");
          */?>
              <div class="container-fluid">
                <h2>Quote Details</h2>
                <div class="">
                    <h5>Quote Requested For <b><?php/* echo $catName[0]; */?></b><span style="float: right;">Requested on: <small><?php/* echo date_format( date_create($singleQuote['quote_rqst_date']), "Y-M-d H:is"); */?></small></span></h5>
                    <hr>
                    <div class="">
                        <h4>Details</h4>
                        <h5>Name: <b><?php/* echo $data['First_Name']; */?></b></h5>
                        <h5>Email: <b><?php/* echo $data['Contact_Email']; */?></b></h5>
                        <h5>Quote details provided by user</h5>
                        <ul>
                        <?php/* foreach ($data as $key => $value) {
                            if($key[0] != "!")
                              {
                                if(!isset($value))
                                    $value = "Not provided by user!";
                                $key = str_replace("_", " ", $key);
                                echo "<li><b>".$key."</b> :   ".$value."</li>";
                              }
                        } */?>
                        </ul>
                        <hr>
                        <h4>Respond To quote!</h4>
                        <form class="row" action="" method="POST">
                            <input type="hidden" name="staffId" value="<?php/* echo $_SESSION['userid']; */?>"></input>
                            <input type="hidden" name="quoteId" value="<?php/* echo $_REQUEST['id']; */?>"></input>
                            <input type="hidden" name="quoteCatId" value="<?php/* echo $sub_cat_id; */?>"></input>
                            <input type="hidden" name="staffIp" value="<?php/* echo $_SERVER['REMOTE_ADDR']; */?>"></input>
                            <div class="col-sm-10 col-sm-offset-2">
                                
                                <div class="form-group col-sm-8">
                                  <label class="form-label">Reply Message</label>
                                  <textarea class="col-sm-12 form-control" rows="10" name="quote_reply"></textarea>
                                </div>
                                <div class="col-sm-12 form-group">
                                  <input type="submit" name="quoteBtn" value="Reply" class="btn btn-info btn-lg">
                                </div>
                            </div><!-- //form-group -->
                        </form>
                    </div>
                </div><!-- //row -->
              </div><!-- //container -->
               <?php/* } */?>   
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
  </body>
</html>