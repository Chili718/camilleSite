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

        <div class="burger">
          <span></span>
          <span></span>
          <span></span>
        </div>

        <div class="burgerMenu">

          <div class="links">
            <a href="">
              <h2>About</h2>
            </a>
            <a href="">
              <h2>Friends</h2>
            </a>
            <!-- <a href="">
              <h2>Inspirations</h2>
            </a> -->
            <!-- <a href="">
              <h2>All Work</h2>
            </a> -->
          </div>
          <div class="menuContainer">

            <div class="information">
              <p><b>Phone:</b> 843-384-4357</p>
              <p><b>Email:</b> camillecopeland@aol.com</p>
              <p><b>Address:</b> 100 Helmsman Way #411<br>
                Hilton Head Island SC 29928</p>
            </div>
            <div class="socials">
              <div class="socialButton"><ion-icon name="logo-facebook"></ion-icon></div>
              <div class="socialButton"><ion-icon name="logo-instagram"></ion-icon></div>
            </div>

          </div>

        </div>

        <div class="infoBlock" id="infoBlock">
          <p class="description"></p>
          <p class="workers"></p>
        </div>

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

  <script type="text/javascript" src="js/burger.js"></script>
  <script type="text/javascript" src="js/swipe.js"></script>
  <script type="text/javascript" src="js/scrollPage.js"></script>
  <script type="text/javascript" src="js/info.js"></script>

</body>

</html>