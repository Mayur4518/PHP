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
   $s=0;
    for($i=1;$i<$n;$i++)
    {
      if($n%$i==0)
         $s=$s+$i;
    }
  if($s==$n)
    print("Num is Perfect");
 else
   print("Num is not Perfect");
?>