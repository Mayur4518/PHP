<html>
  <body>
    <form method="post">
      Enter No.1:
       <input type="text" name="t1"><br>
      Enter No.2:
        <input type="text" name="t2"><br>
      <input type="radio" name="r1" value="add">Addition<br>
      <input type="radio" name="r1" value="sub">Substraction<br>
      <input type="radio" name="r1" value="multi">Multiplication<br>
      <input type="radio" name="r1" value="div">Division<br>
    <input type="submit" value="OK">
  </form>
 </body>
</html>
<?php
   $a=$_POST["t1"];
   $b=$_POST["t2"];
   $ch=$_POST["r1"];
   $c=0;
   if($ch=="add")
      $c=$a+$b;
   if($ch=="sub")
      $c=$a-$b;
   if($ch=="multi")
      $c=$a*$b;
    if($ch=="div")
      $c=$a/$b;
    echo("Result=$c");
  ?>
   
