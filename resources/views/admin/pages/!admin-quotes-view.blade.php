<?php /*  include("applicationtop.php") ;   */?>
<?php /*
  
  if(isset($_REQUEST['id']) && $_REQUEST['action'] == 'single')
  {
      $result = $obj_Common->get_query("id = '".$_REQUEST['id']."'", "quotes_user_data", "*");
      $singleQuote = mysql_fetch_assoc($result);
  }
  else
  {
    $result = $obj_Common->get_query("id != ''", "quotes_user_data", "*", "ORDER BY id DESC");
          while($row = mysql_fetch_assoc($result))    
            $allQuotes[] = $row;
  }
  $page='!admin-quotes-view';

  */?>
<?php /* include("header.php");  */?>

          <!-- breadcrumbs -->
          <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
              <li class="active"><?php /* if( !isset($_REQUEST['action'] ) ) echo "All Quotes"; else echo "User Quote Details";  */?></li>
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
                    <h1><strong><?php /* if( !isset($_REQUEST['action'] ) ) echo "All Quotes"; else echo "User Quote";  */?></strong> </h1>
                      <?php /* if($_REQUEST['msg']!=''){ */?>
                   <div class="success">
                 <?php /* echo $_REQUEST['msg']; */?>
                   </div>
                  <?php /* }  */?>
                   </div>
                
                  <!-- /tile header -->
                  <?php /* if(isset($_REQUEST['id'])) { */?>
                  <div class="tile-header">
                     <a href="!admin-quotes-view.php" class="btn btn-warning">Back</a>
                  </div>
                  <?php /* }  */?>
                  <!-- tile body -->
                  <div class="tile-body">
                    <?php /*
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
                
            <?php /*
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
                        <tr class="<?php /* if($allQuotes[$i]['status'] == 'replied') echo "success"; else echo "warning";  */?>">
                          <td><?php /* echo $sno; */?></td>
                          <td><?php /* echo $data['First_Name']; */?></td>
                          <td><?php /* echo $data['Contact_Email']; */?></td>
              <td><?php /* echo $allQuotes[$i]['quote_rqst_date'];  */?></td>
              <td><a class="btn btn-info" href="!admin-quotes-view.php?id=<?php /* echo $allQuotes[$i]['id'];  */?>&action=single"</a>View Quote</td>                         
                           <td><b><?php /* echo ucfirst($allQuotes[$i]['status']);  */?></b></td>  
                        </tr>
                       <?php /* }  */?>
                        </tbody>
                    </table>
          <?php /* } 
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
                
                    <h5>Quote Requested For <b><?php /* echo $catName[0];  */?></b><span style="float: right;">Requested on: <small><?php /* echo date_format( date_create($singleQuote['quote_rqst_date']), "Y-M-d H:is");  */?></small></span></h5>
                    <hr>
                        <h4>Details</h4>
                        <h5>Name: <b><?php /* echo $data['First_Name'];  */?></b></h5>
                        <h5>Email: <b><?php /* echo $data['Contact_Email'];  */?></b></h5>
                        <h5>Quote details provided by user</h5>
                        <ul>
                        <?php /* foreach ($data as $key => $value) {
                            if($key[0] != "!")
                              {
                                if(!isset($value))
                                    $value = "Not provided by user!";
                                $key = str_replace("_", " ", $key);
                                echo "<li><b>".$key."</b> :   ".$value."</li>";
                              }
                        }  */?>
                        </ul>
                        <hr>
                        <?php /*
                            //fetching quote reply details
                            $r2 = $obj_Common->get_query("quote_id = '".$singleQuote['id']."'", "quotes_reply", "*");
                            $quote_reply_arr = mysql_fetch_assoc($r2);
                            //find staff name who replied the quote
                            $r3 = $obj_Common->get_query("st_id = '".$quote_reply_arr['reply_by_staff']."'", "tbl_staff", "st_username");
                            $staff_name = mysql_fetch_assoc($r3);

                         */?>
                        <h2>Quote revert action</h2>
                        <h5>Quote status: <b><?php /* if($singleQuote['status'] == 'replied') echo ucfirst($singleQuote['status'])." on ".date_format(date_create($quote_reply_arr['reply_time']) , "Y-M-d H:i:s"); else echo ucfirst($singleQuote['status']);   */?></b><span style="float: right;">Requested on: <small><?php /* echo date_format( date_create($singleQuote['quote_rqst_date']), "Y-M-d H:i:s");  */?></small></h5>
                
                        <h5>Quote Reply from IP: <b><?php /* echo $quote_reply_arr['reply_from_ip'];  */?></b></h5>
                
                        <h5>Quote Reply by: <b><?php /* echo $staff_name['st_username'];  */?></b></h5>
                
                        <h5>Replied Content: </h5>
                        <p><?php /* echo $quote_reply_arr['reply_content'];  */?></p>
                        

                </div><!-- //container-fluid -->


              </div><!-- //container -->

               <?php /* }  */?>   
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