<?php/* include("applicationtop.php") ; */?>
<?php/*
	$page='admin-quotes';
	$pageSize =25;
	$result = $obj_Common->get_query("status = 'pending'", "quotes_user_data", "*");
	while($row = mysql_fetch_assoc($result))		
		$resultarray[] = $row;
*/?>
<?php/* include("header.php");*/?>

          <!-- breadcrumbs -->
          <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
              <li class="active">New Quotes</li>
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
                    <h1><strong>New Quotes Request</strong> </h1>
                      <?php/* if($_REQUEST['msg']!=''){*/?>
                      <div class="alert alert-success alert-dismissible fade in" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php/* echo $_REQUEST['msg'];*/?>
                      </div>                  
                  <?php/* } */?>
                  </div>
                
                    <div class="tile-header">
                  <a href="admin-quotes-view.php?action=all" class="btn btn-warning">All Quotes</a>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    <?php/*
				if(count($resultarray)<1)
				{
					echo 'No new quotes!';
				}
				else
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
                        </tr>
                      </thead>
                      <tbody>
						<?php/*
						$sno=0;
                        for($i=0; $i<count($resultarray); $i++ )
                        {
                        	$data = unserialize($resultarray[$i]['content']);
							$sno++;
							if($sno%2==0)
							$cl='success';
							else
							$cl='warning';
							//$desc = unserialize($result['content']);
                        */?>
                        <tr class="warning">
                          <td><?php/* echo $sno;*/?></td>
                          <td><?php/* echo $data['First_Name'];*/?></td>
                       	  <td><?php/* echo $data['Contact_Email'];*/?></td>
						  <td><?php/* echo $resultarray[$i]['quote_rqst_date']; */?></td>
						  <td><a class="btn btn-info" href="admin-quotes-view.php?id=<?php/* echo $resultarray[$i]['id']; */?>&action=single"</a>View Quote</td>                         
	                              
                        </tr>
                       <?php/* } */?>
                        </tbody>
                    </table>
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