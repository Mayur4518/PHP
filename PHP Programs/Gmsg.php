<html>
  <body>
    <form method="post">
     Enter Student name:
      <input type="text" name="t1"><br>
     Enter College name:
      <input type="text" name="t2"><br>
     Enter Greeting message:
      <input type="text" name="t3"><br>
      <input type="submit" value="OK">
    </form>
 </body>
</html>
<?php
    $sname=$_POST["t1"];
    $cname=$_POST["t2"];
    $msg=$_POST["t3"];
    function Gmsg($sname,$cname,$msg)
    {
       echo("<br>$msg $sname to $cname");
    }
   
     Gmsg($sname,$cname,$msg);
?>
           