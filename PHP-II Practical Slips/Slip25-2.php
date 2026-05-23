<?php
 $tname=$_GET['tname'];
 $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=mayur");
 $q="select*from teacher where tname='$tname';";
 $res=pg_query($con,$q);
 while($row=pg_fetch_row($res))
 {
  echo"$row[0] $row[1] $row[3] $row[4]";
 }
pg_close($con);
?>