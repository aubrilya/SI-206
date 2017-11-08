<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aubrey O'Neal</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


</head>

<body  onload="checkTime()">

    <?php
        $fName = basename(__FILE__);
        include('header.php');
    ?>

<div class="container col-lg-12 col-md-12 col-sm-12 carouselbackground">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="8000">
  <!-- Bubble Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>



  <!-- Wrapper for slides -->
  
  <div class="carousel-inner">
    <div class="item active">
      <img src="img/portfolio/austriacropped.jpg" alt="Aubrey in Austria">
      <div class="carousel-caption">
          <div class="col-lg-12 text-center">
                <h1 class="bigbanner">AUBREY O'NEAL</h1>
         </div>
      </div>
    </div>
    <div class="item">
      <img src="img/portfolio/parkcropped.jpg" alt="Park in Austria">
      <div class="carousel-caption">
          <div class="col-lg-12 text-center">
                <h1 class="bigbanner">AUBREY O'NEAL</h1>
         </div>
      </div>
    </div>
    <div class="item">
      <img src="img/portfolio/lawlibrarycropped.jpg" alt="Lab Library Architecture">
      <div class="carousel-caption">
         <div class="col-lg-12 text-center">
                <h1 class="bigbanner">AUBREY O'NEAL</h1>
         </div>
      </div>
    </div>
    <div class="item">
      <img src="img/portfolio/treecropped.jpg" alt="Clement Library and Tree">
      <div class="carousel-caption">
         <div class="col-lg-12 text-center">
                <h1 class="bigbanner">AUBREY O'NEAL</h1>
         </div>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
</div>

    

  <script>
        function checkTime(){
            var today = new Date();
            if(today.getHours() >= 0 && today.getHours() < 12) {      
                document.getElementById("greeting").innerHTML='Good morning!'; 
            } 
            else if(today.getHours() >= 12 && today.getHours() < 16) {      
                document.getElementById("greeting").innerHTML='Good afternoon!'; 
            }
            else{      
                document.getElementById("greeting").innerHTML='Good evening!'; 
        } 
    }
    </script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    

    <?php
        include('footer.php');
    ?>

</body>

</html>
