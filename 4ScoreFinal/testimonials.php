<!DOCTYPE html>
	<html>
		<head lang="en">
			<meta charset="utf-8">
			<title>Historical Character Match</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="style/default.css">
			<link type="text/css" href="style/basscss.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="style/bootstrap.min">
			<link type="text/css" rel="stylesheet" href="style/style.css">	
			<?php
  			$fName = basename(__FILE__);
  			?>
		</head>
		<body>
			<?php include("templates/header.php"); 
				
					$bgClass = array("blue1", "blue2", "purple", "grey", "white");
					$n = array_rand($bgClass);
					$color = $bgClass[$n];
			
			echo "<section class=\"flex flex-wrap center $color\">";
				$testimonialpath=__DIR__.'/templates/textfiles/';
				$testar= scandir($testimonialpath);
				array_shift($testar);
				array_shift($testar);
				$testnum=count($testar);

				for ($i=0; $i<$testnum; $i++){
					$testpath=__DIR__.'/templates/textfiles/'.$testar[$i];
					
					include_once ($testpath);				
				}

			?>
		</section>

			<?php include("templates/footer.php"); ?>	
				
		</body>
	</html>


