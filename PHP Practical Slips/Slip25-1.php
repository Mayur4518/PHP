/*Create a database using postgres and create teacher table,write a php script to insert 5 values 
into teacher table*/
<?php
     $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=mayur");
   if($con)
      echo"connected";
    else
      echo"Not connected";
  $sql="create table teacher1(tno int,tname varchar(20))";
  $res=pg_query($con,$sql);
 
  $sql1="insert into teacher(tno,tname) values(1,'Mahesh'),(2,'Rohit'),(3,'Shinde'),(4,'Pawar'),(5,'Wamane')";
   $r=pg_query($con,$sql1);
  echo"inserted";
?>