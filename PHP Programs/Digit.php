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
   $r=0;
   $d;
    while($n>0)
    {
      $d=$n%10;
      $r=($r*10)+$d;
      $n=(int)($n/10);
    }
 while($r>0)
 {
   $d=$r%10;
   $r=(int)($r/10);
   switch($d)
   {
     case 0:print("Zero");
                 break;
    case 1:print("One");
                 break;
    case 2:print("Two");
                 break;
    case 3:print("Three");
                 break;
    case 4:print("Four");
                 break;
    case 5:print("Five");
                 break;
    case 6:print("Six");
                 break;
    case 7:print("Seven");
                 break;
     case 8:print("Eight");
                 break;
    case 9:print("Nine");
                 break;
  }
}
?>