<?php
    $n=567;
     $d;
    $r=0;
     while($n>0)
     {
         $d=$n%10;
         $r=$r*10+$d;
         $n=(int)($n/10);
      }
    printf("Reverse no=%d",$r);
?>