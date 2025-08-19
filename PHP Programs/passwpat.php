<html>
 <body>
  <form method="post">
    Enter Password:
     <input type="text" name="t1"><br>
     <input type="submit" value="OK">
   </form>
 </body>
</html>
<?php
    $s=$_POST["t1"];
    $pattern="^[A-Z]{1}[a-z][!@#$&*%][0-9]";
     if(preg_match("/$pattern/",$s))
        echo("Valid Password");
     else
         echo("Invalid Password");
?>