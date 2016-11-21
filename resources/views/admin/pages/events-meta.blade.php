<?php/* include("applicationtop.php") ; */?>
<?php/*
if( isset($_REQUEST['action']) && $_REQUEST['action'] == 'remove' )
{
    if($obj_Common->update_query("id='".$_REQUEST['id']."'", "event_meta_non_site_members", "is_active='0'"))
      $msg = "Member removed";
    else
      $msg = "Unable to remove member. Please try again later";
}
$page='events_meta';

*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
  <ol class="breadcrumb">
    <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
    <li class="active">Events Meta</li>
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
          <h1><strong>Non-site registered Guests/Hosts/Staff</strong> </h1>
            <?php/* if(isset($_REQUEST['msg']) !=''){*/?>
          <div class="success">
            <?php/* echo $_REQUEST['msg'];*/?>
          </div>
        <?php/* } */?>
        </div>
      
        <!-- /tile header -->

        <!-- tile body -->
        <div class="tile-body">
          
            <div>
                  <h4>Staff<a class="pull-right btn btn-md btn-info" href="events_meta_form.php?rqst=add&cat=staff">Add New</a></h4>
                <table class="table table-responsive table-striped">
                  
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Name</th>
                      <th>Display Picture</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php/*
                      //fetching the guests
                      $q = $obj_Common->get_query('is_active="1" && category="staff"', 'event_meta_non_site_members', "*");
                      if(mysql_num_rows($q) < 1 )
                      {
                        echo "<tr><td colspan='4'>No members yet.</td></tr>";
                      }
                      else
                      {
                        $i=1;
                        while($row = mysql_fetch_assoc($q))
                        {
                    */?>
                    <tr>
                      <td><?php/* echo $i; */?></td>
                      <td><?php/* echo $row['name']; */?></td>
                      <td><img src="images/events/<?php/* echo $row['image']; */?>" class="img-thumbnail img img-responsive" height="100" width="100"></td>
                      <td><a href="events_meta_form.php?<?php/* echo 'id='.$row['id'].'&action=edit'; */?>" class="btn btn-warning">Edit</a><a onclick="return( confirm('Remove member?') )" style="margin: 2px;" href="<?php/* echo $_SERVER["PHP_SELF"].'?id='.$row['id'].'&action=remove'; */?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                    <?php/* $i++; 
                          } } 
                    */?>
                  </tbody>
                </table>
                
                 
            </div>
            <br>
            <hr>
            <br>
            <div>
                <h4>Hosts<a class="pull-right btn btn-md btn-info" href="events_meta_form.php?rqst=add&cat=host">Add New</a></h4>
                
                <table class="table table-responsive table-striped">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Name</th>
                      <th>Display Picture</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php/*
                      //fetching the guests
                      $q = $obj_Common->get_query('is_active="1"  && category="host"', 'event_meta_non_site_members', "*");
                      if(mysql_num_rows($q) < 1 )
                      {
                        echo "<tr><td colspan='4'>No members yet.</td></tr>";
                      }
                      else
                      {
                        $i=1;
                        while($row = mysql_fetch_assoc($q))
                        {
                    */?>
                    <tr>
                      <td><?php/* echo $i; */?></td>
                      <td><?php/* echo $row['name']; */?></td>
                      <td><img src="images/events/<?php/* echo $row['image']; */?>" class="img-thumbnail img img-responsive" height="100" width="100"></td>
                      <td><a href="events_meta_form.php?<?php/* echo 'id='.$row['id'].'&rqst=edit'; */?>" class="btn btn-warning">Edit</a><a onclick="return( confirm('Remove member?') )" style="margin: 2px;" href="<?php/* echo $_SERVER["PHP_SELF"].'?id='.$row['id'].'&action=remove'; */?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                    <?php/* $i++; 
                          } } 
                    */?>
                  </tbody>
                </table>

            </div>
            <br>
            <hr>
            <br>
            <div>
                <h4>Guests<a class="pull-right btn btn-md btn-info" href="events_meta_form.php?rqst=add&cat=guest">Add New</a></h4>
                
                <table class="table table-responsive table-striped">
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Name</th>
                      <th>Display Picture</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php/*
                      //fetching the guests
                      $q = $obj_Common->get_query('is_active="1"  && category="guest"', 'event_meta_non_site_members', "*");
                      if(mysql_num_rows($q) < 1 )
                      {
                        echo "<tr><td colspan='4'>No members yet.</td></tr>";
                      }
                      else
                      {
                        $i=1;
                        while($row = mysql_fetch_assoc($q))
                        {
                    */?>
                    <tr>
                      <td><?php/* echo $i; */?></td>
                      <td><?php/* echo $row['name']; */?></td>
                      <td><img src="images/events/<?php/* echo $row['image']; */?>" class="img-thumbnail img img-responsive" height="100" width="100"></td>
                      <td><a href="events_meta_form.php?<?php/* echo 'id='.$row['id'].'&action=edit'; */?>" class="btn btn-warning">Edit</a><a onclick="return( confirm('Remove member?'))" style="margin: 2px;" href="<?php/* echo $_SERVER["PHP_SELF"].'?id='.$row['id'].'&action=remove'; */?>" class="btn btn-danger">Remove</a></td>
                    </tr>
                    <?php/* $i++; 
                          } } 
                    */?>
                  </tbody>
                </table>

            </div>
          
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