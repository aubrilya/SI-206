 <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thikana at Bharatwala</title>
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
    ?>
    
    <div class="navbar navbar-default navbar-fixed-top scroller">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="page-scroll" href="#page-top">Page Top</a> -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div >
                <ul class="nav nav2 navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="#page-top" id="top1">Top</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#homestay" id="homestay1">Homestay</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#gallery" id="gallery1">Gallery</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#activities" id="activities1">Activities</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#history" id="history1">History</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#pricing" id="pricing1">Pricing</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </div>


    <!-- Header -->
    <div class="intro-header intro-bharatwala" >
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <!-- <img class="img-responsive" src="img/thikanalogo8.png" alt=""> -->
                        <h1 "col-sm-12">Thikana at Bharatwala</h1>
                        <h3>Our boutique Homestay  shares<br> its campus with the <a href="https://www.ankuri.org">Ankuri</a> program. </h3>
                        <hr class="intro-divider">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Page Content -->
    <div class="content-section-a" id="homestay">
        <div class="container">
            <div class="row">
                <hr class="section-heading-spacer">
                <div class="col-lg-5 col-sm-6">
                    
                    <div class="clearfix"></div>
                    <h2 class="section-heading">RURAL HOMESTAY<br></h2>
                    <p class="lead">Set amongst the lush 
                        reserve forests of Anglia in the foothills of the Himalayas in the district of Dehradun,  
                        Thikana at Bharatwala is the classically restored home of Rachna and Dushyant Singh.  
                        When you come to us you will have the opportunity to take part in the rich culture of the people 
                        who have lived here in the foothills for centuries and who continue to follow traditional agricultural 
                        practices.  You will have the opportunity to visit the surrounding family farms, homes and villages, 
                        and experience the peaceful beauty of the mountainous vistas. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive notgallery" src="img/view.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <hr class="intro-divider">
    <!-- Gallery on Grid -->
    <div class="row" id="gallery">
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class= "galleryheader"> Gallery</h2>
                    <h6 class= "galleryheader"> Click on images to learn more<br> <br></h2>
                </div>
            </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#porch" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/porch.jpg" class="img-responsive" alt="Marble porch in sunset">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#housing" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/construction.jpg" class="img-responsive" alt="Housing">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#house" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/house.jpg" class="img-responsive" alt="View of the entire house">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#tea" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/tea.jpg" class="img-responsive" alt="5pm tea">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#yoga" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/yoga.jpg" class="img-responsive" alt="Yoga">
                    </a>
                </div>
                
                <div class="col-sm-4 portfolio-item">
                    <a href="#village" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/village.jpg" class="img-responsive" alt="Village Life">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#dogs" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/dogs.jpg" class="img-responsive" alt="Two cute dogs">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#flowers1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/flowers1.jpg" class="img-responsive" alt="Flowers">
                    </a>
                </div>
            <div class="col-sm-4 portfolio-item">
                    <a href="#culture" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/dance.jpg" class="img-responsive" alt="Traditional Dance">
                    </a>
                </div>
                  </section>
              </div>
   
   <hr class="intro-divider">
    <div class="content-section-b" id="activities">
        <div class="container">
            <div class="row">
                <hr class="section-heading-spacer">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading activities">ACTIVITIES<br></h2>
                    <p class="lead">
                        Whether you want to simply relax and soak in the beauty of nature or desire a more active schedule,
                        there is a wide variety of choices to pass the time during your stay with us. 

                        <ul class="info-list">
                            <li>Local wildlife and nature walks in the Anglia hills</li>
                            <li>Bird watching tours</li>
                            <li>Trek to the historical temple of Santala Devi</li>
                            <li>Visit the local government-run school </li>
                            <li>Meet women who are part of a rural employment programme </li>
                            <li>Morning yoga, taught by a nearby yoga master </li>
                            <li>Reflexology classes </li>
                            <li>Hour long massages by trained professionals </li> 
                    </ul>
                    </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive notgallery" src="img/yoga.jpg" alt="Yoga in the mountains">
                    <img class="img-responsive notgallery" src="img/dance.jpg" alt="Traditional Dance">
                </div>
            </div>

        </div>
    </div>
        <!-- /.container -->


<!-- <div class="row" id="history">
                <hr class="section-heading-spacer">

                <div class="col-lg-4 col-lg-offset-2">
                    <h2 class="section-heading">HISTORY</h2>
                    <p>In the early nineteenth century the area stretching to the neighbouring district of Vikas Nagar 
                        was overseen by Rai Bahadur Rama Dutt Raturi. A conservationist, he felt a strong responsibiltiy 
                        to help the farmers who struggled to obtain sufficient sustenance on the extremely hilly farmland. </p> 
                    <p> Settlers from three different regions converged in this area to settle down on his lands - Nepalese, 
                        Jaunsaris and Garhwalis. He encouraged the local farmers to look after the sal jungles while staying 
                        engaged in basic agriculture.  Similar to today, large numbers of the village men were migrating to work in the nearby towns 
                        or were engaged in military services.  Meanwhile, the women typically stayed back to look after the fields and the family. </p>
                        <p>
                         By 1900 the land ceiling acts were in place and most of the land that was privately owned by the family was
                         given away as grants to cultivators. However, the Raturi family continued their work supporting the surrounding 
                         forests and ecosystem. </p>
                </div>
                <div class="col-lg-4">
                    
                    <p><br> <br> In the present day, Rai’s great great grand daughter and her family have re-created 
                         that spirit of caring for the land and its people by establishing Thikana at Bharatwala, and they have expanded it into 
                         a <a>knitting program</a> that facilities empowerment and financial freedom for the surrounding village women, 
                         as well as a literacy centre for the kids. <br> <br>
                        Please visit <a href="https://www.ankuri.org">ankuri.org</a>for more information. </p></p>
                        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                   <iframe class="notgallery" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d860.3919578751662!2d78.
                   05004170000001!3d30.391627500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d6f62bc928cb%3A0xf
                   7d9933b64f4c9a0!2sThikana!5e0!3m2!1sen!2sin!4v1433055147435" width="50%"  frameborder="0" 
                   style="border:0"></iframe>
                </div>
            </div>

    </div> -->
       <hr class="intro-divider">
    <div class="content-section-a" id="history">

        <div class="container">
            <div class="row">
                <hr class="section-heading-spacer">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">HISTORY<br></h2>
                    <p class="lead">
                        In the early nineteenth century the area stretching to the neighbouring district of Vikas Nagar 
                        was overseen by Rai Bahadur Rama Dutt Raturi. A conservationist, he felt a strong responsibiltiy 
                        to help the farmers who struggled to obtain sufficient sustenance on the extremely hilly farmland.  
                        Settlers from three different regions converged in this area to settle down on his lands - Nepalese, 
                        Jaunsaris and Garhwalis. He encouraged the local farmers to look after the sal jungles while staying 
                        engaged in basic agriculture.  Similar to today, large numbers of the village men were migrating to work in the nearby towns 
                        or were engaged in military services.  Meanwhile, the women typically stayed back to look after the fields and the family. </p>
                    </div>
                 <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <p class="lead"><br> <br> <br> In the present day, Rai’s great great grand daughter and her family have re-created 
                         that spirit of caring for the land and its people by establishing Thikana at Bharatwala, and they have expanded it into 
                         a <a>knitting program</a> that facilities empowerment and financial freedom for the surrounding village women, 
                         as well as a literacy centre for the kids. <br><br> 
                        Please visit <a href="https://www.ankuri.org">ankuri.org</a> for more information. </p>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d860.3919578751662!2d78.
                   05004170000001!3d30.391627500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3908d6f62bc928cb%3A0xf
                   7d9933b64f4c9a0!2sThikana!5e0!3m2!1sen!2sin!4v1433055147435" width="100%"  frameborder="0" 
                   style="border:0"></iframe>
                </div>
            </div>

        </div>
    </div>
   <hr class="intro-divider">
     <div class="content-section-a" id="pricing">

        <div class="container">
            <div class="row">
                <hr class="section-heading-spacer">
                <div class="col-lg-5 col-sm-6">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">PRICING<br></h2>
                    <h3>Room and Board</h3>
                    <h5>Per person per day</h5>
                    <p class="lead">Double occupancy – Rs. 8,000<br>
                        Single occupancy - Rs. 6,500<br>
                        Triple occupancy – Rs. 10,500<br> <br></p>
                
                    <h3>Airport Transfer</h3>
                    <p class="lead">Medium car — Rs. 1500<br>
                       People carrier — Rs. 1800 <br> <br>
                    </p>
                
                    <h3>Train Station Transfer</h3>
                    <p class="lead"> Medium car — Rs. 700 <br>
                        People carrier — Rs. 1000 <br>
                        <br> 
                    </p>
                    <h3>Activities</h3>
                    <p class="lead">
                        Full body massage (one hour) – Rs. 1000 <br>
                        Reflexology (one hour) – Rs. 800 <br>
                        Yoga classes in the morning – Rs. 200 <br> <br>
                    </p>
                 
                    <!-- <h3>City Sight Seeing</h3>
                    <h5>Ask for pricing</h5>
                    <p class="lead">
                         Day visit to Rishikesh for evening ceremonial service to the River Ganga <br>
                         Day visit to Haridwar for evening ceremonial service to the River Ganga <br></p> -->
                 </div>

                 <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <h3><br><br>Additional Info</h3>
                    <ul class="info-list"><li>Children under ten are free if they will be sharing your room. </li>
                         <li>3,000 Rs. for each child in a separate room.</li>
                         <li>A maximum of two children may share your room. </li>
                         <li>We are closed May 15th - September 15th.</li>
                         <li>We include all meals and all drinks: you are our guest! </li>
                         <li>Though our main house does not have air conditioner, we provide air conditioner for the guest rooms!  </li>
                         <li>High ceilings, verandas and ceiling fans keep the public areas pleasant by day while allowing you to appreciate the nature we are surrounded with. </li>
                        </ul> 
                </div>
            </div>

        </div>
    </div>
    

    <!-- _______________________________________________ Portfolio Modals_______________________________________________ -->
    
<!-- flowers1 -->
    <div class="portfolio-modal modal fade" id="flowers1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Garden and Grounds</h2><br>
                            <p>At any time of the season you can find flowering trees that offer a cool repose in the heat of the day. 
                            We have hydrangeas, lilacs, hibiscus, honey suckle, a fig tree, a peach tree, and more.</p>
                            <img src="img/flowers1.jpg" class="img-responsive img-centered" alt="flowers">
                            <img src="img/grounds.jpg" class="img-responsive img-centered" alt="Thikana grounds">
                            <img src="img/flowers2.jpg" class="img-responsive img-centered" alt="Thikana grounds">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- flowers2 -->
   <!-- <div class="portfolio-modal modal fade" id="flowers2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Flowers</h2><br>
                            
                            <img src="img/flowers2.jpg" class="img-responsive img-centered" alt="Flowers">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nisi consequatur, libero temporibus 
                                non quasi eos! Voluptas non cum, recusandae. Sed numquam nobis modi. Eveniet laboriosam et placeat 
                                tenetur dolores.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- grounds -->
<!--    <div class="portfolio-modal modal fade" id="grounds" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>The Grounds</h2><br>
                            
                            <img src="img/grounds.jpg" class="img-responsive img-centered" alt="Thikana grounds">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nisi consequatur, libero temporibus 
                                non quasi eos! Voluptas non cum, recusandae. Sed numquam nobis modi. Eveniet laboriosam et placeat 
                                tenetur dolores.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- house -->
   <div class="portfolio-modal modal fade" id="house" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>View of the Estate</h2><br>
                            
                            <img src="img/house.jpg" class="img-responsive img-centered" alt="View of the Estate">
                            <p>The Thikana estate includes the main household, where you will often enjoy meals on the veranda 
                                or in the dining room. We have two other buildings that include the guest housing as well as the 
                                literacy center and the knitting center. These two centers are part of out <a href="https://www.ankuri.org"> Ankuri</a> program.
                            </p>
                            <img src="img/grounds2.jpg" class="img-responsive img-centered" alt="View of the Estate">
                            <img src="img/livingroom.jpg" class="img-responsive img-centered" alt="Living Room">
                            <img src="img/gazebo.jpg" class="img-responsive img-centered" alt="Gazebo">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- porch -->
   <div class="portfolio-modal modal fade" id="porch" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dining on the Veranda</h2><br>
                            
                            <img src="img/porch.jpg" class="img-responsive img-centered" alt="Breakfast on the Veranda">
                            <p>Breakfast often includes fresh vegetables, tea, paratha bread, and butter produce from our cows 
                                right here at Thikana.
                            </p>
                            <img src="img/lunch.jpg" class="img-responsive img-centered" alt="Breakfast on the Lunch">
                            <p>For lunch and dinner you will experience a wide variety of traditional north and south Indian dishes.
                                We are very accomodating for any of your dietary needs, including delicious vegetarian dishes with fresh
                                vegetables, fruits, paneer, dumplings, and milk products. 
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- tea -->
   <div class="portfolio-modal modal fade" id="tea" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>5pm Tea</h2><br>
                            
                            <img src="img/tea.jpg" class="img-responsive img-centered" alt="5pm Tea">
                            <p>Enjoy chai, black tea, or coffee every day at 5pm while you relax in the cool shade of the
                             veranda.
                            </p>
                            <img src="img/veranda.JPG" class="img-responsive img-centered" alt="Veranda">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- dogs -->
   <div class="portfolio-modal modal fade" id="dogs" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dogs and Other Animals</h2><br>
                            
                            <img src="img/dogs.jpg" class="img-responsive img-centered" alt="Dogs">
                            <p>We hope you like animals! Thikana is currently the home to four friendly dogs: 
                                Doozer, Dunkin, Diesel, and Dexter. We also are the home to several cats, chickens, and cows. 
                            </p>
                            <img src="img/dogs2.JPG" class="img-responsive img-centered" alt="Dogs">
                            <img src="img/villagegoat.JPG" class="img-responsive img-centered" alt="Village Goat">
                            <img src="img/villagegoat2.JPG" class="img-responsive img-centered" alt="Village Goat">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- view -->
   <div class="portfolio-modal modal fade" id="view" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>View</h2><br>
                            
                            <img src="img/view.jpg" class="img-responsive img-centered" alt="View">
                            <p>Our charming gazebo overlooks the village and is a favorite spot to sit while knitting, 
                                reading, or enjoying tea. 
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- yoga -->
   <div class="portfolio-modal modal fade" id="yoga" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Yoga</h2><br>
                            
                            <img src="img/yoga.jpg" class="img-responsive img-centered" alt=" Yoga">
                            <p>There is nowhere better to practice the art of yoga. Whether you are a beginner or a have 
                                practiced this art for many years, the beautiful mountains, lush forest, and muted sounds 
                                of the village below promises a meditative and relaxing experience. Our qualified yoga instructors 
                                are very willing to adapt to whatever schedule and skill level works best for you.  
                            </p>
                            <img src="img/yoga2.JPG" class="img-responsive img-centered" alt=" Yoga">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- village -->
   <div class="portfolio-modal modal fade" id="village" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Village</h2><br>
                            
                            <img src="img/village.jpg" class="img-responsive img-centered" alt="Village">
                            <p>At Thikana a walk or jog through the village is a beautiful, relaxing, and safe experience. 
                                The villagers are always happy to meet you– especially the school children! 
                            </p>
                            <img src="img/villagelife.JPG" class="img-responsive img-centered" alt="Village Life">
                            <img src="img/villagelife2.JPG" class="img-responsive img-centered" alt="Village Life">
                            <img src="img/motorcycle.JPG" class="img-responsive img-centered" alt="Motorcycle">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- double -->
   <div class="portfolio-modal modal fade" id="double" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Double</h2><br>
                            
                            <img src="img/double.jpg" class="img-responsive img-centered" alt="Double Room">
                            <p>Our double rooms offer a large closet area, bathroom, ornate furniture, air conditioning, daily room cleaning,
                             and clean drinking water. We are always here to serve you. Upon request we will arrange for any of your specific 
                             needs to be met. 
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- single -->
   <div class="portfolio-modal modal fade" id="single" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Single</h2><br>
                            
                            <img src="img/single.jpg" class="img-responsive img-centered" alt="Single Room">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nisi consequatur, libero temporibus 
                                non quasi eos! Voluptas non cum, recusandae. Sed numquam nobis modi. Eveniet laboriosam et placeat 
                                tenetur dolores.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- housing -->
   <div class="portfolio-modal modal fade" id="housing" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Living Accomodations</h2><br>
                            
                            <img src="img/twin.jpg" class="img-responsive img-centered" alt="Twin Occupancy">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nisi consequatur, libero temporibus 
                                non quasi eos! Voluptas non cum, recusandae. Sed numquam nobis modi. Eveniet laboriosam et placeat 
                                tenetur dolores.
                            </p>
                            <img src="img/construction.jpg" class="img-responsive img-centered" alt="Construction">
                            <p>Our second complex of rooms is currently under construction and will feature a cool 
                                retreat with large triple rooms, beautifully tiled floors, and a large dining hall room. 
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


       <!-- culture -->
   <div class="portfolio-modal modal fade" id="culture" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Cultural Experiences</h2><br>
                            
                            <img src="img/dance.jpg" class="img-responsive img-centered" alt="Twin Occupancy">
                            <p>Here at Bharatwala there are a number of exciting opportunities based on the season
                                and events in the surrounding villages. You might choose to visit to Rishikesh or Hardwar 
                                for the evening ceremonial service to the River Ganga. Occassionally there will be village weddings,
                                dance performances at local schools, opportunities to teach at our literacy program, and trips 
                                to Dehradun for shopping at the bazaar or eating out!
                            </p>
                            <img src="img/dance2.JPG" class="img-responsive img-centered" alt="Traditional Dance">
                            <img src="img/schoolplay.JPG" class="img-responsive img-centered" alt="School Play">
                            <img src="img/wedding.JPG" class="img-responsive img-centered" alt="Wedding">
                            <img src="img/temple.JPG" class="img-responsive img-centered" alt="Cave Temple">
                            <img src="img/bazaar.JPG" class="img-responsive img-centered" alt="bazaar">
                            <img src="img/bazaar2.JPG" class="img-responsive img-centered" alt="bazaar">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- triple -->
<!--    <div class="portfolio-modal modal fade" id="triple" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Triple</h2><br>
                            
                            <img src="img/triple.jpg" class="img-responsive img-centered" alt="Triple Room">
                            <p>Our second complex of rooms is currently under construction and will feature a cool retreat with large triple rooms, beautifully tiled floors, and a large dining hall room. 
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

<!-- bathroom -->
<!--    <div class="portfolio-modal modal fade" id="bathroom" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Bathroom</h2><br>
                            
                            <img src="img/bathroom.jpg" class="img-responsive img-centered" alt="Bathroom">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nisi consequatur, libero temporibus 
                                non quasi eos! Voluptas non cum, recusandae. Sed numquam nobis modi. Eveniet laboriosam et placeat 
                                tenetur dolores.
                            </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



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

</body>