<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $diameter = "";
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
    }
    if ($diameter>=0 && is_numeric($diameter))
    {
    $radius=$dimeter/2;
    $area=M_PI*$radius**2;
    $circumference=M_PI*$diameter;
    echo "<h1> Your Results: </h1>";
    echo "<h3> Area=".$area."</h3>";
    echo "<h3> Circumference=".$circumference."</h3>";
    }
    else{
      echo"<h1><center> Error </center><h1>";
      echo"<h3>unable to calculate. <br> please ensure the value you entered is a positive number without units or characters </h3>";
    }
    ?>
  <a href=index.html>
    <center><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">go back</button></center>
    
  </body>
  
</html>
