/*Write a PHP script to accept 2 strings from the user, the first string should be a  sentence and 
second can be a word.                                                                                           
1. Delete a small part from first string after accepting position and number of characters to 
remove. 
2. Insert the given small string in the given big string at specified position without 
removing any characters from the big string. 
3. Replace some characters/ words from given big string with the given small string at 
specified position. 
4. Replace all the characters from the big string with the small string after a specified 
position. 
(Use substr_replace() function)*/
<html>
<body>
 <form method="POST">
   Enter First String:
 <input type="text" name="t1"><br>
 Enter Second String;
  <input type="text" name="t2"><br>
Enter Position: 
  <input type="text" name="t3"><br>
Enter no of characters:
  <input type="text" name="t4"><br>
<input type="radio" name="r1" value="1">
Delete a small part of string:<br>
<input type="radio" name="r1" value="2">
Insert the small string:<br>
<input type="radio" name="r1" value="3">
Replace some character from big to small string:<br>
<input type="radio" name="r1" value="4">
Replace all character from big to small string:<br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
$s1=$_POST['t1'];
$s2=$_POST['t2'];
$pos=$_POST['t3'];
$char=$_POST['t4'];
$ch=$_POST['r1'];
switch($ch)
{
 case 1:$s=substr_replace($s1,$s2,$pos,$char);
             echo $s;
             break;
case 2:$s=substr_replace($s1,$s2,$pos,0);
           echo $s;
           break;
case 3:$s=substr_replace($s1,$s2,$pos,$char);
            echo $s;
            break;
case  4:$s=substr_replace($s1,$s2,$pos);
             echo $s;
              break;
}
?>



