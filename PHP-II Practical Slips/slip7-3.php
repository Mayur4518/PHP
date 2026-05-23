<?php
$pname=$_POST["t1"];
$qty=$_POST["t2"];
$rate=$_POST["t3"];
$name=$_COOKIE["name"];
$addr=$_COOKIE["addr"];
$mob=$_COOKIE["addr"];
$t=$qty*$rate;
echo"<br>Customer Name=".$name;
echo"<br>Customer Address=".$addr;
echo"<br>Mobile no=".$mob;
echo"<br>Product Name=".$pname;
echo"<br>Product Quantity=".$qty;
echo"<br>Product Rate=".$rate;
echo"<br>Total=".$t;
?>
