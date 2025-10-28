/*Create a database using postgres and create student table,write a php script to insert 5 values 
into student table. */  
  <?php
     $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=mayur");
   if($con)
      echo"connected";
    else
      echo"Not connected";
  $sql="create table student(rno int,name varchar(20))";
  $res=pg_query($con,$sql);
  if($res){
               echo"Table created";
            }
  else{
            echo"Not created";
         }
 
  $sql1="insert into student(rno,name) values(1,'Mayur'),(2,'Nikhil'),(3,'Siddharth'),(4,'Shravan'),(5,'Pranav')";
   $r=pg_query($con,$sql1);
  if($r){
      echo"inserted";
      }
  else
    {
      echo"Not inserted";
  }
pg_close($con);
?>   