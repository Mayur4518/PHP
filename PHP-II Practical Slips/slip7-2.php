<?php
  $name=$_POST["t1"];
  $addr=$_POST["t2"];
  $mob=$_POST["t3"];
  setcookie("name",$name);
  setcookie("addr",$addr);
  setcookie("mob",$mob);
?>
<html>
<body>
<form method="POST" action="slip7-3.php">
Enter Product name:<input type="text" name="t1"><br>
Enter quantity:<input type="text" name="t2"><br>
Enter rate:<input type="text" name="t3"><br>
<input type="submit" value="submit">
</form>
</body>
</html>

