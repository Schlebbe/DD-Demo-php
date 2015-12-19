﻿<!DOCTYPE html>
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
      <li><a href="#about">Partier</a></li>
      <li><a href="#advantages">Om Direktdemokraterna</a></li>
      <li><a href="#usage">Placeholder</a></li>
    </ul>

    <div class="tabContent" id="about">
      <h2>Välj ett parti</h2>      
      <form method="post" action="index.php">
        <table style="width:10%">
          <tr>
            <td>  
              <label>
                <input type="radio" name="parti" value="1"/>
                <a href="c.php"> 
                  <img src="parti1.png" align="center" >    
                </a>                
              </label>
              <p>C</p>
            </td>
            <td>  
              <label>                
                <input type="radio" name="parti" value="2"/>
                <a href="fp.php"> 
                  <img src="parti2.png" align="center">                
                </a>                
              </label>
              <p>FP</p>
            </td>
          </tr>
          <tr>
            <td>  
              <label>
                <input type="radio" name="parti" value="3"/>
                <a href="kd.php"> 
                  <img src="parti3.png">
                </a>                
              </label>
              <p>KD</p>
            </td>
            <td>  
              <label>
                <input type="radio" name="parti" value="4"/>
                <a href="m.php"> 
                  <img src="parti4.png">
                </a>
              </label>
              <p>M</p>
            </td>
          </tr>
          <tr>
            <td>  
              <label>
                <input type="radio" name="parti" value="5"/>
                <a href="mp.php"> 
                  <img src="parti5.png">
                </a>
              </label>
              <p>MP</p>
            </td>
            <td>  
              <label>
                <input type="radio" name="parti" value="6"/>
                <a href="s.php"> 
                  <img src="parti6.png">
                </a>
              </label>
              <p>S</p>
            </td>
          </tr>
          <tr>
            <td>  
              <label>
                <input type="radio" name="parti" value="7"/>
                <a href="sd.php"> 
                  <img src="parti7.png">
                </a>
              </label>
              <p>SD</p>
            </td>
            <td>  
              <label>
                <input type="radio" name="parti" value="8"/>
                <a href="v.php"> 
                  <img src="parti8.png">
                </a>
              </label>
              <p>V</p>
            </td>
          </tr>
        </table>
      </form>      
    </div>

    <div class="tabContent" id="advantages">
      <h2>Direktdemokraterna</h2>
      <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt fermentum elit, vel rhoncus sapien. Pellentesque ornare justo sit amet sapien ornare porttitor. Cras venenatis libero placerat lectus blandit, sed laoreet ex elementum. In hac habitasse platea dictumst. Integer nec dapibus justo, id elementum libero. Aliquam at semper elit, quis maximus elit. Integer euismod, neque sit amet congue elementum, velit neque sollicitudin odio, sit amet viverra magna tortor vel justo. Mauris leo nisl, varius vitae purus vel, consectetur semper nisi. Donec facilisis augue vel turpis tempor, id bibendum nunc pulvinar. Vestibulum lacinia, neque sed sagittis gravida, nibh orci venenatis eros, et iaculis lectus nunc eget tellus. In hac habitasse platea dictumst. Mauris eu commodo eros.</p>
        
        <p>Pellentesque sed lorem eu odio venenatis sollicitudin iaculis id massa. Duis faucibus dolor eu tempor euismod. Suspendisse potenti. Duis lacinia magna vel malesuada dignissim. Sed vehicula pellentesque cursus. Proin blandit nisl feugiat quam imperdiet laoreet. Vestibulum iaculis libero dolor, a consectetur enim volutpat id. Phasellus scelerisque condimentum sem quis pharetra. Nullam a diam efficitur, cursus mi et, rutrum dolor. Morbi ut quam dui. Morbi congue ullamcorper mattis. Cras sit amet ipsum accumsan, blandit risus nec, gravida purus. Sed rhoncus imperdiet mi porta venenatis. Nulla non efficitur eros. Vivamus dignissim nulla nec placerat consectetur. Maecenas et mi volutpat, sagittis dui eget, auctor lacus.</p>
      </div>
    </div>

    <div class="tabContent" id="usage">
      <h2>Placeholder</h2>
      <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt fermentum elit, vel rhoncus sapien. Pellentesque ornare justo sit amet sapien ornare porttitor. Cras venenatis libero placerat lectus blandit, sed laoreet ex elementum. In hac habitasse platea dictumst. Integer nec dapibus justo, id elementum libero. Aliquam at semper elit, quis maximus elit. Integer euismod, neque sit amet congue elementum, velit neque sollicitudin odio, sit amet viverra magna tortor vel justo. Mauris leo nisl, varius vitae purus vel, consectetur semper nisi. Donec facilisis augue vel turpis tempor, id bibendum nunc pulvinar. Vestibulum lacinia, neque sed sagittis gravida, nibh orci venenatis eros, et iaculis lectus nunc eget tellus. In hac habitasse platea dictumst. Mauris eu commodo eros.</p>
        
        <p>Pellentesque sed lorem eu odio venenatis sollicitudin iaculis id massa. Duis faucibus dolor eu tempor euismod. Suspendisse potenti. Duis lacinia magna vel malesuada dignissim. Sed vehicula pellentesque cursus. Proin blandit nisl feugiat quam imperdiet laoreet. Vestibulum iaculis libero dolor, a consectetur enim volutpat id. Phasellus scelerisque condimentum sem quis pharetra. Nullam a diam efficitur, cursus mi et, rutrum dolor. Morbi ut quam dui. Morbi congue ullamcorper mattis. Cras sit amet ipsum accumsan, blandit risus nec, gravida purus. Sed rhoncus imperdiet mi porta venenatis. Nulla non efficitur eros. Vivamus dignissim nulla nec placerat consectetur. Maecenas et mi volutpat, sagittis dui eget, auctor lacus.</p>
      </div>
    </div>
  </div>
  </body>  
</html>

<?php
$a = @$_POST['parti'];
echo "Du röstade på"." ".$a;


?>