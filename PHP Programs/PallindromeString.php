<html>
  <body>
    <form method="post">
      Enter String:
       <input type="text" name="t1">
       <input type="submit" value="OK">
     </form>
   </body>
</html>
<?php
    $s=$_POST["t1"];
    $s1=strrev($s);
    if($s==$s1)
       echo("String is Pallindrome");
    else
        echo("String is not Pallindrome");
  ?>