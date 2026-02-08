<?php
    session_start();
    $username=$_SESSION['username']="Mayur";
    $userid=$_SESSION['userid']="45";
    $class=$_SESSION['class']="TyBcs";
    
    echo"Session variable is set..!";
?>
<html>
     <body>
        <a href="Page1.php"><br>Go</a>
     </body>
  </html>