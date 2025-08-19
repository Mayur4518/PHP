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
  $d;
  $r=0;
  $n1=$n;
   while($n>0)
   {
     $d=$n%10;
     $r=$r*10+$d;
     $n=(int)($n/10);
    }
   if($r==$n1)
      print("No is Pallindrome");
   else
     print("No is Not Pallindrome");
?>