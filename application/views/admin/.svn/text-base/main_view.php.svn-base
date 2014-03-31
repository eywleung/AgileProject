<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1.0', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChartQ1);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChartQ1() {
      // Create the data table.
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Choice');
      data.addColumn('number', 'Number');
      //data.addColumn({type:'boolean', role:'emphasis'});
      data.addRows([
      <?php
      foreach($q1_result as $k=>$v){
        echo "['".$k."', ".$v."],";
      }?>
      ]);

      // Set chart options
      var options = {'width':400,'height':300};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div_q1'));
      chart.draw(data, options);
      chart.setSelection([{row: 0}]);
    }

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChartQ2);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChartQ2() {
      // Create the data table.
      var data = google.visualization.arrayToDataTable([
        ['Choice', 'Number'],
          <?php
        foreach($q2_result as $k=>$v){
          echo "['".$k."', ".$v."],";
        }?>
          ]);

      // Set chart options
      var options = {'width':400,'height':300,legend: { position: "none" } };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div_q2'));
      chart.draw(data, options);
    }

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChartQ3);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChartQ3() {
      // Create the data table.
      var data = google.visualization.arrayToDataTable([
        ['Choice', 'Number'],
          <?php
        foreach($q3_result as $k=>$v){
          echo "['".$k."', ".$v."],";
        }?>
          ]);

      // Set chart options
      var options = {'width':400,'height':300,legend: { position: "none" } };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div_q3'));
      chart.draw(data, options);
    }

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChartQ4);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChartQ4() {
      // Create the data table.
      var data = google.visualization.arrayToDataTable([
        ['Choice', 'Number'],
          <?php
        foreach($q4_result as $k=>$v){
          echo "['".$k."', ".$v."],";
        }?>
          ]);

      // Set chart options
      var options = { 'width':400,'height':300,legend: { position: "none" } };

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div_q4'));
      chart.draw(data, options);
    }

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChartQ6);

    // Callback that creates and populates a data table,
    // instantiates the pie chart, passes in the data and
    // draws it.
    function drawChartQ6() {
      // Create the data table.
      var data = google.visualization.arrayToDataTable([
        ['Choice', 'Number'],
          <?php
        foreach($q6_result as $k=>$v){
          echo "['".$k."', ".$v."],";
        }?>
          ]);

      // Set chart options
      var options = { 'width':600,'height':300,legend: { position: "none" }, axisTitlesPosition: 'in'};

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.BarChart(document.getElementById('chart_div_q6'));
      chart.draw(data, options);
    }
    </script>

<h1 class="page-header">Dashboard</h1>
<p>Hello, <?php echo $user; ?>. Welcome to the Administrative Portal.</p>

<h2 class="sub-header">Question 1-4</h2>
<div class="row placeholders">
  <div class="col-xs-12 col-sm-6 placeholder">
    <div id="chart_div_q1"></div>
    <h4>Question 1</h4>
    <span class="text-muted">Current role</span>
  </div>
  <div class="col-xs-12 col-sm-6 placeholder">
    <div id="chart_div_q2"></div>
    <h4>Question 2</h4>
    <span class="text-muted">Current, overall project methodology used</span>
  </div>
</div>

<div class="row placeholders">
  <div class="col-xs-12 col-sm-6 placeholder">
    <div id="chart_div_q3"></div>
    <h4>Question 3</h4>
    <span class="text-muted">Traditional and/or agile methodologies</span>
  </div>
  <div class="col-xs-12 col-sm-6 placeholder">
    <div id="chart_div_q4"></div>
    <h4>Question 4</h4>
    <span class="text-muted">How satisfied with the current PM practices</span>
  </div>
</div>

<h2 class="sub-header">Question 5</h2>
<p>The following table shows the number of respondents that picks one of those 7 radio buttons</p>
<div class="table-responsive">
<table class="table table-striped">
  <tr>
    <th colspan='3' style='text-align:left; width: 33.33%'>Strongly describes my organization's goals</th>
    <th colspan='3' style='text-align:center; width: 33.33%'>Both goals equally important</th>
    <th colspan='3' style='text-align:right; width: 33.33%'>Strongly describes my organization's goals</th>
  </tr>
  <tr>
    <td colspan="1" style='text-align:left; width: 15%'><abbr title='Projects are on time, on budget'>Efficiency</abbr></td>
    <td style='width:10%'><?php if(isset($q5a_result[1])) echo $q5a_result[1];?></td>
    <td style='width:10%'><?php if(isset($q5a_result[2])) echo $q5a_result[2];?></td>
    <td style='width:10%'><?php if(isset($q5a_result[3])) echo $q5a_result[3];?></td>
    <td style='width:10%'><?php if(isset($q5a_result[4])) echo $q5a_result[4];?></td>
    <td style='width:10%'><?php if(isset($q5a_result[5])) echo $q5a_result[5];?></td>
    <td style='width:10%'><?php if(isset($q5a_result[6])) echo $q5a_result[6];?></td>
    <td style='width:10%'><?php if(isset($q5a_result[7])) echo $q5a_result[7];?></td>
    <td colspan="1" style='text-align:right; width: 15%'><abbr title='Organizational Change Capability'>Innovation</abbr></td>
  </tr>
  <tr>
    <td colspan="1" style='text-align:left; width: 15%'><abbr title='Projects are on time, on budget'>Efficiency</abbr></td>
    <td style='width:10%'><?php if(isset($q5b_result[1])) echo $q5b_result[1];?></td>
    <td style='width:10%'><?php if(isset($q5b_result[2])) echo $q5b_result[2];?></td>
    <td style='width:10%'><?php if(isset($q5b_result[3])) echo $q5b_result[3];?></td>
    <td style='width:10%'><?php if(isset($q5b_result[4])) echo $q5b_result[4];?></td>
    <td style='width:10%'><?php if(isset($q5b_result[5])) echo $q5b_result[5];?></td>
    <td style='width:10%'><?php if(isset($q5b_result[6])) echo $q5b_result[6];?></td>
    <td style='width:10%'><?php if(isset($q5b_result[7])) echo $q5b_result[7];?></td>
    <td colspan="1" style='text-align:right; width: 15%'><abbr title='Organizational Adoption of Project Management Methods'>Project Management Maturity</abbr></td>
  </tr>
  <tr>
    <td colspan="1" style='text-align:left; width: 15%'><abbr title='Projects are on time, on budget'>Efficiency</abbr></td>
    <td style='width:10%'><?php if(isset($q5c_result[1])) echo $q5c_result[1];?></td>
    <td style='width:10%'><?php if(isset($q5c_result[2])) echo $q5c_result[2];?></td>
    <td style='width:10%'><?php if(isset($q5c_result[3])) echo $q5c_result[3];?></td>
    <td style='width:10%'><?php if(isset($q5c_result[4])) echo $q5c_result[4];?></td>
    <td style='width:10%'><?php if(isset($q5c_result[5])) echo $q5c_result[5];?></td>
    <td style='width:10%'><?php if(isset($q5c_result[6])) echo $q5c_result[6];?></td>
    <td style='width:10%'><?php if(isset($q5c_result[7])) echo $q5c_result[7];?></td>
    <td colspan="1" style='text-align:right; width: 15%'><abbr title='Project meets Stakeholder Objectives'>Responsiveness</abbr></td>
  </tr>
  <tr>
    <td colspan="1" style='text-align:left; width: 15%'><abbr title='Organizational Change Capability'>Innovation</abbr></td>
    <td style='width:10%'><?php if(isset($q5d_result[1])) echo $q5d_result[1];?></td>
    <td style='width:10%'><?php if(isset($q5d_result[2])) echo $q5d_result[2];?></td>
    <td style='width:10%'><?php if(isset($q5d_result[3])) echo $q5d_result[3];?></td>
    <td style='width:10%'><?php if(isset($q5d_result[4])) echo $q5d_result[4];?></td>
    <td style='width:10%'><?php if(isset($q5d_result[5])) echo $q5d_result[5];?></td>
    <td style='width:10%'><?php if(isset($q5d_result[6])) echo $q5d_result[6];?></td>
    <td style='width:10%'><?php if(isset($q5d_result[7])) echo $q5d_result[7];?></td>
    <td colspan="1" style='text-align:right; width: 15%'><abbr title='Organizational Adoption of Project Management Methods'>Project Management Maturity</abbr></td>
  </tr>
  <tr>
    <td colspan="1" style='text-align:left; width: 15%'><abbr title='Organizational Change Capability'>Innovation</abbr></td>
    <td style='width:10%'><?php if(isset($q5e_result[1])) echo $q5e_result[1];?></td>
    <td style='width:10%'><?php if(isset($q5e_result[2])) echo $q5e_result[2];?></td>
    <td style='width:10%'><?php if(isset($q5e_result[3])) echo $q5e_result[3];?></td>
    <td style='width:10%'><?php if(isset($q5e_result[4])) echo $q5e_result[4];?></td>
    <td style='width:10%'><?php if(isset($q5e_result[5])) echo $q5e_result[5];?></td>
    <td style='width:10%'><?php if(isset($q5e_result[6])) echo $q5e_result[6];?></td>
    <td style='width:10%'><?php if(isset($q5e_result[7])) echo $q5e_result[7];?></td>
    <td colspan="1" style='text-align:right; width: 15%'><abbr title='Project meets Stakeholder Objectives'>Responsiveness</abbr></td>
  </tr>
  <tr>
    <td colspan="1" style='text-align:left; width: 15%'><abbr title='Organizational Adoption of Project Management Methods'>Project Management Maturity</abbr></td>
    <td style='width:10%'><?php if(isset($q5f_result[1])) echo $q5f_result[1];?></td>
    <td style='width:10%'><?php if(isset($q5f_result[2])) echo $q5f_result[2];?></td>
    <td style='width:10%'><?php if(isset($q5f_result[3])) echo $q5f_result[3];?></td>
    <td style='width:10%'><?php if(isset($q5f_result[4])) echo $q5f_result[4];?></td>
    <td style='width:10%'><?php if(isset($q5f_result[5])) echo $q5f_result[5];?></td>
    <td style='width:10%'><?php if(isset($q5f_result[6])) echo $q5f_result[6];?></td>
    <td style='width:10%'><?php if(isset($q5f_result[7])) echo $q5f_result[7];?></td>
    <td colspan="1" style='text-align:right; width: 15%'><abbr title='Project meets Stakeholder Objectives'>Responsiveness</abbr></td>
  </tr>
</table>
</div>


<h2 class="sub-header">Question 6</h2>
<p>First start using agile methods:</p>
<div id="chart_div_q6"></div>

<h2 class="sub-header">Question 7</h2>

<div class="table-responsive">
<?php echo $q7_table; ?>
</div>


