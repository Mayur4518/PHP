<html>
  <body>
   <form method="post">
       Enter large string:
       <input type="text" name="t1"><br>
       Enter small string:
       <input type="text" name="t2"><br>
        1-find small string at first position:<br>
        2-find position of small string in large string:<br>
        3-Compare string:<br>
       Enter your choice:
        <input type="text" name="ch"><br>
        <input type="submit" value="OK">
     </form>
  </body>
</html>
<?php
    $s1=$_POST["t1"];
    $s2=$_POST["t2"];
    $ch=$_POST["ch"];
    switch($ch)
    {
   case 1:$k=substr_compare($s1,$s2,0,5);
                if($k==0)
                 echo("$s2 found at the start of the large string");
              else
                echo("Not Found");
              break;

  case 2: $pos=strpos($s1,$s2);
               if($pos==true)
                   echo("<br>Small string found at postion=".$pos);
               else
                   echo("<br>Small string not found");
               break;
              
 case 3: $k=strncasecmp($s1,$s2,5);
              if($k==0)
                echo("Strings are same");
              if($k>1)
                 echo("First string greater");
              if($k<1)
                 echo("Second string greater");
              break;
}
  
?>