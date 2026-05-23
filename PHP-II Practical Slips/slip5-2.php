<?php
  session_start();
  $eno=$_POST["t1"];
  $ename=$_POST["t2"];
  $addr=$_POST["t3"];
  $_SESSION["eno"]=$eno;
  $_SESSION["ename"]=$ename;
  $_SESSION["addr"]=$addr;
?>
<html>
<body>
<form method="POST" action="slip5-3.php">
Enter Basic Salary:<input type="text" name="t1"><br>
Enter DA salary:<input type="text" name="t2"><br>
Enter HRA salary:<input type="text" name="t3"><br>
<input type="submit" value="submit">
</form>
</body>
</html>


  