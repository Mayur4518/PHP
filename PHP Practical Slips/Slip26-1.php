/*Write a PHP program to read two file names from user and copy the content of first file 
into second file.*/
<html>
  <body>
    <form method="post">
  Enter first file name:
    <input type="text" name="t1"><br>
  Enter second file name:
    <input type="text" name="t2"><br>
  <input type="submit" value="copy">
</form>
</body>
</html>
<?php
   $f1=$_POST['t1'];
   $f2=$_POST['t2'];
   $fp1=fopen($f1,"r");
   $fp2=fopen($f2,"w");
   if(copy($f1,$f2))
   {
     echo"Copied";
  }
  else
  {
    echo"Not Copied";
  }
?>