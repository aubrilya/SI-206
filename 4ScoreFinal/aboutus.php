<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About us</title>
  <link rel="stylesheet" type="text.css" href="style/default.css">
  <link rel="stylesheet" type="text.css" href="style/bootstrap.min">
  <link type="text/css" href="style/basscss.min.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="style/style.css">


      <?php
        $fName = basename(__FILE__);
      ?>

</head>
<body>

    <?php
        include('templates/header.php');
    ?>

 
    <section class="container">
      <div class="clearfix">
        <div class=" sm-col-10 lg-col-8 mx-auto">
          <h1 class="md-gray">Our Mission</h1>
          <p class="center">Four score and seven years ago our fathers brought forth on the world wide web, 
             a new creation, conceived in Freedom, and dedicated to the proposition that all 
             people deserve a really, really good date. Now we are engaged in a great quest, 
             testing whether such an online platform, or any such platform so conceived and so 
             dedicated, can find that perfect match to span the ages. We are met on a great 
             battle-field of that war. We have come to dedicate a portion of that field, to those
              who here gave up their love lives during their time period so that nations, wars, 
              dictatorships, and religious crusades might live. It is altogether fitting and proper 
              that they should get a second chance to find love.
          </p>
          <p class="right">Abraham Lincoln November 19, 1863</p>
          
        </div>
       </div>  


    <section class="clearfix">
      <div class="sm-col-10 lg-col-8 mx-auto">
        <h2> Our Location</h2>
        <iframe src="https://www.google.com/maps/place/1600+Pennsylvania+Ave+NW,
        +Washington,+DC+20500/@38.8976757,-77.036528,17z/data=!3m1!4b1!4m2!3m1!1s0x
        89b7b78e00410e73:0xac8125363999a8f"></iframe>
      </div>
    </section>


    <section class="clearfix">
      <div class="lg-col-10 mx-auto">
        <form class="center" action="form/gotIt2.php" method="POST" onsubmit="return checkEmail()">
          <fieldset class="fieldset-reset">
            <legend class="mb2 h3"> Drop us a line.</legend>
            <ul class="list-reset">
              <li>
                <label for="name">Name</label>
                <input id="name" class="field-light m1" name="name" type="text" placeholder="Joan of Arc">
              </li>
              <li>
                <label for="email">Email</label>
                <input class="field-light m1" id="email" name="email" type="email" 
                placeholder="JoanBabe69@hotmail.com">
              </li>
              <li>
                <label for="message">Note</label>
                <input class="field-light m1" name="message" type="textbox">
              </li>
            </ul>
            <button class="button m1" type=submit> Submit</button>
           </fieldset>
          </form>
         </div>
        </section> 
        </section>   
  <?php
    include("templates/footer.php");
    ?>

</body>
</html>
