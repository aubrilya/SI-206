
!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Submission</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body id="page-top" class="index">
    <?php
        $fName = basename(__FILE__);
        include('header.php');
	
		$name = $_POST["name"];
		$email_address = $_POST["email"];
		$phone = $_POST["phone"];
		$message = $_POST["message"];
			
		$to = 'aubreyo@umich.edu'; 
		$email_subject = "Message Via Aubrey's Portfolio Site From $name";
		$email_body = "You have received a new messave via your portfolio website.\n\n".
		"Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
		$headers = "From: $email\n"; 
		$headers .= "Reply-To: $email_address";	
		mail($to,$email_subject,$email_body,$headers);

       ?>
 <section class="success " id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="h2exception">Email Sent</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<p>Your email has been sent! Thank you for contacting me. </p>
				</div>
			</div>
        </div>
</section>
	
	<?php
			 include('footer.php');
    ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

</body>

	