<!doctype html>
<html>
<head>
	<title>TrukTraq - Find Your Food Truck</title>
	<link rel="shortcut icon" href="http://www.billyryu.com/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css" />
	<link rel="stylesheet" href="style.css" media="all" />
	<script>
		$(function() {
		var availableTags = [
		"New York, NY",
		"Brooklyn, NY",
		"Queens, NY",
		"Bronx, NY",
		"Manhattan, NY",
		"Staten Island, NY",
		"New Jersey",
		"San Diego, CA",
		"San Francisco, CA",
		"Los Angeles, CA",
		"San Jose, CA",
		"Austin, TX",
		"Philadelphia, PA",
		"Chicago, IL",
		"Cincinnati, OH"
		];
		$( "#tags" ).autocomplete({
		source: availableTags
		});
		});
	</script>
</head>

<body>
<div id="container">

	<div class="temp">
		<img class="temp_img" src="billy_3d.png" />
		<br />
			<div class="ui-widget">
				<input id="tags" placeholder="Where are you at?" />
			</div>
			
		<br />
		<a href="result/index.php"><button>Search Trucks!</button></a>
	</div>
		
</div><!-- end #container -->
</body>
</html>
