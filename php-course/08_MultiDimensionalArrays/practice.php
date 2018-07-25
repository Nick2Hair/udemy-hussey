<?php
	
	//Constants
	define("TITLE", "Multi-Dimensional Arrays");
	
	//Variables
	$my_name	= "Brad Hussey";
	$lesson_num	= 8;
	
	//Array
	$moustaches = array (

					array (
					
						"name"				=> "Handlebar",
						"creep_factor"		=> "High",
						"avg_growth_days"	=> 14
					
					),
					
					array (
					
						"name"				=> "Salvador Dali",
						"creep_factor"		=> "Extreme",
						"avg_growth_days"	=> 62
					
					),
					
					array (
					
						"name"				=> "Fu Manchu",
						"creep_factor"		=> "Very High",
						"avg_growth_days"	=> 58
					
					)

			  );
	
	function traverseMultiArray($arr) {
		$string = "";
		foreach($array as $value) {
			foreach($value as $key => $val) {
				if($key === "name") {
					$string = "<h2>The <?php echo $value; ?> Moustache!</h2>"
					echo $string;
				}
			}
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Tutorial <?php echo $lesson_num; ?>: <small><?php echo $TITLE; ?></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h2>The <!-- MOUSTACHE NAME --> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><!-- CREEP FACTOR --></strong> and takes <strong><!-- GROWTH DAYS --> days</strong> to grow on average.</strong></p>
				
				<!-- REPEAT ABOVE 2X -->
				
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the lecture</a>
			
			<hr>
			
			<small>&copy;<!-- YEAR --> - <!-- YOUR NAME --></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
