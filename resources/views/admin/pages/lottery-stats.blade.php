<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='lotto-stats';
$r='ls1';
*/?>
<?php/* include("header.php");*/?>
<?php/*
	$querymega = $obj_Common->get_query("lotto_cat = 'megasena'", "users_lotto", "DISTINCT(user_id)");
	$numsmega = mysql_num_rows($querymega);
	$queryeuro = $obj_Common->get_query("lotto_cat = 'euromillions'", "users_lotto", "DISTINCT(user_id)");
	$numseuro = mysql_num_rows($queryeuro);
	$querypower = $obj_Common->get_query("lotto_cat = 'powerball'", "users_lotto", "DISTINCT(user_id)");
	$numspower = mysql_num_rows($querypower);
	$resArr = array(
		"mega"	=>	$numsmega,
		"euro"	=>	$numseuro,
		"power"	=>	$numspower
		);

*/?>
<!-- breadcrumbs -->
<div class="breadcrumbs">
<ol class="breadcrumb">
  <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
  <li class="active">Site Lotto Stats</li>
</ol>
</div>
<!-- /breadcrumbs -->

<!-- content main container -->
<div class="main">

<!-- row -->
<div class="row">
  <div class="col-md-12">
	
	<!-- tile -->

	<section class="tile">

	  <!-- tile header -->	  
	  <div class="tile-header">
		<h1><strong>Site Lotto</strong> users</h1>
		<!--<span class="note">Custom Labels</span>-->
		<?php/* if(isset($_REQUEST['msg'])){*/?>
       		<div class="success">
     			<?php/* echo $_REQUEST['msg'];*/?>
      		</div>
      	<?php/* } */?>
	  </div>
	  <!--	//tile header
			//tile body-->
	  <div class="tile-body lotto-users">
		
		<table id="pie-chart02" class="flot-chart" data-type="pie" data-inner-radius="0.8" data-pie-label="hidden" data-width="100%" data-height="250px" data-tool-tip="show">
		  <thead>
			<tr>
			  <th></th>
			  <th style="color : #a2d200;">Megasena</th>
			  <th style="color : #ffc100;">Euromillions</th>                                       
			  <th style="color : #ff4a43;">Powerball</th>
			  <!--<th style="color : #22beef;">Music</th>
			  <th style="color : #16a085;">Pictures</th>
			  <th style="color : #1693A5;">Movies</th>
			  <th style="color : #555;">Other</th>-->                                  
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th></th>
			  <td><?php/* echo $resArr["mega"]; */?></td>
			  <td><?php/* echo $resArr["euro"]; */?></td>
			  <td><?php/* echo $resArr["power"]; */?></td>
			  <!--<td>15</td>
			  <td>10</td>
			  <td>5</td>
			  <td>13</td>-->
			</tr>
		  </tbody>
		</table>

		<div class="custom-labels" data-target-flot="#pie-chart02"></div><!-- //custom-labels --->

		</div><!--// /tile body -->

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
	<script src="js/plugins/flot/jquery.flot.min.js"></script>
	<script src="js/plugins/flot/jquery.flot.pie.min.js"></script>

	<script src="js/plugins/jquery.easypiechart.min.js"></script>
	<script src="js/plugins/graphtable/jquery.graphTable-0.3.js"></script>
	
	<script language="javascript">
		var bars = false;
		var lines = true;
		var pie = false;

		var initializeFlot = function(){
		  
		  var el = $('table.flot-chart');

		  el.each(function(){
			var data = $(this).data();
			var colors = [];
			var gridColor= data.tickColor || 'rgba(0,0,0,.1)';

			$(this).find('thead th:not(:first)').each(function() {
			  colors.push($(this).css('color'));
			});

			if(data.type){
			  bars = data.type.indexOf('bars') != -1;
			  lines = data.type.indexOf('lines') != -1;
			  pie = data.type.indexOf('pie') != -1;
			}

			$(this).graphTable({
			  series: 'columns',
			  position: 'replace',
			  colors: colors,
			  width: data.width,
			  height: data.height
			},
			{
			  series: { 
				stack: data.stack,
				pie: {
				  show: pie,
				  innerRadius: data.innerRadius || 0,
				  label:{ 
					show: data.pieLabel=='show' ? true:false
				  }
				},
				bars: {
				  show: bars,
				  barWidth: data.barWidth || 0.5,
				  fill: data.fill || 1,
				  align: 'center'
				},
				lines: { 
				  show: lines,
				  fill: 0.1,
				  lineWidth: 3
				},
				shadowSize: 0,
				points: {
				  radius: 4
				}
			  },
			  xaxis: {
				mode: 'categories',
				tickLength: 0,
				font :{
				  lineHeight: 24,
				  weight: '300',
				  color: data.fontColor,
				  size: 14
				} 
			  },
			  yaxis: { 
				tickColor: gridColor,
				tickFormatter: function number(x) {  var num; if (x >= 1000) { num=(x/1000)+'k'; }else{ num=x; } return num; },
				max: data.yMax,
				font :{
				  lineHeight: 13,
				  weight: '300',
				  color: data.fontColor
				}
			  },  
			  grid: { 
				borderWidth: {
				  top: 0,
				  right: 0,
				  bottom: 1,
				  left: 1
				},
				borderColor:gridColor,
				margin: 13,
				minBorderMargin:0,              
				labelMargin:20,
				hoverable: true,
				clickable: true,
				mouseActiveRadius:6
			  },
			  legend: { show: data.legend=='show' ? true:false },
			  tooltip: data.toolTip=='show' ? true:false,
			  tooltipOpts: { content: (pie ? '%p.0%, %s':'%s :  %y') }
			});
		  });
		  
		};

		$('.custom-labels').each(function () {
		  var el= $(this);
		  var data = el.data();
		  var colors = [];
		  var info = [];
		  var item = '';

		  $(data.targetFlot).find('thead th:not(:first)').each(function() {
			colors.push($(this).css('color'));
			info.push($(this).text());
		  });

		  for(var i=0;i<info.length;i++){
			item += '<li style="color:' + colors[i] +'"><span class="label" style="background-color:' + colors[i] + '">' + $(data.targetFlot).find("tbody td").eq(i).text() + '%' + '</span>' + info[i] + '</li>';
		  }

		  el.append('<ul class="nolisttypes">'+item+'</ul>');
		  
		});  

		initializeFlot();
	</script>
   </body>
</html>