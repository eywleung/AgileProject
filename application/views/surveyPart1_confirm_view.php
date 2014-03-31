<?php
//if(isset($q3_result)){
//	print_r($q3_result);
//}
?>
<div class="question">
	<p class="title">Survey Result To Date</p>
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
			var options = {'width':600,'height':300};

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
				['Choice', 'Number', { role: 'style' }],
			    <?php
				foreach($q2_result as $k=>$v){
					echo "['".$k."', ".$v;
					if($q2_answer == $k){
						echo ", 'color: #b5111b' ";
					}
					else {
						echo ", 'color: #0054a6' ";
					}
					echo "],";
				}?>
			    ]);

			// Set chart options
			var options = {'width':600,'height':300,legend: { position: "none" } };

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
			// Create the data table.
			var data = google.visualization.arrayToDataTable([
				['Choice', 'Number', { role: 'style' }],
			    <?php
				foreach($q3_result as $k=>$v){
					echo "['".$k."', ".$v;
					if($q3_answer == $k){
						echo ", 'color: #b5111b' ";
					}
					else {
						echo ", 'color: #0054a6' ";
					}
					echo "],";
				}?>
			    ]);

			// Set chart options
			var options = {'width':600,'height':300,legend: { position: "none" } };

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
				['Choice', 'Number', { role: 'style' }],
			    <?php
				foreach($q4_result as $k=>$v){
					echo "['".$k."', ".$v;
					if($q4_answer == $k){
						echo ", 'color: #b5111b' ";
					}
					else {
						echo ", 'color: #0054a6' ";
					}
					echo "],";
				}?>
			    ]);

			// Set chart options
			var options = { 'width':600,'height':300,legend: { position: "none" } };

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
				['Choice', 'Number', { role: 'style' }],
			    <?php
				foreach($q6_result as $k=>$v){
					echo "['".$k."', ".$v;
					if($q6_answer == $k){
						echo ", 'color: #b5111b' ";
					}
					else {
						echo ", 'color: #0054a6' ";
					}
					echo "],";
				}?>
			    ]);

			// Set chart options
			var options = { 'width':600,'height':300,legend: { position: "none" }, axisTitlesPosition: 'in'};

			// Instantiate and draw our chart, passing in some options.
			var chart = new google.visualization.BarChart(document.getElementById('chart_div_q6'));
			chart.draw(data, options);
		}
    </script>
    <p>1.	Which of the following best describes your current role within your organization?</p>
	<div id="chart_div_q1"></div>
	<p>2.	Which of the following best describes the current, overall project methodology used for <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr> in your organization?</p>
	<div id="chart_div_q2"></div>
	<p>3.	How would you describe your organization’s current use of traditional and/or agile methodologies?</p>
	<div id="chart_div_q3"></div>
	<p>4.	Overall, how satisfied are you with the current project management practices within your organization for <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr>?</p>
	<div id="chart_div_q4"></div>

	<p>6.	If you responded above that your organization used agile or a combination of agile and waterfall practices, when did your organization first start using agile methods within <abbr title='IT-enabled business projects are defined as projects to enhance organizational capabilities through the use of information technology.'>IT-enabled business projects</abbr>?</p>
	<div id="chart_div_q6"></div>
</div>

<div class="question">
	<p class="title"><?php if($continueToPart2){ ?>Part One <?php }?>Completed - Thank You</p>
	<p>Thanks very much for your participation in <?php if($continueToPart2){ ?>the first part of <?php }?>our research. We really appreciate the opportunity to learn from your experiences. </p>
	<p>To get the report from the complete sample, leave your email with us here:</p>
	<p><input type='email' id='signUpForReport_text'><input type='button' id='signUpForReport_button' value="Sign Up"></p>
	<div id="signUpForReport_message" title="Signup Complete">
		<p>
			<span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
			Thank you for signing up. Upon completion of this research, you will receive a copy of the result at <strong><span id='signUpForReport_email'></span></strong>.</p> 
		</p>
	</div>
</div>

<?php if($continueToPart2){ ?>
<div class="question">
	<p class="title">Continue to Follow-up Questions</p>
	<p>If you would be willing to spend another 10 minutes with us, and receive a more in depth report on the use of agile methods within organizations,</p>



	<form method="post">
		<p style='text-align: center; font-size: 20px; font-weight: bold;'>Do You Have More to Say on this topic?</p>
		<p style='text-align: center;'><input type='submit' name='toPartTwo' value='Please Continue to Follow-up Questions' class="bigButton"></p>
	</form>

	<p>If you have any questions or concerns about this research, please contact Dr. Reich at <a href='mailto:Blaize_Reich@sfu.ca'>Blaize_Reich@sfu.ca</a> or Dr. Gemino at <a href='mailto:Andrew_Gemino@sfu.ca'>Andrew_Gemino@sfu.ca</a>, or our Associate Dean of Research at <a href='Olga_Volkoff@sfu.ca'>Olga_Volkoff@sfu.ca</a></p>
</div>
<?php } ?>