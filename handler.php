<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.amber-orange.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>calculations</title>
  </head>

  <body>
  <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class = "mdl-layout__header">
           <div class = "mdl-layout__header-row">
              <!-- Title -->
              <span class = "mdl-layout__content"><center><p style="font-size: 40px">Your results:</p></center></span>
           </div>
        </header>
        
        <div class = "mdl-layout__drawer">
           <span class = "mdl-layout__content"><center><p style="font-size: 40px">Your results:</p></center></span>
        </div>
    <?php
    $diameter = "";
    if ( isset( $_POST['diameter'] ) ){
      $diameter = $_POST['diameter'];
    }
    if($diameter >=0 && is_numeric($diameter))
    {
    $radius = $diameter/2;
    $area = M_PI*$radius*$radius;
    $circumference = M_PI*$diameter;
    echo "<h3> Area=".$area."</h3>";
    echo "<h3> Circumference=".$circumference."</h3>";
    }
    else {
      echo"<h1><center> Error </center><h1>";
      echo"<h3>unable to calculate. <br> please ensure the value you entered is a positive number without units or characters </h3>";
    }
    ?>
  <a href=index.html>
    <center><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">go back</button></center>
    
  </body>
  
</html>
