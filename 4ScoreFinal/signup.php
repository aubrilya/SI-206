<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Signup Form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style/default.css">
	<link type="text/css" rel="stylesheet" href="style/basscss.min.css">
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min">
	<link type="text/css" rel="stylesheet" href="style/formStyle.css">
	<link type="text/css" rel="stylesheet" href="style/style.css">

	<!-- <link type="text/css" rel="stylesheet" href="style/formStyle2.css"> -->

	<?php
	$fName = basename(__FILE__);
	?>
			
</head>
<body>
	<?php 
	include('templates/header.php'); 

	// Call in username post variable
	session_unset();

	$_SESSION['username'] =$_POST['username'];
	?>

<section class="container full-color">
	<div class="clearfix">
		<div class="col-12 mx-auto ">
		<div class="sm-col-12 md-col-10 lg-col-8 mx-auto">
			<form class="center" action="<?php echo "profiles/" . $_POST['username'] . ".php";?>" method="POST" novalidate onsubmit="return checkEmail()">
				<fieldset class="fieldset-reset">
					<legend class="mb2"> Meet historical hunks and hotties you've been reading about since 4th grade.</legend>
					<ul class="list-reset">

						<li> 
							<label for="username">Username</label>
							<input id="username" class="field-light m1" name="username" type="text" value="<?php echo $_POST['username'];?>" required>
						</li>


						<li>
							<label for="name">Name</label>
							<input id="name" class="field-light m1" name="name" type="text" placeholder="Joan of Arc" autofocus>
						</li>

						<li>
							<label for="email">Email</label>
							<input class="field-light m1" id="email" name="email" type="email" 
							placeholder="JoanBabe69@hotmail.com" required >
						</li>
						<li>
							<label for="email">Email</label>
							<input class="field-light m1" id="emailValidate" name="email" type="email" 
							placeholder="JoanBabe69@hotmail.com" onchange="validate()" required >
						</li>
						<li>
							<label for="age">Age</label>
							<input class="m1" id="age" name="age" type="text" placeholder="152" onchange="alive()"> 
						</li>	

						<li>
							<label for="gender">Gender</label>

							<input class="field-light" type="radio" name="gender" id="gender">Male
							<input class="field-light" type="radio" name="gender" value="female">Female
							<input class="field-light" type="radio" name="gender" value="other">Other
						</li>

						<li>
							<label for="pref">Preference</label>
							
							<input class="field-light" type="radio" name="pref" id="pref" value="Men">Male
							<input class="field-light" type="radio" name="pref" value="Women">Female
							<input class="field-light" type="radio" name="pref" value="Other">Other
						</li>

						<li>
							<label for="nationality">
							<select id="nationality" name="nationality">
								<option value="">Country...</option>
								<option value="France">France</option>
								<option value="Germany">Germany</option>
								<option value="India">India</option>
								<option value="Italy">Italy</option>
								<option value="Korea North">Korea North</option>
								<option value="Korea Sout">Korea South</option>
								<option value="Mexico">Mexico</option>
								<option value="New Zealand">New Zealand</option>
								<option value="Poland">Poland</option>
								<option value="Russia">Russia</option>
								<option value="Spain">Spain</option>
								<option value="Sweden">Sweden</option>
								<option value="Switzerland">Switzerland</option>
								<option value="United Kingdom">United Kingdom</option>
								<option value="United States of America">United States of America</option>
								<option value="Vatican City State">Vatican City State</option>
							</select>
						</li>

						<li>
							<label for="religion">Religion</label>
							<input class="m1" id="religion" name="religion" type="text" placeholder="Christian"> 
						</li>

						<li>
							<label for="likes">Likes</label>
							<textarea class="full-width field-light m1" type="text" name="likes" id="likes" placeholder="I like my women... I like my men..."></textarea>
						</li>

						<li>
							<label for="dislikes">Dislikes</label>
							<textarea class="full-width field-light m1" type="text" name="dislikes" id="dislikes" placeholder="My pet peeves with significant others are..."></textarea>
						</li>

						<li>
							<label for="hobbies">Hobbies</label>
							<textarea class="full-width field-light m1" type="text" name="hobbies" id="hobbies" placeholder="Sailing, playing basketball, going to the bathroom, eating brocolli"></textarea>
						</li>
				
						<li>
							<label for="tag">Tagline</label>
							<input  class="m1" id="tag" name="tag" type="text" placeholder="Let's get down and dirty! - Gandhi">
						</li>
						
					</ul>
					<button class="button m1" type="submit"onclick="Makefile()"> Submit</button>
				</fieldset>
			</form>

			<?php
				// save html file
			
				$targetFile = "profiles/" . $_POST['username'] . ".php";
				// $File2Copy = fopen("template.php", "r");

				copy('profiles/profile_stock.php', $targetFile);
					// function saveFile() {
					// 	copy("profile_stock.php", $filename2);

					if (file_exists("profiles/" . $_POST['username'] . ".php")) {
			    		echo "Success : New profile has been made";
						} else {
						    echo "Failure: $targetCopy does not exist";
							}
		
					?>

	<script>
	
	function validate(){
		var e1 = document.getElementById("email"); 
		var e2 = document.getElementById("emailValidate");
		if (e1.value != e2.value){
			alert("Please type matching emails");
			return false;
		}
	}

	function alive(){
		var age = document.getElementById("age"); 
		if (age.value < 0){
			alert("Please give a positive age");
			return false;
		}
	}
	</script>

			</div>
		</div>	
		</div>
	</section>
	<?php include('templates/footer.php'); 
		?>
</body>
</html>
