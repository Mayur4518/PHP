<html>
 <body>
  <form method="post">
    Enter Email Id:
     <input type="text" name="t1"><br>
     <input type="submit" value="OK">
   </form>
 </body
</html>
<?php
    $s=$_POST["t1"];
    $pattern="^[a-z0-9]+@[a-z]+\.com";
    if(preg_match("/$pattern/",$s))
       echo("Valid Email Id");
    else
       echo("Invalid Email Id");
?>