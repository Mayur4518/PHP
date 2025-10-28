/*Write a menu driven program to perform the following stack related operations: 
1)Insert an element in stack 
2)Delete an element from stack 
3)Display the contents of stack*/
<html>
 <body>
  <form method="POST">
      1)Insert an element in stack<br> 
      2)Delete an element from stack <br>
      3)Display the contents of stack <br>
    Enter Choice:
   <input type="text" name="ch"><br>
   <input type="submit" value="submit">
  </form>
 </body>
</html>
<?php
  $ch=$_POST['ch'];
  $a=array(45,18,10);
  switch($ch)
  {
    case 1:array_push($a,93);
                print_r($a);
                break;
    case 2:array_pop($a);
                print_r($a);
                break;
   case 3:print_r($a);
               break;
 }
?>