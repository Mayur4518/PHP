<?php
   $aname=$_GET["aname"];
   $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=mayur");
   $q="select m.mno,m.mname,m.release_year from movie m,actor a where a.ano=m.ano
          and a.aname='$aname'"; 
    $res=pg_query($con,$q);
    while($row=pg_fetch_row($res))
    {
       echo"$row[0] $row[1] $row[2]<br>";
      }
    pg_close($con);
?>