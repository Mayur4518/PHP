<?php
 $cname=$_GET['$cname'];
 $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=mayur");
 $q="select o.ono,o.oname,o.shipping_add from cust c,ord o where c.cno=o.cno and cname='$cname';";
  $res=pg_query($con,$q);
 while($row=pg_fetch_row($res))
 {
  echo"$row[0] $row[1] $row[2]";
 }
pg_close($con);
?>