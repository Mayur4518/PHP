<html>
 <body>
  <form method="post">
   Enter Sno:
   <input type="text" name="t1"><br>
   Enter Subjects Name:
   <input type="text" name="t2"><br>
  Enter Marks :
   <input type="text" name="t3"><br>
   <input type="submit" value="OK">
  </form>
 </body>
</html>
<?php
    $sr=$_POST["t1"];
    $sn=$_POST["t2"];
    $sm=$_POST["t3"];
    $a=explode(" ",$sr);
    $b=explode(" ",$sn);
    $c=explode(" ",$sm);
    echo("<table border=1 size=500>");
    echo("<tr>
     <th>Sr.no</th>
     <th>Subject</th>
     <th>Marks</th>
     </tr>");
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
      else if($p>=55)
          $g="B";
       else if($p>=35)
          $g="PASS";
       else if($p>35)
          $g="FAIL";
      echo("<tr><td colspan=2>Grade</td>
                 <td>$g</td></tr>");


    ?>
      