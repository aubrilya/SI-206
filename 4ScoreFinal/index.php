<!DOCTYPE html>
	<html>
		<head lang="en">
			<meta charset="utf-8">
			<title>Historical Character Match</title>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text.css" href="style/default.css">
			<link type="text/css" href="style/basscss.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text.css" href="style/bootstrap.min">
			<link type="text/css" rel="stylesheet" href="style/style.css">

			<?php
  			$fName = basename(__FILE__);
  			?>
			
		</head>

		<body>

			<?php
			include("templates/header.php");
			?>	

			<section class="container">
				<div class="clearfix">
					<div class="lg-col-12 mx-auto center">
						<p class="h3 center">Here are some of your matches:</p>

					<div class="flex flex-wrap">
							<a href="" class=""><img class="m2" src="imgs/amelia-earhart.jpg" alt="The Beautiful Amelia"/></a>
						
							<a href="" class=""><img class="m2" src="imgs/elenorroosee.jpg" alt="The Beautiful Elenor"/></a>
							
							<a href="" class=""><img class="m2" src="imgs/marie.jpg" alt="The Beautiful Amelia"/></a>
					</div>




						<!-- <ul class="list-reset center mb3">
							<li class="inline m4"><img src="imgs/amelia-earhart.jpg" alt="The Beautiful Amelia"/></li>
							<li class="inline m4"><img src="imgs/elenorroosee.jpg" alt="The Beautiful Elenor"/></li>
							<li class="inline m4"><img src="imgs/marie.jpg" alt="The Beautiful Amelia"/></li>
						</ul> -->
					
					</div>
				</div>
			</section>


			<?php
			include("templates/footer.php");
			?>	

		</body>
	</html>

