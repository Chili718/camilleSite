<?php
session_start();


$dbf = "";
$ver = "";
//print_r($_SESSION);
if(isset($_SESSION['verified']))
{
  header("Location: index.php");
  die();
//the vkey will only be set if the user clicks the verify link in the verification email
//and the script will run to verify the account
}else if(isset($_GET['vkey'])){

  require 'php/verify.php';

}

?>
<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Camille Designs - Login</title>
    <link rel="icon" href="images/icon.ico">

    <link rel="stylesheet" id="dayNightToggle" href="css/variablesNight.css">
    <!--
    <script type="text/javascript" src="js/theme.js"></script>
    -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/input.css">
    <!-- Front I use from Adobe -->
    <link rel="stylesheet" href="https://use.typekit.net/wom1ifl.css">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script type="text/javascript" src="js/linlout.js"></script>

    <script>

    </script>

  </head>

  <body>

    <!--  -->
    <!-- Navigation Section -->
    <!--  -->
    <div class="navbar">
        <img class="nav-flourishes" src="images/nav-flourishes" alt="">
        <ul class="nav-links" id="check">
          <li><a href="index.php#home" class="linkAnim"><span>Home</span></a></li>
          <li><a href="index.php#work" class="linkAnim"><span>Work</span></a></li>
          <li><a href="index.php#Inspirations" class="linkAnim"><span>Inspirations</span></a></li>
          <li><a href="index.php#friends" class="linkAnim"><span>Friends</span></a></li>
          <li><a href="index.php#contact" class="linkAnim"><span>Contact</span></a></li>
          <li><a href="" class="linkAnim"><span>Shop</span></a></li>
          <!--download="JonTiceResume"-->

          <?php
            //display login our logout link depending on the if the users is or not
            if(!isset($_SESSION['verified']) || $_SESSION['verified'] !== true)
            {

                  echo "<li><a href='login.php' class='linkAnim'><span>Login</span></a></li>";

            }else{

                  echo "<li><a href='#' onclick='logout()' class='linkAnim'><span>Logout</span></a></li>";
                  echo "<script>activityWatcher()</script>";

            }

           ?>
        </ul>
        <img class="nav-flourishes" src="images/nav-flourishes" alt="">
        <div class="burger">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
    </div>

    <div class="body">
      <div class="outer-border">
         <div class="mid-border">
            <div class="inner-border">
              <img class="corner-decoration corner-left-top" src="images/corner-decoration2.png"></img>
              <img class="corner-decoration corner-right-top" src="images/corner-decoration2.png"></img>
              <img class="corner-decoration corner-right-bottom" src="images/corner-decoration2.png"></img>
              <img class="corner-decoration corner-left-bottom" src="images/corner-decoration2.png"></img>
              <img class="vertical-decoration top" src="images/horizontally-centered-vertical-decoration.png"></img>
              <img class="vertical-decoration bottom" src="images/horizontally-centered-vertical-decoration.png"></img>


               <!-- page content -->
               <div class="centerForm">
                 <!--
                 Handle the form submission vis JS when hitting enter "submitting the form"
                 another way than clicking the button
                 -->
                 <form class="frm lgn"id="frm">

                   <h1>Account Login</h1>

                   <div class="allInp">
                     <div class="inp">
                       <input type="text" name="userNME" id="userNME" required/>
                       <label>Username</label>
                     </div>
                     <div class="inp">
                       <input type="password" name="pswrd" id="pswrd" required/>
                       <label>Password</label>
                     </div>
                   </div>

                   <h3 id="errorTxt"><?php echo $dbf; ?></h3>
                   <h3 id="successTxt"><?php echo $ver; ?></h3>

                   <div class="btn frmBtn" onclick="login()" tabindex="0">
                     Sign In
                     <input type= "submit" style="display: none">
                   </div>

                 </form>

                  <img class="backImg loginBackIm"src="images/loginBack.png" alt="">

               </div>



            </div>
         </div>
      </div>
</div>

    <script>
      //preventing the page from reloading after hitting enter
      $("#frm").submit(function(e) {
          e.preventDefault();
      });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="js/theme.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
  </body>

</html>
