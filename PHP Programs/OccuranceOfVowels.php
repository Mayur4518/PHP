<html>
 <body>
  <form method="post">
   Enter String:
  <input type="text" name="t1"><br>
  <input type="radio" name="r1" value="a">Pallindrome or not<br>
  <input type="radio" name="r1" value="b">Occurance of vowels<br>
  <input type="submit" value="Submit">
  <input type="reset">
 </form>
</body>
</html>
<?php
   $s=$_POST["t1"];
   $ch=$_POST["r1"];
   $f=0;
   if($ch=='a')
   {
     for($i=0;$i<strlen($s);$i++);
     for($j=0,$i=$i-1;$j<strlen($s);$j++,$i--)
     {
       if($s[$j]!=$s[$i])
       {
         $f=1;
         break;
        }
     }
     if($f==1)
       echo("Not Pallindrome");
    else
       echo("Pallindrome");
   }
  if($ch=='b')
  {
    $c1=0;$c2=0;$c3=0;$c4=0;$c5=0;
    for($i=0;$i<strlen($s);$i++)
    {
      if($s[$i]=='a')
        $c1++;
      else if($s[$i]=='e')
        $c2++;
       else if($s[$i]=='i')
        $c3++;
        else if($s[$i]=='o')
        $c4++;
      else  if($s[$i]=='u')
        $c5++;
      }
    $cnt=$c1+$c2+$c3+$c4+$c5;
   echo("Total no of vowels:$cnt<br>Occurance of Vowels:<br>a=$c1 e=$c2 i=$c3 o=$c4 u=$c5");
}
?>
       
     