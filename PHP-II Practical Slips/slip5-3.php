<?php
session_start();
$basic=$_POST["t1"];
$da=$_POST["t2"];
$hra=$_POST["t3"];
$eno=$_SESSION["eno"];
$ename=$_SESSION["ename"];
$addr=$_SESSION["addr"];
$t=$basic+$da+$hra;
echo"Employee No:".$eno;
echo"<br>Employee Name:".$ename;
echo"<br>Employee Address:".$addr;
echo"<br>Employee Basic sal:".$basic;
echo"<br>Employee DA sal:".$da;
echo"<br>Employee HRA SAL:".$hra;
echo"<br>Employee Total sal:".$t;
?>

