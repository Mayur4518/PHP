<html>
  <body>
    <form method="post">
     Enter First No:
     <input type="text" name="t1"><br>
     Enter Second No:
     <input type="text" name="t2"><br>
      <input type="submit" value="OK">
    </form>
 </body>
</html>
<?php
    $a=$_POST["t1"];
    $b=$_POST["t2"];
    function mod($a,$b)
    {
      $c=$a%$b;
      printf("Mod=%f",$c);
    }
   mod($a,$b);
   function power($a,$b)
   {
      $pow=1;
     for($i=1;$i<=$b;$i++)
     {
       $pow=$pow*$a;
     }
     echo("<br>Power=".$pow);
   }
   power($a,$b);
   function sum($a)
   {
      $s=0;
     for($i=1;$i<=$a;$i++)
     {
      $s=$s+$i;
     }
    echo("<br>Sum of first n numbers=".$s);
   }
  sum($a);
     function fact($b)
     {
       $f=1;
       for($i=1;$i<=$b;$i++)
       {
         $f=$f*$i;
       }
      echo("<br>Factorial=".$f);
     }
    fact($b);
?>