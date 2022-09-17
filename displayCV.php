<!-- <?php


?> -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Display PDF</title>
    <style media="screen">
      embed{
        border: 2px solid black;
        margin-top: 30px;
      }
      .div1{
        margin-left: 170px;
      }
    </style>
  </head>
  <body>
    <div class="div1">
      <?php

        include ('connectDB/config.php');
        session_start();

        $id = $_SESSION['id'];

        echo $id;


      ?>
        

    </div>

  </body>
</html>