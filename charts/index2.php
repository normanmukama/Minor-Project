<?php
 
$dataPoints1 = array(
	array("label"=> "Solar Thermal", "y"=> array(174, 383)),
	array("label"=> "Wind offshore", "y"=> array(170, 270)),
	array("label"=> "Natural Gas", "y"=> array(178, 238)),
	array("label"=> "Solar PV", "y"=> array(98, 193)),
	array("label"=> "ICGC", "y"=> array(106, 136)),
	array("label"=> "Biomass", "y"=> array(90, 117)),
	array("label"=> "Nuclear", "y"=> array(92, 101)),
	array("label"=> "Conventional Coal", "y"=> array(87, 119)),
	array("label"=> "Hydro", "y"=> array(69, 107)),
	array("label"=> "Wind onshore", "y"=> array(66, 82)),
	array("label"=> "Geothermal", "y"=> array(44, 52))
);
 
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Estimated Levelized Cost of Electricity in US by 2020"
	},
	theme: "light1",
	animationEnabled: true,
	axisY: {
		prefix: "$",
		suffix: "/Mwh",
		includeZero: false
	},
	data: [
		{
			type: "rangeColumn",
			yValueFormatString: "$#,##0/Mwh",
			toolTipContent: "{label}<br>Minimum: {y[0]}<br>Maximum: {y[1]}",
			dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
		}
	]
});
 
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                              