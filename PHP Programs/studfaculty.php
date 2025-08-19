<html>
 <body>
  <form method="post">
  Enter Roll No:
  <input type="text" name="t1"><br>
  <input type="submit" value="OK">
 </form>
</body>
</html>
<?php
  $rno=$_POST["t1"];
  $f=substr($rno,0,2);
  $y=substr($rno,2,1);
  $n=substr($rno,3,3);
   if($f=="BS")
      echo("<br>Faculty=BSC");
   if($f=="BC")
      echo("<br>Faculty=B.COM");
   if($f=="BA")
      echo("<br>Faculty=B.A");
   if($y==1)
      echo("<br>Year=1st Year");
   if($y==2)
      echo("<br>Year=2nd Year");
   if($y==3)
      echo("<br>Year=3rd Year");

   echo("<br>Actual no=$n");
?>

