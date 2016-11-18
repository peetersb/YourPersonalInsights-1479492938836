<!DOCTYPE html>
<html>
<head>
	<title>SCHNEIDER - Personal Finance Insights</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<link ref="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="style.css" />
	<script>
	$("#start").click(function(){
		$("#phase1").slideUp("fast");
		$("#phase2").slideDown("fast");
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
