<!doctype html>
<html>

<head>
	<title>Polar Area Chart</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
	<script src="Chart.min.js"></script>
	<script src="utils.js"></script>
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
	</style>

</head>

<body>
	<div id="canvas-holder" style="width:50%">
		<canvas id="chart-area"></canvas>
	</div>
	<script>
	var res1=localStorage.getItem("storeResult1");
	var res2=localStorage.getItem("storeResult2");
	var res3=localStorage.getItem("storeResult3");
	var res4=localStorage.getItem("storeResult4");
	var res5=localStorage.getItem("storeResult5");
	var res6=localStorage.getItem("storeResult6");
	var res7=localStorage.getItem("storeResult7");
	var res8=localStorage.getItem("storeResult8");
	var res9=localStorage.getItem("storeResult9");
	var res10=localStorage.getItem("storeResult10");
	var overall= localStorage.getItem("storeOverall");
	var me=12;

		var config = {
			data: {
				datasets: [{
					  data: [parseInt(res2),parseInt(res3),parseInt(res4),parseInt(res5),parseInt(res6),parseInt(res7),parseInt(res8),parseInt(res9),parseInt(res10)],

					backgroundColor: [
						'#ffff99', '#ffffcc', '#ccff66', '#ccff99', '#ccffcc', '#ffcc00', '#ffcc66', '#ff6600', '#ff6666',
					],

				}],

			},
			options: {
				responsive: true,
				legend: {
					position: 'right',
				},
				title: {
					display: true,
					text: 'Chart.js Polar Area Chart'
				},
				scale: {
					ticks: {
						beginAtZero: true
					},
					reverse: false
				},
				animation: {
					animateRotate: true,
					animateScale: false
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area');
			window.myPolarArea = Chart.PolarArea(ctx, config);
		};



	</script>
</body>

</html>
