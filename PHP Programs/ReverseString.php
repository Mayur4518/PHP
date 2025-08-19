<html>
  <body>
    <form method="post">
      Enter String:
       <input type="text" name="t1">
       <input type="submit" value="Reverse">
     </form>
   </body>
</html>
<?php
   $s=$_POST["t1"];
   $s1=strrev($s);
   echo("Reverse String=$s1");
?>