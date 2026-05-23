/*Write a PHP script to accept username and password. If in the first three chances, 
username and password entered is correct then display second form with “Welcome 
message” otherwise display error message. [Use Session]*/
<html> 
 <body> 
  <form method="POST"> 
     Enter username:<input type="text" name="t1"><br> 
     Enter password:<input type="text" name="t2"><br> 
     <input type="submit" value="submit"> 
  </form> 
 </body> 
</html>
<?php
  session_start();
  $u=$_POST["t1"];
  $p=$_POST["t2"];
  if(isset($_SESSION['c']))
  {
    if($u=="mayur" && $p=="rohit" && $_SESSION['attempt']<=3)
    {
      echo"Welcome";
     }
    else if($_SESSION['attempt']<=3)
    {
     echo"Error occurred";
     $_SESSION['attempt']+=1;
    }
    else
    {
      echo"Max reach";
     }
 }
 else
 {
   $_SESSION['c']=1;
   $_SESSION['attempt']=1;
   if($u=="mayur" && $p=="rohit" && $_SESSION['attempt']<=3)
   {
      echo"Welcome";
   }
  else
  {
    echo"Invalid";
   }
}
?>
