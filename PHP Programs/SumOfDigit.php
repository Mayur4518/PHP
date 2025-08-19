<html>
  <body>
    <form method="post">
      Enter no:
      <input type="text" name="t1"><br>
      <input type="submit" value="Sum">
    </form>
   </body>
  </html>
<?php
   $d;
   $s=0;
  $n=$_POST["t1"];
  while($n>0)
  {
    $d=$n%10;
    $s=$s+$d;
    $n=$n/10;
 }
printf("Sum of Digit=%d",$s);
?>