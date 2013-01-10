
<?php require  'find_data.php'; 
$arr_online=array();
$arr_time_line=array('1','2','3','4','5');

$arr_render_data=array(
	"title_text"=>"'game_id:308\'s TITLE'",
	"title_sub"=>"sub 308",
	"xaxis"=>"",
	"yaxis"=>"online numbers",

);
print_r($arr_result);
echo $arr_render_data["title_text"];
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>title for game value</title>

<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript">

$(function () {
	var chart;
	$(document).ready(function() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'container',
				type: 'line'
			},
			title: {
				//text: 'TEST!!!!!!TITLE'
				text: <?php echo $arr_render_data["title_text"];?>
			},
			subtitle: {
				text: <?php echo "'sub title'";?>
			},
			xAxis: {
				//categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
				categories: <?php echo "['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']";?>
			},
			yAxis: {
				title: {
					text: <?php echo "'Yaxis'";?>
				}
			},
			tooltip: {
				enabled: false,
				formatter: function() {
					return '<b>'+ this.series.name +'</b><br/>'+
					this.x +': '+ this.y +'°„C';
				}
			},
			plotOptions: {
				line: {
					dataLabels: {
						enabled: true
					},
					enableMouseTracking: false
				}
			},
			series: [{
				name: 'Tokyo-2',
				data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
			}, {
				name: 'London',
				data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
			}]
		});
	});

})

</script>


</head>
<body>
<script src="./js/highcharts.js"></script>
<script src="./js/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>

</body>
</html>



