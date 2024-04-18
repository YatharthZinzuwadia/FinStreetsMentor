<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {
		'packages': ['corechart']
	});
	google.charts.setOnLoadCallback(drawChart);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Month', 'Payment'],
			<?= $chart_data; ?>
			// ['2013', 1000],
			// ['2014', 1170],
			// ['2015', 660],
			// ['2016', 1030]
		]);

		var options = {
			title: 'Payment Tracking',
			hAxis: {
				title: 'Month',
				titleTextStyle: {
					color: '#333'
				}
			},
			vAxis: {
				minValue: 0
			}
		};

		var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
		chart.draw(data, options);
	}
</script>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h1>Dashboard <small>Statistics and more</small></h1>
			<div class="alert alert-dismissable alert-warning">
				<button data-dismiss="alert" class="close" type="button">&times;</button>
				Welcome to the admin dashboard! Feel free to review all pages and modify the layout to your needs.
				<br />
				This theme uses the <a href="https://www.shieldui.com">ShieldUI</a> JavaScript library for the
				additional data visualization and presentation functionality illustrated here.
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Payment Tracking</h3>
				</div>
				<div class="panel-body">
					<div id="chart_div" style="width: 100%; height: 500px;"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
