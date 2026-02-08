//Write a PHP script to keep track of number of times the web page has been access.[use cookie]
<?php
  if(isset($_COOKIE["count"]))
     $count=$_COOKIE["count"]++;
  else
     $_COOKIE["count"]=1;
  setcookie("count",$count,time()+3600);
  echo"<br>Number of times cookies count:".$count;
?>
