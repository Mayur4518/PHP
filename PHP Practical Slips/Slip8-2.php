/*.Design an HTML form to accept two strings from the user. Write a PHP script for the         
following. 
1. Find whether the small string appears at the start of the large string. 
2. Find the position of the small string in the big string. 
3. Compare both the string for first n characters, also the comparison should not be case 
sensitive.*/
<html>
   <body>
     <form method="post">
    Enter small string:
      <input type="text" name="t1"><br>
    Enter Big String:
      <input type="text" name="t2"><br>
    1.Appearance of string:<br>
     2.Position of string:<br>
     3.Compare string:<br>
   Enter choice:<input type="text" name="ch">
    <input type="submit" value="submit">
  </form>
</body>
</form>
<?php
    $s1=$_POST['t1'];
     $s2=$_POST['t2'];
    $ch=$_POST['ch'];
      switch($ch)
      {
        case 1:$k=strpos($s1,$s2);
                    if($k==0)
                       echo"Small string appears at the start of large string";
                     else
                        echo"Not appears";
                     break;
         case 2:$k=strpos($s1,$s2);
                     echo"Position of small string=".$k;
                     break;
         case 3:$k=strncasecmp($s1,$s2,4);
                     if($k==0)
                        echo"Strings are same";
                      else if($k>1)
                         echo"First string greater";
                      else
                          echo"Second string Greater";
    }
?>