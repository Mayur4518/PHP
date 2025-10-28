/*Write a PHP script for the following: Design a form to accept the marks of 5 different subjects 
of a student, having serial number, subject name & marks out of 100. Display the result in the 
tabular format which will have total, percentage and grade. Use only 3 text boxes.                           
(Use array of form parameters) */
<html>
 <body>
   <form method="POST">
   Enter sno:<input type="text" name="t1"><br>
   Enter sub name:<input type="text" name="t2"><br>
   Enter Marks:<input type="text" name="t3"><br>
   <input type="submit" value="submit">
  </form>
 </body>
</html>
<?php
 $sno=$_POST['t1'];
 $sname=$_POST['t2'];
 $sm=$_POST['t3'];
 $a=explode(" ",$sno);
 $b=explode(" ",$sname);
 $c=explode(" ",$sm);
 echo("<table border=1>");
 echo("<tr><th>Sr.No</th>
                   <th>Subject</th>
                   <th>Marks</th></tr>");
 $t=0;
 for($i=0;$i<5;$i++)
 {
  echo("<tr><td>$a[$i]</td>
                    <td>$b[$i]</td>
                    <td>$c[$i]</td></tr>");
  $t=$t+$c[$i];
 }
$p=$t/5;
echo("<tr><td colspan=2>Total Marks</td>
                  <td>$t</td></tr>");
echo("<tr><td colspan=2>Percentage</td>
                 <td>$p</td></tr>");
if($p>=90)
  $g="O";
else if($p>=75)
  $g="A";
else if($p>=60)
  $g="B";
else if($p>=35)
  $g="PASS";
else
 $g="FAIL";
echo("<tr><td colspan=2>Grade</td>
                  <td>$g</td></tr>");
?>