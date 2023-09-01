<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Camille Designs - Official Site</title>

  <link rel="icon" href="">

  <link rel="stylesheet" href="https://use.typekit.net/wom1ifl.css">

  <link rel="stylesheet" href="css/index.css">


  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

  <script>
    //my lazy way to deal with a window resize breaking the scroll height
    //will add functionality to keep users currently viewed image on reload later
    $(window).resize(function() {
      location.reload();
    });
  </script>

</head>

<body>

  <div class="outer-border">
    <div class="mid-border">
      <div class="inner-border scroll-container" id='scroll-container'>
        <img class="corner-decoration corner-left-top" src="images/cornerFlourish.png"></img>
        <img class="corner-decoration corner-right-top" src="images/cornerFlourish.png"></img>

        <!-- Page Content -->
        <div class="pageContent" id="pageContent">

          <!-- <section class="scroll-item">one</section>
          <section class="scroll-item">two</section>
          <section class="scroll-item">three</section>
          <section class="scroll-item">four</section>
          <section class="scroll-item">five</section> -->
          <?php require 'php/getWork.php'; ?>

        </div>
        <!-- page content -->
        <div class="navigationButton navigationButtonDown"><ion-icon name="caret-down"></ion-icon></div>
        <div class="navigationButton navigationButtonLeft"><ion-icon name="caret-back"></ion-icon></div>
        <div class="navigationButton navigationButtonRight"><ion-icon name="caret-forward"></ion-icon></div>

        <img class="corner-decoration corner-right-bottom" src="images/cornerFlourish.png"></img>
        <img class="corner-decoration corner-left-bottom" src="images/cornerFlourish.png"></img>
      </div>
    </div>
  </div>


  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script type="text/javascript" src="js/swipe.js"></script>
  <script type="text/javascript" src="js/scrollPage.js"></script>

</body>

</html>