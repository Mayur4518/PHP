<?php
  $name=$_GET['name'];
  $a=["Rohit","Virat","Dhoni","Ashwin","Harbhajan"];
  if($name==" ")
  {
    echo"Stranger please tell me your name";
  }
 else
  {
    if(in_array($name,$a))
     {
        echo"Hello Master".$name;
       }
    else
    {
      echo $name."I don't know you";
    }
 }
?>