/*Design a form to accept string from the user and perform the following operations 
1. To select first 5 words from the string 
2. Convert the given string to lowercase and then to Title case. 
3. Pad the given string with “*” from left and right both the sides. 
4. Remove the leading whitespaces from the given string. 
5. Find the reverse of given string.  */
<html>
 <body>
   <form method="POST">
    Enter String:
     <input type="text" name="s"><br>
   1.Select first 5 words<br>
   2.Lowercase and Titlecase<br>
   3.Padding<br>
   4.Remove Leading Whitespace<br>
   5.Reverse String<br>
  Enter your choice:<input type="text" name="c"><br>
  <input type="submit" value="submit">
</form>
</body>
</html>
<?php
   $s1=$_POST['s'];
   $ch=$_POST['c'];
   switch($ch)
   {
    case 1:$words=explode(" ",$s1);
                $five=array_slice($words,0,5);
                $res=implode(" ",$five);
                echo"First five words from string:".$res;
                break;
    case 2:echo"Lowercase:".strtolower($s1);
                echo"Titlecase:".ucwords($s1);
                break;
    case 3:echo"String after padding:".str_pad($s1,10,"*",STR_PAD_BOTH);
                break;
    case 4:echo"String after removing leading whitespace:".trim($s1);
                break;
    case 5:echo"Reverse String:".strrev($s1);
                break;
 }
?>