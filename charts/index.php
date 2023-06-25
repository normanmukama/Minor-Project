<?php
 
$dataPoints = array( 
	array("y" => 1200, "label" => "Orphans" ),
	array("y" => 420, "label" => "Donors" ),
	array("y" => 300, "label" => "Guardians" ),
	array("y" => 115, "label" => "Staff" )
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Graphical Presentation"
	},
	axisY: {
		title: "Number of People"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## members",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 330px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>         