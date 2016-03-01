<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
	
	#calendarSalarie {
		position: absolute;
		/*left:-170px;*/
		width: 20px;
		height: 20px;
		top: 0px;
		cursor: default;
	}
</style>
	<div id="calendarSalarie">
	<?php
	/*$message= 'ça marche';
	mail('environnement.eau@gmail.com', 'Mon Sujet', $message);*/
	$calendar=  file_get_contents('../calendar');
	echo $calendar;
	//file_get_contents('www.google.fr');
	?>
	</div>
</body>
</html>

