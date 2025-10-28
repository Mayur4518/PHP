/*Write a script to accept two integers(Use html form having 2 textboxes). Write a PHP script 
to, 
1.Find mod of the two numbers. 
2.Find the power of first number raised to the second. 
3.Find the sum of first n numbers (considering first number as n) 
4.Find the factorial of second number. 
(Write separate function for each of the above operations.) */
<html>
 <body>
  <form method="POST">
    Enter first no:<input type="text" name="t1"><br>
    Enter second no:<input type="text" name="t2"><br>
    <input type="radio" name="r" value="1">MOD<br>
    <input type="radio" name="r" value="2">POWER<br>
     <input type="radio" name="r" value="3">SUM<br>
    <input type="radio" name="r" value="4">FACTORIAL<br>
  <input type="submit" value="submit">
 </form>
</body>
</html>
<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$ch=$_POST['r'];
switch($ch)
{
 case 1:function mod($a,$b)
             {
             $c=$a%$b;
             echo"Mod=".$c;
             }
             mod($a,$b);
             break;
 case 2:function power($a,$b)
             {
              $p=1;
              for($i=1;$i<=$b;$i++)
              {
                $p=$p*$a;
               }
              echo"Power=".$p;
             }
             power($a,$b);
             break;
 case 3:function sum($a)
             {
               $s=0;
              for($i=1;$i<=$a;$i++)
              {
                $s=$s+$i;
               }
              echo"Sum=".$s;
             }
             sum($a);
             break;
 case 4:function fact($b)
             {
              $f=1;
               for($i=1;$i<=$b;$i++)
               {
                 $f=$f*$i;
               }
              echo"Factorial=".$f;
             }
              fact($b);
              break;
  }
?>
              
              
      