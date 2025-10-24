/*Write a menu driven program to perform various file operations. Accept filename 
from user.                                                                                                                           
1. Display type of file. 
2. Display last modification time of file 
3. Display the size of file 
4. Delete the file*/
<html>
  <body>
    <form method="post">
     Enter file name:
    <input type="text" name="t1"><br>
    1.Type of file<br>
     2.Last modified Time<br>
     3.Size of file<br>
    4.Delete file<br>
 Enter your choice:
<input type="text" name="ch"><br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
    $f=$_POST['t1'];
    $ch=$_POST['ch'];
    switch($ch)
    {
      case 1:$type=filetype($f);
                  echo"Type of file:".$type;
                  break;
      case 2:echo" Last Modified Time:".fileatime($f);
                  break;
      case 3:echo"Size of file".filesize($f);
                  break;
       case 4:if(file_exists($f))
                   {
                     unlink($f);
                      echo"Deleted..!";
                    }
                    else
                        echo"Not Found..!";
                   break;
    }
?>