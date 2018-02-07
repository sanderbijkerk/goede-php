<?php
	date_default_timezone_set("Europe/Amsterdam");
	$time = date("H:i");
	
	if ($time < 6) {
		$message = 'Goede nacht!';
		$class = 'goedenacht';
	}	
	elseif ($time < 12) {
		$message = 'Goede morgen!';
		$class = 'goedemorgen';
	}
	elseif ($time < 18) {
		$message = 'Goede middag!';
		$class = 'goedemiddag';
	}
	elseif ($time < 24) {
		$message = 'Goede avond!';
		$class = 'goedeavond';
	}
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Goede morgen/middag/avond/nacht</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="<?php echo $class ?>">
	<div class="message">
		<?php
		echo $message;
		echo "<br>Het is nu " . $time;
		?>
	</div>
</body>
</html>