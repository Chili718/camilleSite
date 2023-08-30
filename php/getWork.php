<?php
/*

File for getting the images of her work onto the homepage

*/

 require "dbCON.php";

 //could not connect to database
 if (!$con) {
   echo "<h2 class='errorTxt'>Ooops, could be an error on my side :(</h2>";
 }
 else
 {

   $table  = "work";
   $result = $con->query("SELECT * FROM $table ORDER BY timeUploaded");

   if (mysqli_num_rows($result)!=0) {
     //echo each cell with the corresponding image path
     while($data = $result->fetch_assoc()){

       //print_r($data);

       echo "<section class='scroll-item'><img src = ". $data["picturePath"]."></section>";

     }

   }else{
     //no images error message
     echo "<h2 class='errorTxt'>No images to be found...</h2>";

   }

   $con->close();

 }
