/* Write a PHP script for the following: Design a form to accept two numbers from the user. 
Give options to choose the arithmetic operation (use radio buttons). Display the result on the 
next form. (Use the concept of function and default parameters. Use ‘include’ construct or 
require statement)    */
<html>
  <body>
    <form method="POST">
      Enter first no:<input type="text" name="t1"><br>
      Enter second no:<input type="text" name="t2"><br>
    1.Addition<input type="radio" name="r" value="1"><br>
    1.Substraction<input type="radio" name="r" value="2"><br>
    1.Multiplication<input type="radio" name="r" value="3"><br>
    1.Division<input type="radio" name="r" value="4"><br>
    <input type="submit" value="submit">
  </form>
 </body>
</html>
<?php
    include'fun.php';
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $ch=$_POST['r'];
    switch($ch)
    {
     case 1:$c=add($a,$b);
                 echo"Addition=".$c;
                 break;
      case 2:$c=sub($a,$b);
                 echo"Substraction=".$c;
                 break;
       case 3:$c=multi($a,$b);
                 echo"Multiplication=".$c;
                 break;
       case 4:$c=div($a,$b);
                 echo"Division=".$c;
                 break;
    }
?>
