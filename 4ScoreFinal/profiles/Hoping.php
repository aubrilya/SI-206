<?php
session_start();
?>
		
<!DOCTYPE html>
	<html lang = "en">

		<head>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text.css" href="style/default.css">
			<link rel="stylesheet" type="../text.css" href="style/bootstrap.min">
			<link type="text/css" href="../style/basscss.min.css" rel="stylesheet">
			<link type="text/css" rel="../stylesheet" href="style/style.css">

			<?php
				$fName = basename(__FILE__);
				?>

			<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
				
		</head>

	<body>

		<?php
		include("templates/header.php");
		?>	

	<?php

		if (isset($_POST['username'])) {
    		$_SESSION['username'] =$_POST['username'];
			}

		if (isset($_POST['name'])) {
    		$_SESSION['name'] =$_POST['name'];
			}

		if (isset($_POST['email'])) {
    		$_SESSION['email'] =$_POST['email'];
			}

		if (isset($_POST['age'])) {
    		$_SESSION['age'] =$_POST['age'];
			}

		if (isset($_POST['gender'])) {
    		$_SESSION['gender'] =$_POST['gender'];
			}

		if (isset($_POST['pref'])) {
    		$_SESSION['pref'] =$_POST['pref'];
			}

		if (isset($_POST['nationality'])) {
    		$_SESSION['nationality'] =$_POST['nationality'];
			}

		if (isset($_POST['religion'])) {
    		$_SESSION['religion'] =$_POST['religion'];
			}

		if (isset($_POST['likes'])) {
    		$_SESSION['likes'] =$_POST['likes'];
			}

		if (isset($_POST['dislikes'])) {
    		$_SESSION['dislikes'] =$_POST['dislikes'];
			}

		if (isset($_POST['hobbies'])) {
    		$_SESSION['hobbies'] =$_POST['hobbies'];
			}

		if (isset($_POST['tag'])) {
    		$_SESSION['tag'] =$_POST['tag'];
			}

		?>

<?php
	
    $filename = "SaveInfo.csv";
    $isItExisting = (file_exists($filename)); 				//check if csv file actually exists

 	$handle = fopen($filename, 'a');						//a = append, w = write
	$msg = "Thank you ". $_SESSION['name'] . " for submitting your information.\n";	//Email message
	$stringToAdd="";										//File information

	if (!$isItExisting){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";							//Make the column headings. 
		}													//Use comas for excel column, /n for next row
		$stringToAdd.="\n";									//Make sure file goes to next line
		fwrite($handle, $stringToAdd);						//Write the 
	}
	
	$stringToAdd="";										//Reset the file info to blank
	foreach($_POST as $name => $value) {
		// print "$name : $value<br/>";						//This is going to the screen
		$msg .="$name : $value\n";							//This is going to the email
		$stringToAdd.="$value,";							//This is going to the file
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);

	//now close the file
	fclose($handle); 
	$to = $_SESSION["email"];
	$headers = "From: ". $_SESSION["name"] ."<".$_SESSION["email"]. ">\r\n";
	
	mail($to, 'Form Data', $msg,$headers);

	// echo "Email sent";

	/* NOTES: 
		-use double quotes to get variables
		-use comas for excel column, /n for next row
		.= Concatinate a string or something (line 21)
	*/
?>

<!-- 	if (!is_array($value)){
 -->		



	<section class="container">
		<div class="clearfix">
			<div class="lg-col-11 mx-auto">
				<h2 class="mb0"><?php
							echo $_SESSION['name'];?></h2>
				<h4 class="mt0"><?php
							echo $_SESSION['username'];?></h4> <!-- screen name/handle -->
				<div class="lg-col lg-col-5">

				<form id="form1" runat="server">
				        <input type='file' id="imgInp" />
				        <img id="blah" src="imgs/uploadfoto.jpg" alt="your image" />
				    </form>

				    <script>	// source from http:jsfiddle.net/LvsYc/
						function readURL(input) {
				        if (input.files && input.files[0]) {
				            var reader = new FileReader();
				            
				            reader.onload = function (e) {
				                $('#blah').attr('src', e.target.result);
				            }
				            
				            reader.readAsDataURL(input.files[0]);
				        }
				    }
				    
				    $("#imgInp").change(function(){
				        readURL(this);
				    });

					</script>
				</div>

				<div class="lg-col lg-col-6">
						<h2>This is where a bio would go</h2>
					</div>
				
				<div class="lg-col-11">
						<ul class="list-reset">
							<li>Age: <?php
								if (isset($_SESSION['age'])) {
									echo $_SESSION['age'];
								} ?></li>





							<li>Gender: <?php
								if (isset($_SESSION['gender'])) {
									echo $_SESSION['gender'];
								} ?></li>

							<li>Interested in: <?php
								if (isset($_SESSION['pref'])) {
									echo $_SESSION['pref'];
								} ?></li>

							<li>Nationality: <?php
								if (isset($_SESSION['nationality'])) {
									echo $_SESSION['nationality'];
								} ?></li>
							
							<li>Religion: <?php
								if (isset($_SESSION['religion'])) {
									echo $_SESSION['religion'];
								} ?></li>

							<li>Likes: <?php
								if (isset($_SESSION['likes'])) {
									echo $_SESSION['likes'];
								} ?></li>

							<li>Dislikes: <?php
								if (isset($_SESSION['dislikes'])) {
									echo $_SESSION['dislikes'];
								} ?></li>

							<li>Tagline: <?php
								if (isset($_SESSION['tag'])) {
									echo $_SESSION['tag'];
								} ?></li>
						</ul>		
					</div>
				</div>
			</div>
	</section>



	<!--Check names of users against a sex offenders registry 
	Users can log complaints and block other users who send abusive communication -->


			<?php
			include("templates/footer.php");
			?>	

</body>
</html>


