<html>
  <body>
    <form method="post">
      Enter no:
      <input type="text" name="t1"><br>
      <input type="submit" value="OK">
    </form>
   </body>
  </html>
<?php
   $n=$_POST["t1"];
   $n1;
   $s=0;
   $d;
   $n1=$n;
   while($n>0)
   {
      $d=$n%10;
      $s=$s+$d*$d*$d;
      $n=$n/10;
   }
  if($s==$n1)
     print("Armstrong No");
  else
     print("Not Armstrong No");
?>