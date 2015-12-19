<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DD Demo</title>    
    <link rel="stylesheet" type="text/css" href="myCss.css">
  </head>
  
  <body>
  <img src="logo.png" id="logo">
  
  
  <form method="post" action="index.php">
  <table style="width:15%">
    <tr>
      <td>  
        <label>
          <input type="radio" name="parti" value="p1"/>
          <img src="parti1.png">
        </label>
      </td>
      <td>  
        <label>
          <input type="radio" name="parti" value="p2"/>
          <img src="parti2.png">
        </label>
      </td>
    </tr>
    <tr>
      <td>  
        <label>
          <input type="radio" name="parti" value="p3"/>
          <img src="parti3.png">
        </label>
      </td>
      <td>  
        <label>
          <input type="radio" name="parti" value="p4"/>
          <img src="parti4.png">
        </label>
      </td>
    </tr>
    <tr>
      <td>  
        <label>
          <input type="radio" name="parti" value="p5"/>
          <img src="parti5.png">
        </label>
      </td>
      <td>  
        <label>
          <input type="radio" name="parti" value="p6"/>
          <img src="parti6.png">
        </label>
      </td>
    </tr>
    <tr>
      <td>  
        <label>
          <input type="radio" name="parti" value="p7"/>
          <img src="parti7.png">
        </label>
      </td>
      <td>  
        <label>
          <input type="radio" name="parti" value="p8"/>
          <img src="parti8.png">
        </label>
      </td>
    </tr>
  </table>
  
  
  
  
    <input type="text" value=""/>
    <input type="submit" value="skicka!"/>  
  </form>
  <script type="text/javascript">
  
  </script>  
  </body>  
</html>

<?php
$a = @$_POST['parti'];
echo "Du röstade på"." ".$a;


?>