<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
  </head>
  <body>
    <?php
      $name         = $_POST['name'];
      $address      = $_POST['address'];
      $phone        = $_POST['phone'];
      $email        = $_POST['email'];
      $birthday     = $_POST['birthday'];
      $website      = $_POST['website'];
      $favoriteShow = $_POST['fav-show'];
      $password     = $_POST['password'];

      if($password == "threatlevelmidnight" || $password == "beetfarm"){
        echo "<h1>Your Information</h1>";
        echo "<h2>Main Information</h2>";

        echo "<ul class='information-list'>";

        if(!empty($name)){
          echo "<li><span class='label'>Name:</span> $name </li>";
        }

        if(!empty($address)){
          echo "<li><span class='label'>Address:</span> $address </li>";
        }

        if(!empty($phone)){
          echo "<li><span class='label'>Phone: </span><a href='tel:$phone'>Call Me!</a> </li>";
        }

        if(!empty($email)){
          echo "<li><span class='label'>Email: </span><a href='mailto:$email'>Email Me</a> </li>";
        }

        if(!empty($website)){
          echo "<li><span class='label'>Website: </span><a href='$website' target='_blank' >My Website</a> </li>";
        }

        echo "</ul>"; ?>

        <h2>Other Information</h2>
        <?php
          if($favoriteShow == "Yes") {
            echo "<p>You said you like the office!</p>";
            echo "<img src='images/dwight-yes.gif' alt='Dwight Schrute celebrating' />";
          }elseif($favoriteShow == "No"){
            echo "<p>You don't like The Office?</p>";
            echo "<img src='images/michael-no.gif' alt='Michael Screaming NO' />";
          }else{
            echo "<p>You've never watched it before? Oh no!!!</p>";
            echo "<img src='images/office-never.gif' alt='Michael Needing Assistance' />";
          }

      }else{
        echo "<h1>Identity theft is no joke Jim!</h1>";
        echo "<button onclick='history.go(-1);'>Back</button>";
      }

    ?>
  </body>
</html>
