/*Create an array of 15 high temperatures, approximating the weather for a spring month, then 
find the average high temp, the five warmest high temps Display the result on the browser.*/
<?php
   $ht=array(78,89,78,67,87,99,78,66,56,78,76,89,81,82,89);
   $cnt=count($ht);
   $t=0;
   foreach($ht as $h)
   {
     $t=$t+$h;
    }
   $avg=round($t/$cnt);
   echo"The Average High Temp for spring monthwas $avg &amp;deg;F.<br>";
   rsort($ht);
   $toptemp=array_slice($ht,0,5);
   echo"The warmest high temp were:<br>";
   foreach($toptemp as $tt)
   {
    echo"$tt &amp;deg;F<br>";
   }
 $lowtemp=array_slice($ht,-5,5);
 echo"The coolest high temp were:<br>";
 foreach($lowtemp as $lt)
 {
  echo"$lt &amp;deg;F<br>";
 }
?>
