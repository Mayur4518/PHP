 /*Write a PHP script that inserts a new item in an array at any position. (hint : use 
array_splice())*/
<?php
  echo"<br>";
 $a=array(45,18,10,93,33);
  $b=array(77,17);
 $c=array_splice($a,2,0,$b);
print_r($a);
?>