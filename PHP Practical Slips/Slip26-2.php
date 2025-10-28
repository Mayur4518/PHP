/*.Write a menu driven program to perform the following operations on associative arrays: 
1. Split an array into chunks 
2. Sort the array by values without changing the keys. 
3. Filter the odd elements from an array. 
4. Merge the given arrays. 
5. Find the intersection of two arrays. 
6. Find the union of two arrays. 
7. Find set difference of two arrays.            */

   <html> 
  <body> 
     <form method="POST" action="#"> 
        <input type="radio" name="t1" value="1">1. Split an array into chunks <br> 
        <input type="radio" name="t1" value="2">2. Sort the array by values without changing the keys.  
        <input type="radio" name="t1" value="3">3. Filter the odd elements from an array.  
        <input type="radio" name="t1" value="4">4. Merge the given arrays.  
        <input type="radio" name="t1" value="5">5. Find the intersection of two arrays.  
        <input type="radio" name="t1" value="6">6. Find the union of two arrays.  
        <input type="radio" name="t1" value="7">7. Find set difference of two arrays.      
        <input type="submit" value="submit"> 
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
            case 3:function testodd($var) 
                     { 
                         return($var%2==1);  
                     }  
                   print_r(array_filter($a,"testodd"));  
                  break;  
          case 4:print_r(array_merge($a,$b)); 
                  break;  
          case 5:print_r(array_intersect($a,$b)); 
                  break; 
          case 6:$c=$a+$b; 
                 print_r($c);  
                  break; 
          case 7:print_r(array_diff($a,$b));      
                  break;  
       }     
?> 