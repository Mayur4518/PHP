<html>
 <body>
  <form method="post">
   Enter Item code:
   <input type="text" name="t1"><br>
   Enter Item Name:
   <input type="text" name="t2"><br>
  Enter Quantity :
   <input type="text" name="t3"><br>
   Enter Rate :
   <input type="text" name="t4"><br>
   <input type="submit" value="OK">
  </form>
 </body>
</html>
<?php
   $ic=$_POST["t1"];
   $in=$_POST["t2"];
   $q=$_POST["t3"];
   $r=$_POST["t4"];
   $a=explode(" ",$ic);
   $b=explode(" ",$in);
   $c=explode(" ",$q);
   $d=explode(" ",$r);
   echo("<table border=1>
              <tr><th>ItemCode</th>
                    <th>ItemName</th>
                    <th>Quantity</th>
                    <th>Rate</th>
                    <th>Total</th></tr>");
  $st=0;
 for($i=0;$i<5;$i++)
 {
    $t[$i]=$c[$i]*$d[$i];
    $st=$st+$t[$i];
   echo("<tr><td>$a[$i]</td>
                     <td>$b[$i]</td>
                     <td>$c[$i]</td>
                     <td>$d[$i]</td>
                     <td>$t[$i]</td></tr>");
}
 echo("<tr><td colspan=4>Sub Total</td>
                  <td>$st</td></tr>");
?>