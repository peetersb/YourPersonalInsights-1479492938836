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
	<link rel="stylesheet" href="style.css" />
	<script>
	$( document ).ready(function() {
		$.get("https://4d92e694-a8fa-4131-b83e-1d666c66aed6:zJdWIlmdxS@twcservice.mybluemix.net/api/weather/v1/geocode/44.4833814/-88.1303748/forecast/hourly/48hour.json?units=m&language=en-US",function(data){
			console.log(data); 
			$("#message2").html("It's currently " + data.forecast[0].golf_category);
		});
		$("#start").click(function(){
			$("#phase1").slideUp("slow").promise($("#phase2").slideDown("slow"));
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
					<p class='description'>When you are ready <a id="start" class="blue">you should click here</a>.</p>
					<h2 id = "message2"></h2>
				</td>
			</tr>
		</table>
	</div>
	<div id="phase2">
		<h1>Enter your details!</h1>
		<table>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name" id="name"></td>
			</tr>
		</table>
		<em>No insights provided by this tool are binding</em>
	</div>
</body>
</html>
