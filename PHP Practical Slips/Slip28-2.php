/*Create a HTML form accepting information of college(collegeno,collegename,address) and insert it 
into college table (use postgres).          */
<html>
 <body>
   <form method="POST">
       Enter college No:<input type="number" name="t1"><br>
       Enter college Name:<input type="text" name="t2"><br>
       Enter college Address:<input type="text" name="t3"><br>
       <input type="submit" value="Insert"><br>
    </form>
 </body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST')
   {
    $no=$_POST['t1'];
    $name=$_POST['t2'];
    $addr=$_POST['t3'];
     $con=pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=mayur");
   if($con)
      echo"connected";
    else
      echo"Not connected";
     }
 $sql1="insert into college (cno,cname,addr)values($no,'$name','$addr')";
$r=pg_query($con,$sql1);
if($r)
      echo"Inserted";
else
      echo"Not inserted";
pg_close($con);
?>
   