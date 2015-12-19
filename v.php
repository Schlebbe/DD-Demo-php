<!--
Vänsterpartiet - Information, frågor och röstning.
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"> 
    <title>DD Demo</title>    
    <link rel="stylesheet" type="text/css" href="myCss.css">
    <script src="Javascript.js"></script>
  </head>  
  <body onload="init()">
  
  <a href="index.php"><img src="logo.png" id="logo"></a>
  
  <div id="wrapper">
    <ul id="tabs">
      <li><a href="#about">Vänsterpartiet</a></li>
      <li><a href="#advantages">Om Direktdemokraterna</a></li>
      <li><a href="#usage">Placeholder</a></li>
    </ul>

    <div class="tabContent" id="about">
      <h2>Om Vänsterpartiet</h2>
    </div>

    <div class="tabContent" id="advantages">

    </div>

    <div class="tabContent" id="usage">

    </div>
  </div>
  
  </body>  
</html>

<?php
$a = @$_POST['parti'];
echo "Du röstade på"." ".$a;


?>