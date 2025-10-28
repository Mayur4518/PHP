/*.Write a PHP script for the following: Design a form to accept a string.  
1. Write a function to find the length of given string without using built in functions.   
2. Write a function to count the total number of vowels i.e. (a,e,i,o,u) ) from the string.   
3. Convert the given string to lowercase and then to Title case.  
4. Pad the given string with “*” from left and right both the sides.  
5. Remove the leading whitespaces from the given string.  */
<html>
 <body>
   <form method="POST">
  Enter a string:
  <input type="text" name="t1"><br>
  <input type="radio" name="r" value="1">
  Lenght:<br>
  <input type="radio" name="r" value="2">
  Vowel count:<br>
 <input type="radio" name="r" value="3">
  Titlecase:<br>
 <input type="radio" name="r" value="4">
  Padding:<br>
 <input type="radio" name="r" value="5">
  Remove Whitespace:<br>
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
 $s=$_POST['t1'];
 $ch=$_POST['r'];
 switch($ch)
{
 case 1:function length($s)
             {
             $cnt=0;
             while($s[$cnt]!=null)
             {
               $cnt++;
              }
             echo"length of string=".$cnt;
            }
             length($s);
             break;
case 2:function vowel($s)
            {
             $cnt=0;
             for($i=0;$i<strlen($s);$i++)
             {
               if($s[$i]=='a'||$s[$i]=='e'||$s[$i]=='i'||$s[$i]=='o'||$s[$i]=='u')
               {
                $cnt++;
               }
             }
             echo"Vowel count=".$cnt;
            }
            vowel($s);
            break;
case 3:function titlecase($s)
            {
            $s1=strtolower($s);
            echo"Lower case=".$s1;
            $s2=ucwords($s1);
            echo"Title case=".$s2;
            }
           titlecase($s);
           break;
case 4:function padding($s)
            {
              $s1=str_pad($s,10,"*",STR_PAD_BOTH);
              echo"Padding string=".$s1;
             }
            padding($s);
            break;
case 5:function remove($s)
           {
             $s1=ltrim($s);
             echo $s1;
           }
           remove($s);
           break;
}
?>
 

