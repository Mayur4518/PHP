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
   for($i=2;$i<$n;$i++)
   {
    if($n%$i==0)
      {
        $s=1;
        break;
       }
    }
  if($s==0)
     print("Num is Prime");
  else
     print("Num is Not Prime");
?>
