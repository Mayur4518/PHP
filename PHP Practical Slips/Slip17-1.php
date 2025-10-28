/*Write a PHP script to sort the following associative array: 
array(“Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40") in 
1. ascending order sort by Value 
2. ascending order sort by Key 
3. descending order sorting by Value 
4. descending order sorting by Key. */
<html>
 <body>
   <form method="POST">
 1.ascending order sort by Value 
2. ascending order sort by Key 
3. descending order sorting by Value 
4. descending order sorting by Key.
 Enter choice:<input type="text" name="ch"><br>
 <input type="submit" value="submit">
</form>
</body>
</html>
<?php
 $ch=$_POST['ch'];
 $a=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
 switch($ch)
 {
   case 1:asort($a);
               echo"ascending order sort by Value";
              print_r($a); 
              break;
   case 2:ksort($a);
               echo"ascending order sort by Key";
               print_r($a);
               break;
   case 3:arsort($a);
               echo"descending order sorting by Value";
               print_r($a);
               break;
   case 4:krsort($a);
               echo"descending order sorting by Key";
               print_r($a);
               break;
}
?>
  