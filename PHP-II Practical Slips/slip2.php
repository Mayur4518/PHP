//Write a PHP script to keep track of number of times the web page has been access[Use Cookies]
<?php
  if(isset($_COOKIE["count"]))
  {
   $count=$_COOKIE["count"]+1;
  }
  else
  {
   $count=1;
   }
  setcookie("count",$count);
  echo"Cookie count=".$count;
?>
