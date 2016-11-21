<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='lottery-stats';
$r='ls1';
*/?>

<?php/*
if($_REQUEST["s"] == "false")
	{
		$_SESSION["con1"] = ""; 
		$_SESSION["pn"] = "";
	}
	else
	{
		$con = $_SESSION["con1"];
	}
	if($_REQUEST["curpage"] !='')
	{
		$_SESSION["pn"] = $_REQUEST["curpage"];
	}
	else
	{
		if($_SESSION["pn"] !='')
		{
			$_REQUEST["curpage"] = $_SESSION["pn"];
		}
	}

	$pageSize =15;
	$ct = strtotime(date('d-m-Y'));
	$resultarray = $login_obj->pagno(" tbl_values where  vl_id!='' ".$con.$order,$pageSize);
	$pageno = $resultarray[0];
	$resultselect = $resultarray[1];
	$check=mysql_num_rows($resultselect);
	*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
<ol class="breadcrumb">
  <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
  <li class="active">Values</li>
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
        <h1><strong>Values</strong> </h1>
          <?php/* if($_REQUEST['msg']!=''){*/?>
       <div class="success">
     <?php/* echo $_REQUEST['msg'];*/?>
      </div>
      <?php/* } */?>
      </div>
    
        <div class="tile-header">
      <a href="values_add.php">Add New</a>
      </div>
      <!-- /tile header -->

      <!-- tile body -->
      <div class="tile-body nopadding">
        <?php/*
	if($check<=0)
	{
		echo 'No Record Found';
	}
	else
	{
	*/?>
        <table class="table">
          <thead>
            <tr>
              <th>S No.</th>
              <th>Title</th>
              <th>Value 1</th>
               <th>Value 2</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
			<?php/*
			$sno=0;
            while($result = $db_obj->fetch_object($resultselect))
            {
				$sno++;
				if($sno%2==0)
				$cl='success';
				else
				$cl='warning';
				$tit = $result->vl_title;
				$v1 = $result->vl_value1;
				$v2 = $result->vl_value2;
			*/?>
			
            <tr class="<?php/* echo $cl;*/?>">
              <td><?php/* echo $sno;*/?></td>
              <td><?php/* echo $tit;*/?></td>
                 <td><?php/* echo $v1;*/?></td>
                    <td><?php/* echo $v2;*/?></td>
               
              <td> <a href="values_edit.php?id=<?php/* echo $result->vl_id;*/?>" target="_parent" data-toggle="tooltip" title="Edit" class="btn btn-mini btn-success"><i class="icon-pencil">Edit</i></a>
              </td>
            </tr>
           <?php/* } */?>
           <?php/* if($pageno>1){  $login_obj->paging_no("values.php",$pageno,"5");} */?>
          </tbody>
        </table>
		<?php/* } */?>
      </div>
      <!-- /tile body -->

    </section>
    <!-- /tile -->

  </div>
  <!-- /col 12 -->
  <div class="col-md-12 megasena-content">

  	<h2>Lotto Generator</h2>
  	<div class="row">
  		
  		<div class="megasena-btns col-md-6">
  			<h3>Mega-Sena <span class="date"><em>(29th Feb, 2016)</em></span></h3>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type="button" class="btn generate-btn">Generate</button>
  		</div><!-- ///megasena-btns -->
  		<div class="megasena-last-draw col-md-6">
  			<h3>Mega-Sena <span class="date"><em>(19th Feb, 2016)</em></span></h3>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  		</div><!-- ///megasena-btns -->

  	</div><!-- ///row -->
  
  </div><!-- //col-md-12 - -->
  <div class="col-md-12 powerball-content">

  	<div class="row">
  		
  		<div class="powerball-btns col-md-6">
  			<h3>Powerball <span class="date"><em>(25th Feb, 2016)</em></span></h3>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn btn-star' >00</button>
  			<button type='button' class='num btn btn-star' >00</button>
  			<button type="button" class="btn generate-btn">Generate</button>
  		</div><!-- ///powerball-btns -->
  		<div class="powerball-last-draw col-md-6">
  			<h3>Powerball <span class="date"><em>(19th Feb, 2016)</em></span></h3>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn btn-star' >00</button>
  			<button type='button' class='num btn btn-star' >00</button>
  		</div><!-- ///powerball-btns -->

  	</div><!-- ///row -->
  
  </div><!-- //col-md-12 - -->
  <div class="col-md-12 euromillions-content">

  	<div class="row">
  		
  		<div class="euromillions-btns col-md-6">
  			<h3>Euro-millions <span class="date"><em>(25th Feb, 2016)</em></span></h3>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn btn-ball' >00</button>
  			<button type='button' class='num btn btn-ball' >00</button>
  			<button type="button" class="btn generate-btn">Generate</button>
  		</div><!-- ///euromillions-btns -->
  		<div class="euromillions-last-draw col-md-6">
  			<h3>Euro-millions <span class="date"><em>(19th Feb, 2016)</em></span></h3>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn' >00</button>
  			<button type='button' class='num btn btn-ball' >00</button>
  			<button type='button' class='num btn btn-ball' >00</button>
  		</div><!-- ///euromillions-btns -->

  	</div><!-- ///row -->
  
  </div><!-- //col-md-12 - -->
  
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
    <!-- script to generate numbers for mega-sena -->
    <script type="text/javascript">
	    $('.megasena-btns .generate-btn').click(function(){
	    	var i=0;
	    	while(i <= 60)
	    		{
	    			if(i<10)
	    				$('.megasena-btns .num').text('0'+i);
	    			else
	    				$('.megasena-btns .num').text(i);
	    			//$.slow();
	    			i=i+1;
	    		}
	    });
	   </script>
    <!-- ///script to generate numbers for mega-sena -->  
  </body>
</html>