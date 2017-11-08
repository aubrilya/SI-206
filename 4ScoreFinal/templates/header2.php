<?php

	$fName = basename(__FILE__);

$classarray = array(null, null , null ,null, null);
$currentpage =basename($_SERVER['PHP_SELF']);
if($currentpage == 'index.php'){
	$classarray[0] = ' class = "current"';
}
else if($currentpage == 'aboutus.php'){
	$classarray[1] = ' class = "current"';
}
else if($currentpage == 'profile.php'){
	$classarray[2] = ' class = "current"';
}
else if($currentpage == 'testimonials.php'){
	$classarray[3] = ' class = "current"';
}
// else if($currentpage == 'signup.php'){
// 	$classarray[4] = ' class = "current"';
// }
// $logo = '__DIR__.logoxs";
// echo "$logo";
	echo "<header class=\"header container\">
				<div class=\"clearfix\">
					<div class=\"sm-col-12 md-col-10 lg-col-8 mx-auto center\">
						
						<img class=\"mb0 center mt3\" id=\"logo\" src=\"templates/logoxs.png\" alt=\"Colorful 4 Score Logo\" />
						<h1 class=\"mb0 center\">Welcome to 4Score!</h1> 
						<p class=\"h3 mb2 center\">If you're using our site, you're never far from historical dates.</p>
						
						<nav class=\"\">
						<ul class=\"list-reset center\">
							<li class=\"button\" id=\"navbutton\">
							<a href=\"index.php\"$classarray[0]>HOME
							</a>
							</li>
							<li class=\"button\" id=\"navbutton\">
							<a href=\"aboutus.php\"$classarray[1]>ABOUT US</a>
							</li>
							<br class=\"md-hide\">
							<li class=\"button\" id=\"navbutton\">
							<a href=\"profile.php\"$classarray[2]>PROFILE</a>
							</li>
							<li class=\"button\" id=\"navbutton\">
							<a href=\"testimonials.php\"$classarray[3]>TESTIMONIALS</a>
						</ul>
						</nav>

					</div>

					<div class=\"lg-col-10 mx-auto\">
						
			
					</div>
					<hr>
					<p class=\"h5 md-gray center\">";
					$testimonials=array("test1.txt", "test2.txt", "test3.txt");
					$testrand=array_rand($testimonials);
					$testpath=__DIR__.'/textfiles/'.$testimonials[$testrand];
					include_once($testpath);
					echo"</p>";

				
				if($currentpage == 'index.php') {
					echo "<div class=\"center\">
					<button class=\"button mb3\" onclick=\"usernameSignup()\">Sign up today!</button>
					
				    	<script>
				    		function usernameSignup() {
				    			document.getElementById('usernameInput').style.display=\"block\";
				    		}

				    	</script>
				    	<div class=\"half-width mx-auto\">

							<form class=\"\" action=\"signup.php\" method=\"POST\" id=\"usernameInput\">
					    	<!-- #the action field tells the form where to process -->
					    		<fieldset class=\"fieldset-reset bbox\">
							    	<label for=\"username\" class=\"left\">Username</label>
							    	<input id=\"username\" class=\"block full-width field-light my2\" type=\"text\" name=\"username\" required placeholder=\"SneakyFrisker\">
							    	<button class=\"button center mb2\" type=\"submit\">Get started</button>
							   		<br>
							   </fieldset>
							</form>
						</div>
					</div>
				</div>

			</header>";
		}

?>