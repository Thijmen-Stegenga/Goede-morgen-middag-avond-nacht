<?php
date_default_timezone_set('Europe/Amsterdam');
$time = date("H");
$now = date("H:i");

if ($time >= 6 && $time < 12) {
  $background = "morning.png";
  $hallo = "morgen";
} elseif ($time >= 12 && $time < 18) {
  $background = "afternoon.png";
  $hallo = "middag";
} elseif ($time >= 18 && $time <= 23) {
  $background = "evening.png";
  $hallo = "avond";
} elseif ($time >= 0 && $time < 6) {
  $background = "night.png";
  $hallo = "nacht";
}
 echo "<h1>Goede ". $hallo . "<br>" . "Het is nu ". $now . "</h1>";

 ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400i&display=swap" rel="stylesheet"> 
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div class="center" >
      <!-- <h1><?php echo $groet; ?> <?php echo $now; ?></h1> -->
    </div>
    <style>
      .center{
        background: url("images/<?php echo $background;?>");width: 100vw;
          height: 100vh;
          background-size: cover;
          background-repeat: no-repeat;
      }
    </style>
  </body>
</html>


