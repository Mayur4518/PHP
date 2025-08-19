<html>
  <body>
   <form method="post">
     Enter Radius:
       <input type="text" name="r"><br>
       <input type="submit" value="Area of Circle"><br>
     Enter length:
       <input type="text" name="s"><br>
       <input type="submit" value="Area of Square"><br>
     Enter length and Breadth:
       <input type="text" name="l"><br>
       <input type="text" name="b"><br>
       <input type="submit" value="Area of Rectangle">

    </form>
  </body>
</html>
<?php
     $r1=$_POST["r"];
     $c=2*3.14*$r1;
     printf("Area of Circle=%f",$c);
     $s1=$_POST["s"];
     $s2=$s1*$s1;
     printf("Area of Square=%d",$s2);
     $a1=$_POST["l"];
     $a2=$_POST["b"];
     $a3=$a1*$a2;
     printf("Area of Rectangle=%d",$a3);
?>