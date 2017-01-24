<?php
if(isset($_POST['submit'])){
    $to = "rupali.nandi@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>

<!DOCTYPE html>

<html>

<head>
<title>The GlobeTrotter's Travelogue</title>

<style>
/* Scrollbar styles */
/* Derived from: http://www.quackit.com/html/codes/html_scrollbars.cfm */
::-webkit-scrollbar {
width: 12px;
height: 12px;
}

::-webkit-scrollbar-track {
background: #f5f5f5;
border-radius: 10px;
}

::-webkit-scrollbar-thumb {
border-radius: 10px;
background: #ccc;
}

::-webkit-scrollbar-thumb:hover {
background: #999;
}
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<body>
  <div type="header">
    <header class="w3-container w3-dark-grey">
    <h1><font color="white"><center>Journey's End - The GlobeTrotter's Travelogue</center></font></h1>
    <h3><font color="white"><center>An Account of my travels and expeditions <span class="w3-tag">round the globe</span></center></font></h3>
    </header>

    <br>
    <body class="w3-grey">

  <!-- Grid -->
  <div class="w3-row">

  <!-- Blog entries -->
  <div class="w3-col l8 s12">

    <div class="w3-card-4 w3-margin-right w3-margin-left w3-white">
    <img src="http://ichef.bbci.co.uk/naturelibrary/images/ic/credit/640x395/m/mo/mountain/mountain_1.jpg" style="width:50%; float:left; padding-right: 0.5cm;">
      <div class="w3-white" style="height:370px;overflow-y:scroll;overflow-x:hidden;padding-right: 0.2cm">
        <h4><b>Welcome Note by The Author</b></h4>
        <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
        <p align="justify">Welcome to the final pit-stop of your getaway planning! With the well-detailed compilation of my travel experiences to guide you across the globe,
        I'm sure you will end up finding the destination you would like to embark upon for your vacation. Following you will find a comprehensive guide of various trips, each
        a unique experience with a character of its own. From luxury escapades to tight budget yet fun holidays, you can find the ultimate getaway experience and unique places
        rarely heard of and seen by few. I hope these accounts of the sights, sounds and flavors of each of these prove to be an exciting and fruitful read :) :) :) :) <br><br>Welcome!
        I'm sure you will end up finding the destination you would like to embark upon for your vacation. Following you will find a comprehensive guide of various trips, each
        a unique experience with a character of its own. From luxury escapades to tight budget yet fun holidays, you can find the ultimate getaway experience and unique places
        rarely heard of and seen by few. I hope these accounts of the sights, sounds and flavors of each of these prove to be an exciting and fruitful read :)</p>
      </div>
    </div>

    <br>

    <div class="w3-card-4 w3-margin-right w3-margin-left w3-white">
    <img src="http://maxpixel.freegreatpicture.com/static/photo/640/Blue-Sky-Lake-Mountain-Switzerland-Alps-Brienz-1791016.jpg" style="width:50%; float:left; padding-right: 0.5cm;">
      <div class="w3-white" style="height:370px;overflow-y:scroll;overflow-x:hidden;padding-right: 0.2cm">
        <h4><b>Welcome Note by The Author</b></h4>
        <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
        <p align="justify">Welcome to the final pit-stop of your getaway planning! With the well-detailed compilation of my travel experiences to guide you across the globe,
        I'm sure you will end up finding the destination you would like to embark upon for your vacation. Following you will find a comprehensive guide of various trips, each
        a unique experience with a character of its own. From luxury escapades to tight budget yet fun holidays, you can find the ultimate getaway experience and unique places
        rarely heard of and seen by few. I hope these accounts of the sights, sounds and flavors of each of these prove to be an exciting and fruitful read :)</p>
      </div>
    </div>

    <br>

    <div class="w3-card-4 w3-margin-right w3-margin-left w3-white">
    <img src="http://i1.wp.com/blog.lavacanza.in/wp-content/uploads/2015/12/railway-snow-switzerland.jpg?resize=640%2C395" style="width:50%; float:left; padding-right: 0.5cm;">
      <div class="w3-white" style="height:370px;overflow-y:scroll;overflow-x:hidden;padding-right: 0.2cm">
        <h4><b>Welcome Note by The Author</b></h4>
        <h5>Title description, <span class="w3-opacity">April 2, 2014</span></h5>
        <p align="justify">Welcome to the final pit-stop of your getaway planning! With the well-detailed compilation of my travel experiences to guide you across the globe,
        I'm sure you will end up finding the destination you would like to embark upon for your vacation. Following you will find a comprehensive guide of various trips, each
        a unique experience with a character of its own. From luxury escapades to tight budget yet fun holidays, you can find the ultimate getaway experience and unique places
        rarely heard of and seen by few. I hope these accounts of the sights, sounds and flavors of each of these prove to be an exciting and fruitful read :)</p>
      </div>
    </div>

  <!--
  <div class="w3-container">
    <div class="w3-card-4" style="width:100%">
      <img src="http://ichef.bbci.co.uk/naturelibrary/images/ic/credit/640x395/m/mo/mountain/mountain_1.jpg" alt="Norway" style="float:left;">
      <div class="w3-container w3-center" style="padding-left: 17.25cm">
        <p align="justify">Welcome to the final pit-stop of your getaway planning! With the well-detailed compilation of my travel experiences to guide you across the globe,
        I'm sure you will end up finding the destination you would like to embark upon for your vacation. Following you will find a comprehensive guide of various trips, each
        a unique experience with a character of its own. From luxury escapades to tight budget yet fun holidays, you can find the ultimate getaway experience and unique places
        rarely heard of and seen by few. I hope these accounts of the sights, sounds and flavors of each of these prove to be an exciting and fruitful read :)</p>
      </div>
    </div>
  </div>
  -->

  <!-- Blog Entries End-->
  </div>

  <!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card-2 w3-margin-right w3-white">
  <center><img src="http://www.w3schools.com/css/trolltunga.jpg" width="100%"></center>
    <div class="w3-container w3-teal">
      <h4><b>Welcome Note by The Author</b></h4>
    </div>
      <div class="w3-container w3-white">
      <p align="justify">Welcome to the final pit-stop of your getaway planning! With the well-detailed compilation of my travel experiences to guide you across the globe,
      I'm sure you will end up finding the destination you would like to embark upon for your vacation. Following you will find a comprehensive guide of various trips, each
      a unique experience with a character of its own. From luxury escapades to tight budget yet fun holidays, you can find the ultimate getaway experience and unique places
      rarely heard of and seen by few. I hope these accounts of the sights, sounds and flavors of each of these prove to be an exciting and fruitful read :)</p>
    </div>
  </div><hr>

  <div class="w3-card-2 w3-margin-right w3-white">
    <div class="w3-container w3-teal">
      <h4><b>CONTACT US</b></h4>
    </div>
    <form action="" method="post" class="w3-container w3-white w3-padding-16">
      <label class="w3-label">Name</label>
      <input class="w3-input w3-border w3-hover-light-grey" name="name" type="text" placeholder="Your Name">
      <br>
      <label class="w3-label">Email</label>
      <input class="w3-input w3-border w3-hover-light-grey" name="email" type="text" placeholder="Valid Email ID">
      <br>
      <label class="w3-label">Message</label>
      <input class="w3-input w3-border w3-hover-light-grey w3-padding-24" name="message" type="text">
      <br>
      <button class="w3-btn w3-teal" type="submit" name="submit" value="Submit">SEND</button>
    </form>
    </div>
  </div>

</div>
</div>

  <footer class="w3-container w3-black w3-padding-4 w3-margin-top">
    <p>&copy 2017 The G.T. |  Powered by W3.CSS</p>
  </footer>
</body>

</html>
