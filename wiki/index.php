<?php 
require_once('tabs/tabclass.php');
require_once('tabs/home.php');
$home = new Home(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Robsutar - Wiki</title>
	<link rel="stylesheet" type="text/css" href="styles/mainstyle.css">
</head>
<body>

<div class="header">
	<div class="logo">
		
	</div>
	<div class="search">
		
	</div>
	<div class="tabs">
		<div class="home">
			
		</div>
		<div class="guildes">
			
		</div>
		<div class="references">
			
		</div>
	</div>
</div>

<div class="semi-content">
	<div class="menu">
	
	</div>

	<div class="content">
		<?php echo $home->sendDiv(); ?>
	</div>
</div>

</body>
</html>