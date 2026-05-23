<?php
  $style=$_POST["t1"];
  $fsize=$_POST["t2"];
  $fcolor=$_POST["t3"];
  $bgcolor=$_POST["t4"];
  setcookie("style",$style);
  setcookie("fsize",$fsize);
  setcookie("fcolor",$fcolor);
  setcookie("bgcolor",$bgcolor);
  echo"<br>Font Style:".$style;
  echo"<br>Font size:".$fsize;
  echo"<br>Font color:".$fcolor;
  echo"<br>Background color:".$bgcolor;
?>
<html>
<body>
 <a href="slip3-3.php">OK</a>
</body>
</html>