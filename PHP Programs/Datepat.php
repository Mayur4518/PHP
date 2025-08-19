<html>
  <body>
   <form method="post">
     Enter Date:
      <input type="text" name="t1"><br>
      <input type="submit" value="OK"><br>
    </form>
  </body>
</html>
<?php
   $s=$_POST["t1"];
   $pattern="^[0-9]{2}+\-[a-zA-Z]+\-[0-9]{4}";
   if(preg_match("/$pattern/",$s))
      echo("Valid Date");
   else
      echo("Invalid Date");
?>