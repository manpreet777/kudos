

<?php/* include("applicationtop.php") ; */?>
<?php/*
$page='charts';
*/?>
<?php/* include("header.php");*/?>

<!-- breadcrumbs -->
<div class="breadcrumbs">
<ol class="breadcrumb">
  <li><a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a></li>
  <li class="active">Charts</li>
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
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Morris.js</strong> Charts</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div class="row">
                      
                      <div class="col-md-3">
                        
                        <h5>Line chart</h5>
                        <div id="line-example" style="height: 250px;"></div>

                      </div>

                      <div class="col-md-3">
                        
                        <h5>Line Area chart</h5>
                        <div id="line-area-example" style="height: 250px;"></div>
                        

                      </div>

                      <div class="col-md-3">
                        
                        <h5>Bar chart</h5>
                        <div id="bar-example" style="height: 250px;"></div>

                      </div>

                      <div class="col-md-3">
                        
                        <h5 class="text-left">Donut chart</h5>
                        <div id="donut-example" style="height: 250px;"></div>

                      </div>

                    </div>

                  </div>
                  <!-- /tile body -->
                
                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#morrisModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="morrisModal" tabindex="-1" role="dialog" aria-labelledby="morrisCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="morrisCode">Morris.js Charts tile - Source Code</h4>
                        </div>
                        <div class="modal-body">

<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Morris.js&lt;/strong&gt; Charts&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
                    
    &lt;div class="row"&gt;
      
      &lt;div class="col-md-3"&gt;
        
        &lt;h5&gt;Line chart&lt;/h5&gt;
        &lt;div id="line-example" style="height: 250px;"&gt;&lt;/div&gt;

      &lt;/div&gt;

      &lt;div class="col-md-3"&gt;
        
        &lt;h5&gt;Line Area chart&lt;/h5&gt;
        &lt;div id="line-area-example" style="height: 250px;"&gt;&lt;/div&gt;
        

      &lt;/div&gt;

      &lt;div class="col-md-3"&gt;
        
        &lt;h5&gt;Bar chart&lt;/h5&gt;
        &lt;div id="bar-example" style="height: 250px;"&gt;&lt;/div&gt;

      &lt;/div&gt;

      &lt;div class="col-md-3"&gt;
        
        &lt;h5 class="text-left"&gt;Donut chart&lt;/h5&gt;
        &lt;div id="donut-example" style="height: 250px;"&gt;&lt;/div&gt;

      &lt;/div&gt;

    &lt;/div&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

// Morris line chart

Morris.Line({
  element: 'line-example',
  data: [
    { y: '2009', a: 15,  b: 5 },
    { y: '2010', a: 20,  b: 10 },
    { y: '2011', a: 35,  b: 25 },
    { y: '2012', a: 40, b: 30 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B'],
  lineColors:['#16a085','#FF0066']
});

// Morris line area chart

Morris.Area({
  element: 'line-area-example',
  data: [
    { y: '2009', a: 10,  b: 3 },
    { y: '2010', a: 14,  b: 5 },
    { y: '2011', a: 8,  b: 2 },
    { y: '2012', a: 20, b: 15 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B'],
  lineColors:['#a2d200','#d2d2d2'],
  lineWidth:'0',
  grid: false,
  fillOpacity:'0.5'
});

// Morris bar chart

Morris.Bar({
  element: 'bar-example',
  data: [
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B'],
  barColors:['#ff4a43','#1693A5']
});

// Morris donut chart

Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20}
  ],
  colors: ['#00a3d8', '#2fbbe8', '#72cae7']
});

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Sparkline</strong> Charts</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div class="row">
                      
                      <div class="col-md-4">
                        
                        <h5>Line chart</h5>
                        <span id="sparkline01"></span>

                      </div>

                      <div class="col-md-4">
                        
                        <h5>Bar chart</h5>
                        <span id="sparkline02" data-values="5,6,7,2,1,-4,-2,4,6,8" data-type="bar" data-height="250px"></span>

                      </div>

                      <div class="col-md-4 text-center">
                        
                        <h5 class="text-left">Pie chart</h5>
                        <span id="sparkline03"></span>

                      </div>

                    </div>

                  </div>
                  <!-- /tile body -->
                
                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#sparklinesModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="sparklinesModal" tabindex="-1" role="dialog" aria-labelledby="sparklinesCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="sparklinesCode">Sparkline Charts tile - Source Code</h4>
                        </div>
                        <div class="modal-body">


<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Sparkline&lt;/strong&gt; Charts&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;div class="row"&gt;
      
      &lt;div class="col-md-4"&gt;
        
        &lt;h5&gt;Line chart&lt;/h5&gt;
        &lt;span id="sparkline01"&gt;&lt;/span&gt;

      &lt;/div&gt;

      &lt;div class="col-md-4"&gt;
        
        &lt;h5&gt;Bar chart&lt;/h5&gt;
        &lt;span id="sparkline02" data-values="5,6,7,2,1,-4,-2,4,6,8" data-type="bar" data-height="250px"&gt;&lt;/span&gt;

      &lt;/div&gt;

      &lt;div class="col-md-4 text-center"&gt;
        
        &lt;h5 class="text-left"&gt;Pie chart&lt;/h5&gt;
        &lt;span id="sparkline03"&gt;&lt;/span&gt;

      &lt;/div&gt;

    &lt;/div&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

// Sparkline Line Chart
$('#sparkline01').sparkline([15,16,18,17,16,18,25,26,23], {
  type: 'line', 
  width: '100%',
  height:'250px',
  fillColor: 'rgba(34, 190, 239, .3)',
  lineColor: 'rgba(34, 190, 239, .5)',
  lineWidth: 2,
  spotRadius: 5,
  valueSpots:[5,6,8,7,6,8,5,4,7],
  minSpotColor: '#eaf9fe',
  maxSpotColor: '#00a3d8',
  highlightSpotColor: '#00a3d8',
  highlightLineColor: '#bec6ca',
  normalRangeMin: 0
});
$('#sparkline01').sparkline([1,2,1,3,1,2,4,1,3], {
  type: 'line', 
  composite: true,
  width: '100%',
  height:'250px',
  fillColor: 'rgba(255, 74, 67, .6)',
  lineColor: 'rgba(255, 74, 67, .8)',
  lineWidth: 2,
  minSpotColor: '#ffeced',
  maxSpotColor: '#d90200',
  highlightSpotColor: '#d90200',
  highlightLineColor: '#bec6ca',
  spotRadius: 5,
  valueSpots:[2,3,4,3,1,2,4,1,3],
  normalRangeMin: 0
}); 

// Sparkline Bar Chart

var $el = $('#sparkline02');

var values = $el.data('values').split(',').map(parseFloat);
var type = $el.data('type') || 'line' ;
var height = $el.data('height') || 'auto';

var parentWidth = $el.parent().width();
var valueCount = values.length;
var barSpacing = 5;

var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

$el.sparkline(values, {
  width:'100%',
  type: type,
  height: height,
  barWidth: barWidth, 
  barSpacing: barSpacing,
  barColor: '#16a085',
  negBarColor: '#FF0066'
});

// Sparkline Pie Chart

$('#sparkline03').sparkline([5,10,20,15 ], {
  type: 'pie',
  width: 'auto',
  height: '250px',
  sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
});

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->

                </section>
                <!-- /tile -->

              </div>
              <!-- col 12 -->

              <!-- col 8 -->
              <div class="col-md-8">
                              
                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Line</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="line-chart" class="flot-chart" data-type="lines" data-width="100%" data-height="250px" data-font-color="#717171" data-legend="hidden" data-tool-tip="show">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #cd97eb;">Sales</th>
                          <th style="color : #a2d200;">Orders</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>JAN</th>
                          <td>254</td>
                          <td>25</td>
                        </tr>
                        <tr>
                          <th>FEB</th>
                          <td>584</td>
                          <td>345</td>
                        </tr>
                        <tr>
                          <th>MAR</th>
                          <td>85</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <th>APR</th>
                          <td>428</td>
                          <td>654</td>
                        </tr>
                        <tr>
                          <th>MAY</th>
                          <td>512</td>
                          <td>971</td>
                        </tr>
                        <tr>
                          <th>JUN</th>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>JUL</th>
                          <td>212</td>
                          <td>356</td>
                        </tr>
                        <tr>
                          <th>AUG</th>
                          <td>684</td>
                          <td>128</td>
                        </tr>
                        <tr>
                          <th>SEP</th>
                          <td>692</td>
                          <td>163</td>
                        </tr>
                        <tr>
                          <th>OCT</th>
                          <td>987</td>
                          <td>354</td>
                        </tr>
                        <tr>
                          <th>NOV</th>
                          <td>1865</td>
                          <td>985</td>
                        </tr>
                        <tr>
                          <th>DEC</th>
                          <td>2158</td>
                          <td>1214</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->
                

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#lineChartModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="lineChartModal" tabindex="-1" role="dialog" aria-labelledby="lineChartCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="lineChartCode">Line Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">

<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Line&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;table id="line-chart" class="flot-chart" data-type="lines" data-width="100%" data-height="250px" data-font-color="#717171" data-legend="hidden" data-tool-tip="show"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;th style="color : #cd97eb;"&gt;Sales&lt;/th&gt;
          &lt;th style="color : #a2d200;"&gt;Orders&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;th&gt;JAN&lt;/th&gt;
          &lt;td&gt;254&lt;/td&gt;
          &lt;td&gt;25&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;FEB&lt;/th&gt;
          &lt;td&gt;584&lt;/td&gt;
          &lt;td&gt;345&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;MAR&lt;/th&gt;
          &lt;td&gt;85&lt;/td&gt;
          &lt;td&gt;120&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;APR&lt;/th&gt;
          &lt;td&gt;428&lt;/td&gt;
          &lt;td&gt;654&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;MAY&lt;/th&gt;
          &lt;td&gt;512&lt;/td&gt;
          &lt;td&gt;971&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;JUN&lt;/th&gt;
          &lt;td&gt;0&lt;/td&gt;
          &lt;td&gt;0&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;JUL&lt;/th&gt;
          &lt;td&gt;212&lt;/td&gt;
          &lt;td&gt;356&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;AUG&lt;/th&gt;
          &lt;td&gt;684&lt;/td&gt;
          &lt;td&gt;128&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;SEP&lt;/th&gt;
          &lt;td&gt;692&lt;/td&gt;
          &lt;td&gt;163&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;OCT&lt;/th&gt;
          &lt;td&gt;987&lt;/td&gt;
          &lt;td&gt;354&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;NOV&lt;/th&gt;
          &lt;td&gt;1865&lt;/td&gt;
          &lt;td&gt;985&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;DEC&lt;/th&gt;
          &lt;td&gt;2158&lt;/td&gt;
          &lt;td&gt;1214&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

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
      tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
    });
  });
  
};   

initializeFlot();

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile color greensea">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Bar</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="bar-chart" class="flot-chart" data-type="bars" data-bar-width="0.8" data-tool-tip="show" data-width="100%" data-height="250px" data-font-color="white" data-legend="hidden" data-tick-color="rgba(255,255,255,.3)">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #5fdcc3;">Sales</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>JAN</th>
                          <td>254</td>
                        </tr>
                        <tr>
                          <th>FEB</th>
                          <td>584</td>
                        </tr>
                        <tr>
                          <th>MAR</th>
                          <td>85</td>
                        </tr>
                        <tr>
                          <th>APR</th>
                          <td>428</td>
                        </tr>
                        <tr>
                          <th>MAY</th>
                          <td>512</td>
                        </tr>
                        <tr>
                          <th>JUN</th>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>JUL</th>
                          <td>212</td>
                        </tr>
                        <tr>
                          <th>AUG</th>
                          <td>684</td>
                        </tr>
                        <tr>
                          <th>SEP</th>
                          <td>692</td>
                        </tr>
                        <tr>
                          <th>OCT</th>
                          <td>987</td>
                        </tr>
                        <tr>
                          <th>NOV</th>
                          <td>1865</td>
                        </tr>
                        <tr>
                          <th>DEC</th>
                          <td>2158</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->
                
                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#barChartModal">
                    show code
                  </button>
                  <!-- /show code btn -->


                  <!-- Modal -->
                  <div class="modal fade" id="barChartModal" tabindex="-1" role="dialog" aria-labelledby="barChartCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="barChartCode">Bar Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">


<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile color greensea"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Bar&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;table id="bar-chart" class="flot-chart" data-type="bars" data-bar-width="0.8" data-tool-tip="show" data-width="100%" data-height="250px" data-font-color="white" data-legend="hidden" data-tick-color="rgba(255,255,255,.3)"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;th style="color : #5fdcc3;"&gt;Sales&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;th&gt;JAN&lt;/th&gt;
          &lt;td&gt;254&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;FEB&lt;/th&gt;
          &lt;td&gt;584&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;MAR&lt;/th&gt;
          &lt;td&gt;85&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;APR&lt;/th&gt;
          &lt;td&gt;428&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;MAY&lt;/th&gt;
          &lt;td&gt;512&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;JUN&lt;/th&gt;
          &lt;td&gt;0&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;JUL&lt;/th&gt;
          &lt;td&gt;212&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;AUG&lt;/th&gt;
          &lt;td&gt;684&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;SEP&lt;/th&gt;
          &lt;td&gt;692&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;OCT&lt;/th&gt;
          &lt;td&gt;987&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;NOV&lt;/th&gt;
          &lt;td&gt;1865&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;DEC&lt;/th&gt;
          &lt;td&gt;2158&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

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
      tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
    });
  });
  
};   

initializeFlot();

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Stack</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="stack-chart" class="flot-chart" data-type="bars" data-stack="true" data-tool-tip="show" data-width="100%" data-height="250px" data-font-color="#717171" data-legend="hidden" data-y-max="3500">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #555;">Sales</th>
                          <th style="color : #FF0066;">Orders</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th>JAN</th>
                          <td>254</td>
                          <td>125</td>
                        </tr>
                        <tr>
                          <th>FEB</th>
                          <td>584</td>
                          <td>345</td>
                        </tr>
                        <tr>
                          <th>MAR</th>
                          <td>85</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <th>APR</th>
                          <td>428</td>
                          <td>654</td>
                        </tr>
                        <tr>
                          <th>MAY</th>
                          <td>512</td>
                          <td>971</td>
                        </tr>
                        <tr>
                          <th>JUN</th>
                          <td>50</td>
                          <td>120</td>
                        </tr>
                        <tr>
                          <th>JUL</th>
                          <td>212</td>
                          <td>356</td>
                        </tr>
                        <tr>
                          <th>AUG</th>
                          <td>684</td>
                          <td>128</td>
                        </tr>
                        <tr>
                          <th>SEP</th>
                          <td>692</td>
                          <td>163</td>
                        </tr>
                        <tr>
                          <th>OCT</th>
                          <td>987</td>
                          <td>354</td>
                        </tr>
                        <tr>
                          <th>NOV</th>
                          <td>1865</td>
                          <td>985</td>
                        </tr>
                        <tr>
                          <th>DEC</th>
                          <td>2158</td>
                          <td>1214</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#stackChartModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="stackChartModal" tabindex="-1" role="dialog" aria-labelledby="stackChartCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="stackChartCode">Stack Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">

<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Stack&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;table id="stack-chart" class="flot-chart" data-type="bars" data-stack="true" data-tool-tip="show" data-width="100%" data-height="250px" data-font-color="#717171" data-legend="hidden" data-y-max="3500"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;th style="color : #555;"&gt;Sales&lt;/th&gt;
          &lt;th style="color : #FF0066;"&gt;Orders&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;th&gt;JAN&lt;/th&gt;
          &lt;td&gt;254&lt;/td&gt;
          &lt;td&gt;125&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;FEB&lt;/th&gt;
          &lt;td&gt;584&lt;/td&gt;
          &lt;td&gt;345&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;MAR&lt;/th&gt;
          &lt;td&gt;85&lt;/td&gt;
          &lt;td&gt;120&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;APR&lt;/th&gt;
          &lt;td&gt;428&lt;/td&gt;
          &lt;td&gt;654&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;MAY&lt;/th&gt;
          &lt;td&gt;512&lt;/td&gt;
          &lt;td&gt;971&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;JUN&lt;/th&gt;
          &lt;td&gt;50&lt;/td&gt;
          &lt;td&gt;120&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;JUL&lt;/th&gt;
          &lt;td&gt;212&lt;/td&gt;
          &lt;td&gt;356&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;AUG&lt;/th&gt;
          &lt;td&gt;684&lt;/td&gt;
          &lt;td&gt;128&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;SEP&lt;/th&gt;
          &lt;td&gt;692&lt;/td&gt;
          &lt;td&gt;163&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;OCT&lt;/th&gt;
          &lt;td&gt;987&lt;/td&gt;
          &lt;td&gt;354&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;NOV&lt;/th&gt;
          &lt;td&gt;1865&lt;/td&gt;
          &lt;td&gt;985&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;th&gt;DEC&lt;/th&gt;
          &lt;td&gt;2158&lt;/td&gt;
          &lt;td&gt;1214&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

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
      tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
    });
  });
  
};   

initializeFlot();

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Combined</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div id="combined-chart" style="height: 250px;"></div>

                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#combinedChartModal">
                    show code
                  </button>
                  <!-- /show code btn -->


                  <!-- Modal -->
                  <div class="modal fade" id="combinedChartModal" tabindex="-1" role="dialog" aria-labelledby="combinedChartCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="combinedChartCode">Combined Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">


<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Combined&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;div id="combined-chart" style="height: 250px;"&gt;&lt;/div&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

// Combined flot chart 
var d1 = [['JAN', 150], ['FEB', 181], ['Mar', 252], ['APR', 356],['MAY', 851], ['JUN', 1589], ['JUL', 951], ['AUG', 651],['SEP', 591], ['OCT', 382], ['NOV', 951], ['DEC', 741]];
var d2 = [['JAN', 145], ['FEB', 178], ['Mar', 200], ['APR', 350],['MAY', 212], ['JUN', 486], ['JUL', 841], ['AUG', 546],['SEP', 571], ['OCT', 300], ['NOV', 854], ['DEC', 685]];
$.plot('#combined-chart', [
{
  label: 'Last Year',
  data: d1,
  bars: { 
    show: true, 
    barWidth:  0.5, 
    fill:  1, 
    align: 'center'  
  }
},
{
  label: 'This Year',
  data: d2,
  lines: { 
    show: true,
    lineWidth: 3
  }
}],
{
  colors: ['#eaf9fe' ,'#22beef'],
  xaxis: { 
    mode: 'categories',
    tickLength: 0,
    font :{
      lineHeight: 24,
      weight: '300',
      color: '#717171',
      size: 14
    } 
  },
  yaxis: { 
    tickColor: 'rgba(0,0,0,0.2)' ,
    tickFormatter: function number(x) {  var num; if (x >= 1000) { num=(x/1000)+'k'; }else{ num=x; } return num; },
    font :{
      lineHeight: 13,
      weight: '300',
      color: '#717171'
    }
  },  
  grid: { 
    borderWidth: {
      top: 0,
      right: 0, 
      bottom: 1, 
      left: 1
    },
    margin: 13,
    labelMargin:20,
    hoverable: true,
    clickable: true,
    mouseActiveRadius:6,
    color : 'rgba(0,0,0,0.2)' 
  },
  legend: { show: true },
  tooltip: true
});
</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

              </div>
              <!-- /col 8 -->

              <!-- col 4 -->
              <div class="col-md-4">

                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pie</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="pie-chart" class="flot-chart" data-type="pie" data-inner-radius="0.4" data-pie-label="show" data-width="100%" data-height="250px" data-tool-tip="false">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #a2d200;">Sales this month</th>
                          <th style="color : #ffc100;">New Orders</th>                                       
                          <th style="color : #ff4a43;">New Users</th>
                          <th style="color : #22beef;">Visits this month</th>                                        
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th></th>
                          <td>20</td>
                          <td>50</td>
                          <td>10</td>
                          <td>20</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#pieModal">
                    show code
                  </button>
                  <!-- /show code btn -->


                  <!-- Modal -->
                  <div class="modal fade" id="pieModal" tabindex="-1" role="dialog" aria-labelledby="pieCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="pieCode">Pie Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">


<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Pie&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;table id="pie-chart" class="flot-chart" data-type="pie" data-inner-radius="0.4" data-pie-label="show" data-width="100%" data-height="250px" data-tool-tip="false"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;th style="color : #a2d200;"&gt;Sales this month&lt;/th&gt;
          &lt;th style="color : #ffc100;"&gt;New Orders&lt;/th&gt;                                       
          &lt;th style="color : #ff4a43;"&gt;New Users&lt;/th&gt;
          &lt;th style="color : #22beef;"&gt;Visits this month&lt;/th&gt;                                        
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;td&gt;20&lt;/td&gt;
          &lt;td&gt;50&lt;/td&gt;
          &lt;td&gt;10&lt;/td&gt;
          &lt;td&gt;20&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

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
      tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
    });
  });
  
};   

initializeFlot();

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
           
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Pie</strong> Chart</h1>
                    <span class="note">Custom Labels</span>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <table id="pie-chart02" class="flot-chart" data-type="pie" data-inner-radius="0.8" data-pie-label="hidden" data-width="100%" data-height="250px" data-tool-tip="show">
                      <thead>
                        <tr>
                          <th></th>
                          <th style="color : #a2d200;">System space</th>
                          <th style="color : #ffc100;">Free Space</th>                                       
                          <th style="color : #ff4a43;">Applications</th>
                          <th style="color : #22beef;">Music</th>
                          <th style="color : #16a085;">Pictures</th>
                          <th style="color : #1693A5;">Movies</th>
                          <th style="color : #555;">Other</th>                                  
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th></th>
                          <td>2</td>
                          <td>44</td>
                          <td>11</td>
                          <td>15</td>
                          <td>10</td>
                          <td>5</td>
                          <td>13</td>
                        </tr>
                      </tbody>
                    </table>

                    <div class="custom-labels" data-target-flot="#pie-chart02"></div>

                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#pie02Modal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="pie02Modal" tabindex="-1" role="dialog" aria-labelledby="pie02Code" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="pie02Code">Pie Chart with custom labels tile - Source Code</h4>
                        </div>
                        <div class="modal-body">
<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Pie&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;span class="note"&gt;Custom Labels&lt;/span&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;table id="pie-chart02" class="flot-chart" data-type="pie" data-inner-radius="0.8" data-pie-label="hidden" data-width="100%" data-height="250px" data-tool-tip="show"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;th style="color : #a2d200;"&gt;System space&lt;/th&gt;
          &lt;th style="color : #ffc100;"&gt;Free Space&lt;/th&gt;                                       
          &lt;th style="color : #ff4a43;"&gt;Applications&lt;/th&gt;
          &lt;th style="color : #22beef;"&gt;Music&lt;/th&gt;
          &lt;th style="color : #16a085;"&gt;Pictures&lt;/th&gt;
          &lt;th style="color : #1693A5;"&gt;Movies&lt;/th&gt;
          &lt;th style="color : #555;"&gt;Other&lt;/th&gt;                                  
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;th&gt;&lt;/th&gt;
          &lt;td&gt;2&lt;/td&gt;
          &lt;td&gt;44&lt;/td&gt;
          &lt;td&gt;11&lt;/td&gt;
          &lt;td&gt;15&lt;/td&gt;
          &lt;td&gt;10&lt;/td&gt;
          &lt;td&gt;5&lt;/td&gt;
          &lt;td&gt;13&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;

    &lt;div class="custom-labels" data-target-flot="#pie-chart02"&gt;&lt;/div&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

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
      tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
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

  for(var i=0;i&lt;info.length;i++){
    item += '&lt;li style="color:' + colors[i] +'"&gt;&lt;span class="label" style="background-color:' + colors[i] + '"&gt;' + $(data.targetFlot).find("tbody td").eq(i).text() + '%' + '&lt;/span&gt;' + info[i] + '&lt;/li&gt;';
  }

  el.append('&lt;ul class="nolisttypes"&gt;'+item+'&lt;/ul&gt;');
  
});  

initializeFlot();

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Real-Time</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body">
                    
                    <div id="realtime-chart" style="height: 180px;"></div>

                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#realtimeModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="realtimeModal" tabindex="-1" role="dialog" aria-labelledby="realtimeCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="realtimeCode">Real-time Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">


<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile"&gt;

  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Real-Time&lt;/strong&gt; Chart&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body"&gt;
    
    &lt;div id="realtime-chart" style="height: 180px;"&gt;&lt;/div&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

// Real-Time flot chart
var realTimeData = [];
var totalPoints = 30;
var updateInterval = 3000;

function getData() {
  realTimeData.shift();

  while (realTimeData.length &lt; totalPoints) {     
    var y = Math.random() * 100;
    var temp = [];
    realTimeData.push(y);
  }

  var temp = [];
  for (var i = 0; i &lt; realTimeData.length; ++i) {
    temp.push([i, realTimeData[i]])
  }
  return temp;

}

var plot = $.plot('#realtime-chart', [getData()], 
{
  colors: ['#A40778'],
  series: {
    lines: { 
      show: true,
      fill: 0.1 
    },
    shadowSize: 0
  },
  yaxis: { 
    tickColor: 'rgba(0,0,0,.1)',
    min: 0,
    max: 100
  },  
  grid: { 
    borderWidth: {
      top: 0,
      right: 0,
      bottom: 1,
      left: 1
    },
    color :  'rgba(0,0,0,.1)' 
  },
  tooltip: false,
  xaxis: { 
    show: false
  }
});

function update() {
  plot.setData([getData()]);
  plot.draw();
  setTimeout(update, updateInterval);
};

update();

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

                <!-- tile -->
                <section class="tile color grey">

                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Rickshaw</strong> Chart</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile widget -->
                  <div class="tile-widget">
                    <h2><span class="animate-number" data-value="394" data-animation-duration="1600">0</span> GB</h2>
                    <div class="progress progress-little no-radius nomargin">
                      <div class="progress-bar progress-bar-dutch animate-progress-bar" data-percentage="39%" style="width: 0%;"></div>
                    </div>
                    <p class="description"><strong class="white-text">394GB</strong> used of <strong class="white-text">2,048GB</strong> on File Server</p>
                  </div>
                  <!-- /tile widget -->


                  <!-- tile body -->
                  <div class="tile-body paddingtop">
                    <div id="rickshaw-chart"></div>
                  </div>
                  <!-- /tile body -->


                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#rickshawModal">
                    show code
                  </button>
                  <!-- /show code btn -->


                  <!-- Modal -->
                  <div class="modal fade" id="rickshawModal" tabindex="-1" role="dialog" aria-labelledby="rickshawCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="rickshawCode">Rickshaw Chart tile - Source Code</h4>
                        </div>
                        <div class="modal-body">


<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile color grey"&gt;
  
  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1 class="big-thin"&gt;Server Load&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  // tile widget
  &lt;div class="tile-widget"&gt;
    &lt;h2&gt;&lt;span class="animate-number" data-value="394" data-animation-duration="1600"&gt;0&lt;/span&gt; GB&lt;/h2&gt;
    &lt;div class="progress progress-little no-radius nomargin"&gt;
      &lt;div class="progress-bar progress-bar-dutch animate-progress-bar" data-percentage="39%" style="width: 0%;"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;p class="description"&gt;&lt;strong class="white-text"&gt;394GB&lt;/strong&gt; used of &lt;strong class="white-text"&gt;2,048GB&lt;/strong&gt; on File Server&lt;/p&gt;
  &lt;/div&gt;
  // /tile widget


  //tile body
  &lt;div class="tile-body paddingtop"&gt;
    //generate chart here
    &lt;div id="rickshaw-chart"&gt;&lt;/div&gt;
  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

//server load rickshaw chart
var graph;

var seriesData = [ [], []];
var random = new Rickshaw.Fixtures.RandomData(50);

for (var i = 0; i &lt; 50; i++) {
  random.addData(seriesData);
}

graph = new Rickshaw.Graph( {
  element: document.querySelector("#serverload-chart"),
  height: 150,
  renderer: 'area',
  series: [
    {
      data: seriesData[0],
      color: '#1693A5',
      name:'File Server'
    },{
      data: seriesData[1],
      color: '#e2e2e2',
      name:'Mail Server'
    }
  ]
} );

var hoverDetail = new Rickshaw.Graph.HoverDetail( {
  graph: graph,
});

setInterval( function() {
  random.removeData(seriesData);
  random.addData(seriesData);
  graph.update();

},1000);

//animate numbers with class .animate-number with data-value attribute
$(".animate-number").each(function() {
  var value = $(this).data('value');
  var duration = $(this).data('animation-duration');

  $(this).animateNumbers(value, true, duration, "linear");
});

//animate progress bars
$('.animate-progress-bar').each(function(){
  var progress =  $(this).data('percentage');

  $(this).css('width', progress);
})

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

              </div>
              <!-- /col 4 -->

              <!-- col 6 -->
              <div class="col-md-6">

                <!-- tile -->
                <section class="tile">                   
                
                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>Easy Pie</strong> Charts</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body text-center">
                    
                    <div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;">
                      <div class="percentage" data-percent="30" data-size="110"><span>30</span>%</div>
                      <div class="label">New users</div>
                    </div>

                    <div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;">
                      <div class="percentage" data-percent="45" data-size="110" data-scale-color="false" data-bar-color="#16a085"><span>45</span>%</div>
                      <div class="label">New orders</div>
                    </div>

                    <div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;">
                      <div class="percentage" data-percent="8" data-size="110" data-line-cap="butt" data-line-width="8"><span>8</span>%</div>
                      <div class="label">Sales</div>
                    </div>

                    <div class="easypiechart inline" style="width: 140px;height: 140px;line-height: 140px;">
                      <div class="percentage" data-percent="24" data-size="140" data-line-cap="round" data-line-width="10" data-scale-color="false" data-bar-color="#A40778"><span>24</span>%</div>
                      <div class="label">Visits</div>
                    </div>

                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#easypieModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="easypieModal" tabindex="-1" role="dialog" aria-labelledby="easypieCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="easypieCode">Easy Pie Charts tile - Source Code</h4>
                        </div>
                        <div class="modal-body">

<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile color grey"&gt;
  
  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;Easy Pie&lt;/strong&gt; Charts&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header

  //tile body
  &lt;div class="tile-body text-center"&gt;
    
    &lt;div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;"&gt;
      &lt;div class="percentage" data-percent="30" data-size="110"&gt;&lt;span&gt;30&lt;/span&gt;%&lt;/div&gt;
      &lt;div class="label"&gt;New users&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;"&gt;
      &lt;div class="percentage" data-percent="45" data-size="110" data-scale-color="false" data-bar-color="#16a085"&gt;&lt;span&gt;45&lt;/span&gt;%&lt;/div&gt;
      &lt;div class="label"&gt;New orders&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="easypiechart inline" style="width: 110px;height: 110px;line-height: 110px;"&gt;
      &lt;div class="percentage" data-percent="8" data-size="110" data-line-cap="butt" data-line-width="8"&gt;&lt;span&gt;8&lt;/span&gt;%&lt;/div&gt;
      &lt;div class="label"&gt;Sales&lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="easypiechart inline" style="width: 140px;height: 140px;line-height: 140px;"&gt;
      &lt;div class="percentage" data-percent="24" data-size="140" data-line-cap="round" data-line-width="10" data-scale-color="false" data-bar-color="#A40778"&gt;&lt;span&gt;24&lt;/span&gt;%&lt;/div&gt;
      &lt;div class="label"&gt;Visits&lt;/div&gt;
    &lt;/div&gt;

  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

// Generate easy-pie charts
var charts = $('.easypiechart .percentage');
charts.easyPieChart({
  animate: 2000,
  onStart: function(value) {
    $(this.el).find('span').animateNumbers(Math.floor(100*Math.random()));
  }
});

//update instance every 5 sec
window.setInterval(function() {

  // refresh easy pie chart
  charts.each(function() {
    $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
  });

}, 5000);

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

              </div>
              <!-- /col 6 -->

              <!-- col 6 -->
              <div class="col-md-6">
                                
                <!-- tile -->
                <section class="tile">                   
                
                  <!-- tile header -->
                  <div class="tile-header">
                    <h1><strong>JustGage</strong> Charts</h1>
                    <div class="controls">
                      <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                      <a href="#" class="remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- /tile header -->

                  <!-- tile body -->
                  <div class="tile-body text-center">
                    <div id="gauge01" class="inline-block" style="width:180px; height: 160px;"></div>
                    <div id="gauge02" class="inline-block" style="width:180px; height: 160px;"></div>
                    <div id="gauge03" class="inline-block" style="width:180px; height: 160px;"></div>
                    <div id="gauge04" class="inline-block" style="width:180px; height: 160px;"></div>
                  </div>
                  <!-- /tile body -->

                  <!-- show code btn -->
                <button class="btn show-code" data-toggle="modal" data-target="#justgageModal">
                    show code
                  </button>
                  <!-- /show code btn -->

                  <!-- Modal -->
                  <div class="modal fade" id="justgageModal" tabindex="-1" role="dialog" aria-labelledby="justgageCode" aria-hidden="true">
                    <div class="modal-dialog wide">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title" id="justgageCode">JustGage Charts tile - Source Code</h4>
                        </div>
                        <div class="modal-body">

<!-- Source Code -->

<pre class="prettyprint linenums">
//tile
&lt;section class="tile color grey"&gt;
  
  //tile header
  &lt;div class="tile-header"&gt;
    &lt;h1&gt;&lt;strong&gt;JustGage&lt;/strong&gt; Charts&lt;/h1&gt;
    &lt;div class="controls"&gt;
      &lt;a href="#" class="refresh"&gt;&lt;i class="fa fa-refresh"&gt;&lt;/i&gt;&lt;/a&gt;
      &lt;a href="#" class="remove"&gt;&lt;i class="fa fa-times"&gt;&lt;/i&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  // /tile header


  //tile body
  &lt;div class="tile-body text-center"&gt;
    &lt;div id="gauge01" class="inline-block" style="width:180px; height: 160px;"&gt;&lt;/div&gt;
    &lt;div id="gauge02" class="inline-block" style="width:180px; height: 160px;"&gt;&lt;/div&gt;
    &lt;div id="gauge03" class="inline-block" style="width:180px; height: 160px;"&gt;&lt;/div&gt;
    &lt;div id="gauge04" class="inline-block" style="width:180px; height: 160px;"&gt;&lt;/div&gt;
  &lt;/div&gt;
  // /tile body

&lt;/section&gt;
// /tile

//****************************//
//*********** jquery *********//
//****************************//

// Generate justGage charts

var g01 = new JustGage({
  id: "gauge01", 
  value: 67, 
  min: 0,
  max: 100,
  title: "New Users",
  titleFontColor : "#717171"
}); 

var g02 = new JustGage({
  id: "gauge02",
  value : 30,
  title : "Custom Width",
  min: 0,
  max: 100,
  gaugeWidthScale: .3,
  titleFontColor : "#717171"
}); 

var g03 = new JustGage({
  id: "gauge03",
  value : 92,
  title : "Animation",
  min: 0,
  max: 100,
  startAnimationType: 'bounce',
  refreshAnimationType: 'bounce',
  refreshAnimationTime: 2500,
  titleFontColor : "#717171"
});

var g04 = new JustGage({
  id: "gauge04",
  value : 72,
  title : "Donut Style",
  min: 0,
  max: 100,
  donut: true,
  titleFontColor : "#717171"
}); 

//update instance every 5 sec
window.setInterval(function() {

  // refresh justGage charts
  g01.refresh(getRandomInt(0, 100));
  g02.refresh(getRandomInt(0, 100));
  g03.refresh(getRandomInt(0, 100));
  g04.refresh(getRandomInt(0, 100));

}, 5000);

</pre>
<!-- /Source Code -->

                        </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- /.modal -->
                
                </section>
                <!-- /tile -->

              </div>
              <!-- /col 6 -->
              
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
   
    <script src="js/plugins/jquery.animateNumbers.js"></script>

    <script src="js/plugins/flot/jquery.flot.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.categories.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.stack.min.js"></script>
    <script src="js/plugins/graphtable/jquery.graphTable-0.3.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>

    <script src="js/plugins/rickshaw/raphael-min.js"></script> 
    <script src="js/plugins/rickshaw/d3.v2.js"></script>
    <script src="js/plugins/rickshaw/rickshaw.min.js"></script>

    <script src="js/plugins/jquery.sparkline.min.js"></script>

    <script src="js/plugins/morris/morris.min.js"></script>

    <script src="js/plugins/jquery.easypiechart.min.js"></script>

    <script src="js/plugins/justgage/justgage.js"></script>


    <script>
    $(function(){
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
            tooltipOpts: { content: (pie ? '%p.0%, %s':'<b>%s</b> :  %y') }
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

      // Real-Time flot chart
      var realTimeData = [];
      var totalPoints = 30;
      var updateInterval = 3000;

      function getData() {
        realTimeData.shift();

        while (realTimeData.length<totalPoints) {     
          var y = Math.random() * 100;
          var temp = [];
          realTimeData.push(y);
        }

        var temp = [];
        for (var i = 0; i<realTimeData.length; ++i) {
          temp.push([i, realTimeData[i]])
        }
        return temp;

      }

      var plot = $.plot('#realtime-chart', [getData()], 
      {
        colors: ['#A40778'],
        series: {
          lines: { 
            show: true,
            fill: 0.1 
          },
          shadowSize: 0
        },
        yaxis: { 
          tickColor: 'rgba(0,0,0,.1)',
          min: 0,
          max: 100
        },  
        grid: { 
          borderWidth: {
            top: 0,
            right: 0,
            bottom: 1,
            left: 1
          },
          color :  'rgba(0,0,0,.1)' 
        },
        tooltip: false,
        xaxis: { 
          show: false
        }
      });

      function update() {
        plot.setData([getData()]);
        plot.draw();
        setTimeout(update, updateInterval);
      };

      update(); 


      // Combined flot chart 
      var d1 = [['JAN', 150], ['FEB', 181], ['Mar', 252], ['APR', 356],['MAY', 851], ['JUN', 1589], ['JUL', 951], ['AUG', 651],['SEP', 591], ['OCT', 382], ['NOV', 951], ['DEC', 741]];
      var d2 = [['JAN', 145], ['FEB', 178], ['Mar', 200], ['APR', 350],['MAY', 212], ['JUN', 486], ['JUL', 841], ['AUG', 546],['SEP', 571], ['OCT', 300], ['NOV', 854], ['DEC', 685]];
      $.plot('#combined-chart', [
      {
        label: 'Last Year',
        data: d1,
        bars: { 
          show: true, 
          barWidth:  0.5, 
          fill:  1, 
          align: 'center'  
        }
      },
      {
        label: 'This Year',
        data: d2,
        lines: { 
          show: true,
          lineWidth: 3
        }
      }],
      {
        colors: ['#eaf9fe' ,'#22beef'],
        xaxis: { 
          mode: 'categories',
          tickLength: 0,
          font :{
            lineHeight: 24,
            weight: '300',
            color: '#717171',
            size: 14
          } 
        },
        yaxis: { 
          tickColor: 'rgba(0,0,0,0.2)' ,
          tickFormatter: function number(x) {  var num; if (x >= 1000) { num=(x/1000)+'k'; }else{ num=x; } return num; },
          font :{
            lineHeight: 13,
            weight: '300',
            color: '#717171'
          }
        },  
        grid: { 
          borderWidth: {
            top: 0,
            right: 0, 
            bottom: 1, 
            left: 1
          },
          margin: 13,
          labelMargin:20,
          hoverable: true,
          clickable: true,
          mouseActiveRadius:6,
          color : 'rgba(0,0,0,0.2)' 
        },
        legend: { show: true },
        tooltip: true
      });


      // Rickshaw chart
      var graph;

      var seriesData = [ [], []];
      var random = new Rickshaw.Fixtures.RandomData(50);

      for (var i = 0; i<50; i++) {
        random.addData(seriesData);
      }

      graph = new Rickshaw.Graph( {
        element: document.querySelector('#rickshaw-chart'),
        height: 170,
        renderer: 'area',
        series: [
          {
            data: seriesData[0],
            color: '#1693A5',
            name:'File Server'
          },{
            data: seriesData[1],
            color: '#e2e2e2',
            name:'Mail Server'
          }
        ]
      } );

      var hoverDetail = new Rickshaw.Graph.HoverDetail( {
        graph: graph,
      });

      setInterval( function() {
        random.removeData(seriesData);
        random.addData(seriesData);
        graph.update();

      },1000);

      //animate numbers with class .animate-number with data-value attribute
      $('.animate-number').each(function() {
        var value = $(this).data('value');
        var duration = $(this).data('animation-duration');

        $(this).animateNumbers(value, true, duration, 'linear');
      });

      //animate progress bars
      $('.animate-progress-bar').each(function(){
        var progress =  $(this).data('percentage');

        $(this).css('width', progress);
      });

      // Sparkline Line Chart
      $('#sparkline01').sparkline([15,16,18,17,16,18,25,26,23], {
        type: 'line', 
        width: '100%',
        height:'250px',
        fillColor: 'rgba(34, 190, 239, .3)',
        lineColor: 'rgba(34, 190, 239, .5)',
        lineWidth: 2,
        spotRadius: 5,
        valueSpots:[5,6,8,7,6,8,5,4,7],
        minSpotColor: '#eaf9fe',
        maxSpotColor: '#00a3d8',
        highlightSpotColor: '#00a3d8',
        highlightLineColor: '#bec6ca',
        normalRangeMin: 0
      });
      $('#sparkline01').sparkline([1,2,1,3,1,2,4,1,3], {
        type: 'line', 
        composite: true,
        width: '100%',
        height:'250px',
        fillColor: 'rgba(255, 74, 67, .6)',
        lineColor: 'rgba(255, 74, 67, .8)',
        lineWidth: 2,
        minSpotColor: '#ffeced',
        maxSpotColor: '#d90200',
        highlightSpotColor: '#d90200',
        highlightLineColor: '#bec6ca',
        spotRadius: 5,
        valueSpots:[2,3,4,3,1,2,4,1,3],
        normalRangeMin: 0
      }); 

      // Sparkline Bar Chart

      var $el = $('#sparkline02');

      var values = $el.data('values').split(',').map(parseFloat);
      var type = $el.data('type') || 'line' ;
      var height = $el.data('height') || 'auto';

      var parentWidth = $el.parent().width();
      var valueCount = values.length;
      var barSpacing = 5;

      var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

      $el.sparkline(values, {
        width:'100%',
        type: type,
        height: height,
        barWidth: barWidth, 
        barSpacing: barSpacing,
        barColor: '#16a085',
        negBarColor: '#FF0066'
      });

      // Sparkline Pie Chart

      $('#sparkline03').sparkline([5,10,20,15 ], {
        type: 'pie',
        width: 'auto',
        height: '250px',
        sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
      });

      // Morris line chart

      Morris.Line({
        element: 'line-example',
        data: [
          { y: '2009', a: 15,  b: 5 },
          { y: '2010', a: 20,  b: 10 },
          { y: '2011', a: 35,  b: 25 },
          { y: '2012', a: 40, b: 30 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        lineColors:['#16a085','#FF0066']
      });

      // Morris line area chart

      Morris.Area({
        element: 'line-area-example',
        data: [
          { y: '2009', a: 10,  b: 3 },
          { y: '2010', a: 14,  b: 5 },
          { y: '2011', a: 8,  b: 2 },
          { y: '2012', a: 20, b: 15 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        lineColors:['#a2d200','#d2d2d2'],
        lineWidth:'0',
        grid: false,
        fillOpacity:'0.5'
      });

      // Morris bar chart

      Morris.Bar({
        element: 'bar-example',
        data: [
          { y: '2009', a: 75,  b: 65 },
          { y: '2010', a: 50,  b: 40 },
          { y: '2011', a: 75,  b: 65 },
          { y: '2012', a: 100, b: 90 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        barColors:['#ff4a43','#1693A5']
      });

      // Morris donut chart

      Morris.Donut({
        element: 'donut-example',
        data: [
          {label: "Download Sales", value: 12},
          {label: "In-Store Sales", value: 30},
          {label: "Mail-Order Sales", value: 20}
        ],
        colors: ['#00a3d8', '#2fbbe8', '#72cae7']
      });

      // Generate easy-pie charts
      var charts = $('.easypiechart .percentage');
      charts.easyPieChart({
        animate: 2000,
        onStart: function(value) {
          $(this.el).find('span').animateNumbers(Math.floor(100*Math.random()));
        }
      });

      // Generate justGage charts

      var g01 = new JustGage({
        id: "gauge01", 
        value: 67, 
        min: 0,
        max: 100,
        title: "New Users",
        titleFontColor : "#717171"
      }); 

      var g02 = new JustGage({
        id: "gauge02",
        value : 30,
        title : "Custom Width",
        min: 0,
        max: 100,
        gaugeWidthScale: .3,
        titleFontColor : "#717171"
      }); 

      var g03 = new JustGage({
        id: "gauge03",
        value : 92,
        title : "Animation",
        min: 0,
        max: 100,
        startAnimationType: 'bounce',
        refreshAnimationType: 'bounce',
        refreshAnimationTime: 2500,
        titleFontColor : "#717171"
      });

      var g04 = new JustGage({
        id: "gauge04",
        value : 72,
        title : "Donut Style",
        min: 0,
        max: 100,
        donut: true,
        titleFontColor : "#717171"
      }); 

      //update instance every 5 sec
      window.setInterval(function() {

        // refresh easy pie chart
        charts.each(function() {
          $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
        });

        // refresh justGage charts
        g01.refresh(getRandomInt(0, 100));
        g02.refresh(getRandomInt(0, 100));
        g03.refresh(getRandomInt(0, 100));
        g04.refresh(getRandomInt(0, 100));

      }, 5000);

    })
      
    </script>
  </body>
</html>