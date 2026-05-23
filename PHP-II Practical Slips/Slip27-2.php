<?php
   if(isset($_GET["str"]))
   {
     $str=$_GET["str"];
     $a=["apple","strawberry","pineapple","custard apple","water melon"];
     if($str!=" ")
     {
       echo"Suggestions:<br>";
       foreach($a as $i)
       {
         if(strpos($i,$str)!=false)
         {
           echo $i."<br>";
         }
       }
      }
    }
?>