/*.Write a menu driven program to perform the following operations on an associative array 
1. Reverse the order of each element’s key-value pair. 
2. Traverse the element in an array in random order. 
3. Convert the array elements into individual variables. 
4. Display the elements of an array along with key. */
 <html>
   <body>
   <form method="POST">
    Reverse<br>
    Traverse<br>
     Convert<br>
     Display<br>
   Enter choice<input type="number" name="ch"><br>
   <input type="submit" value="submit">
</form>
</body>
</html>
<?php
    $a=array("a"=>"Prasad","b"=>"Nikhil","c"=>"Mayur","d"=>"Sid");
    $ch=$_POST['ch'];
    switch($ch)
    {
      case 1:$r=array_reverse($a);
                   print_r($r);
                   break;
      case 2:shuffle($a);
                  print_r($a);
                  break;
       case 3:extract($a);
                   echo $a." ".$b." ".$c." ";
                   break;
       case 4:print_r($a);
                   break;
   }
?>