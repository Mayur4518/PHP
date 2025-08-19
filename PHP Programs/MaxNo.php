<html>
  <body>
    <form method="post">
      Enter no1:
      <input type="text" name="t1"><br>
      Enter no2:
      <input type="text" name="t2"><br>
      <input type="submit" value="OK">
    </form>
   </body>
  </html>
<?php
   $a=$_POST["t1"];
   $b=$_POST["t2"];
   $m=($a>$b)?a:b;
?>
  