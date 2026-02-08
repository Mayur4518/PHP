//Write a PHP script to keep track of number of times the web page has been access.[use session]
<?php
  session_start();
  if(isset($_SESSION["count"]))
     $_SESSION["count"]++;
  else
     $_SESSION["count"]=-1;
  echo"Number of times page visits:".$_SESSION["count"];
?>