<html>
 <body>
  <form method="post">
   Enter First String:
     <input type="text" name="t1"><br>
  Enter Second String:
     <input type="text" name="t2"><br>
   <input type="submit" value="OK">
</form>
</body>
</html>
<?php
   $s1=$_POST["t1"];
   $s2=$_POST["t2"];
    echo("Concatenate String=".$s1.$s2);
  ?>