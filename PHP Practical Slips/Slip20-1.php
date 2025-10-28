/*.Write a menu driven program to perform the following operations on associative arrays: 
1. Split an array into chunks 
2. Sort the array by values without changing the keys. 
3. Filter the even elements from an array.            */

   <html> 
  <body> 
     <form method="POST" action="#"> 
        <input type="radio" name="t1" value="1">1. Split an array into chunks <br> 
        <input type="radio" name="t1" value="2">2. Sort the array by values without changing the keys.  
        <input type="radio" name="t1" value="3">3. Filter the even elements from an array.                                                             <input type="submit" value="submit"> 
     </form>  
  </body> 
</html> 
<?php 
    $ch=$_POST['t1']; 
    $a=array(2,4,110,10,14,111,122,56,22); 
    $b=array(222,54,16,110,124,111,122,516,122); 
    switch($ch) 
      { 
            case 1:print_r(array_chunk($a,3)); 
                  break; 
            case 2:asort($a);  
                   print_r($a); 
                  break; 
            case 3:function testeven($var) 
                     { 
                         return($var%2==0);  
                     }  
                   print_r(array_filter($a,"testeven"));  
                  break;  
                }     
?> 