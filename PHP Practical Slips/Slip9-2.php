/*Write a PHP script for the following: Design a form having a text box and a drop down list 
containing any 3 separators(e.g. #, |, %, @, ! or comma) accept a strings from the user and also 
a separator. 
1. Split the string into separate words using the given separator. 
2. Replace all the occurrences of separator in the given string with some other separator. 
3. Find the last word in the given string. */
  <html>
    <body>
     <form method="POST">
Enter a string:<input type="text" name="t1"><br>
Select a Separator:<select name="sep">
     <option value="#">#</option>
      <option value="|">|</option>
      <option value="%">%</option>
     <option value="@">@</option>
      <option value="!">!</option>   
     <option value=",">,</option> </select><br>
    <input type="radio" name="r" value="1">
       Split the string into separate words:<br>
     <input type="radio" name="r" value="2">
       Replace all the accurances of separator:<br>
     <input type="radio" name="r" value="3">
       Find last word:<br>
   <input type="submit" value="submit">
  </form>
 </body>
</html>
<?php
$s=$_POST['t1'];
$sep=$_POST['sep'];
$ch=$_POST['r'];
switch($ch)
{
 case 1:$words=explode($sep,$s);
             print_r($words);
             break;
case 2:$new="*";
            $s1=str_replace($sep,$new,$s);
            echo $s1;
            break;
case 3:$last=strchr($s,$sep);
           echo $last;
           break;
 }
?>