<html>
  <body>
    <form method="post">
    Enter array elements:
  <input type="text" name="t1"><br>
   Enter num to search:
 <input type="text" name="t2"><br>
<input type="submit" value="OK">
</form>
</body>
</html>
<?php
$s=$_POST["t1"];
$num=$_POST["t2"];
$a=explode(" ",$s);
$k=array_search($num,$a);
if($k==false)
  echo("Not Found");
else
  echo("Found Position=$k");
?>