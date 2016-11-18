 <?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SCHNEIDER - Personal Finance Insights</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
	<link rel="stylesheet" href="style.css" />
	<script>
	var storeddata;
	$( document ).ready(function() {
		$.get("https://4d92e694-a8fa-4131-b83e-1d666c66aed6:zJdWIlmdxS@twcservice.mybluemix.net/api/weather/v1/geocode/44.4833814/-88.1303748/forecast/hourly/48hour.json?units=m&language=en-US",function(data){
			//console.log(data); 
			$("#message2").html("It's currently " + data.forecasts[0].golf_category);
		});
		$("#start").click(function(){
			$("#phase1").slideUp("slow").promise($("#phase2").slideDown("slow"));
			
			$("#checkonit").button().click(function(){
				$.get("https://d51402f8-500a-4ef5-987f-81dbf720d5cb:vTcxB4D1l2NW@gateway.watsonplatform.net/tone-analyzer/api/v3/tone?version=2016-05-19&text=" + $("#myfeelings").val(), function(data){
					$("#phase2").slideUp("slow").promise($("#phase3").fadeIn("slow"));
					storeddata = data;
					var htmlstr = "";
					$.each(storeddata.document_tone.tone_categories[0].tones,function(index,value){
						htmlstr += value.tone_name + ": " + (value.score * 100) + "%<br>"; 
					});
					$("#wethink").html(htmlstr);
				});
			});
		});
	});

	</script>
</head>
<body>
	<div id="phase1">
		<table>
			<tr>
				<td style='width: 30%;'>
					<i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
				</td>
				<td>
					<h1 id = "message">Get Started On Your Future Today</h1>
					<p class='description'>When you are ready <a id="start" class="blue">you can click here</a>.</p>
					<h2 id = "message2"></h2>
				</td>
			</tr>
		</table>
	</div>
	<div id="phase2">
		<h1>Enter your feelings:</h1>
		<textarea id="myfeelings" style="width:100%;height:100px;"></textarea>
		<button type="button" id="checkonit">Get Insight</button>
		<em>No insights provided by this tool are binding</em>
	</div>
	<div id="phase3">
		<h1>Okay!</h1>
		<p>Overall, here are some insights about your current situation</p>
		<div id="results"></div>
		<em>Give it another go! <a href="/">Click here!</a></em>
	</div>
</body>
</html>
