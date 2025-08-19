<html>
 <body>
  <form method="post">
    Enter Pan No:
     <input type="text" name="t1"><br>
     <input type="submit" value="OK">
   </form>
 </body>
</html>
<?php
    $s=$_POST["t1"];
    $pattern="^[A-Z]{5}[0-9]{4}[A-Z]$";
    if(preg_match("/$pattern/",$s))
       echo("Valid Pan no..!");
    else
        echo("Invalid Pan no..!");
?>