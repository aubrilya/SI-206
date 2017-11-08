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
    <div class="navbar navbar-default navbar-fixed-top scroller">
        <div class="container">
            
        </div>
    </div>
<!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <div class="col-sm-12">
                    <img class="img-responsive" src="img/thikanalogo11.png" alt="">
                        </div>
                        <!-- <h1>Thikana in the Foothills</h1> -->
                        <h3>Voluntourism in the foothills of the Himalayas</h3>
                        <hr class="intro-divider">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>



    

  <script>
        function checkTime(){
            var today = new Date();
            if(today.getHours() >= 0 && today.getHours() < 12) {      
                document.getElementById("greeting").innerHTML='GOOD AFTERNOON!'; 
            } 
            else if(today.getHours() >= 12 && today.getHours() < 16) {      
                document.getElementById("greeting").innerHTML='GOOD MORNING!'; 
            }
            else{      
                document.getElementById("greeting").innerHTML='GOOD EVENING!'; 
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
