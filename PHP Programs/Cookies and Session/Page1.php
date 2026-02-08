<?php
     session_start();
     $username=$_SESSION['username'];
     $userid=$_SESSION['userid'];
     $class=$_SESSION['class'];
 ?>
<html>
  <?php
       echo"Username:".$username;
      echo"<br>User ID:".$userid;
      echo"<br>Clsss:".$class;
?>
</html>