<html>
  <body>
   <form method="post">
     Enter String:
     <input type="text" name="t1"><br>
     <input type="radio" name="r1" value="a">Length of string:<br>
     <input type="radio" name="r1" value="b">Vowel String:<br>
     <input type="radio" name="r1" value="c">Convert into Titlecase:<br>
     <input type="radio" name="r1" value="d">Fillinto ***:<br>
     <input type="radio" name="r1" value="e">Remove Space:<br>
     <input type="radio" name="r1" value="f">Reverse string:<br>
     <input type="submit" value="OK">
   </form>
 </body>
</html>
<?php
    $s=$_POST["t1"];
    $ch=$_POST["r1"];
     if($ch=='a')
     {
       length($s);
      }
     function length($s)
     {
     $cnt=0;
     for($i=0;isset($s[$i]);$i++)
      {
         $cnt++;
       }
      echo("Length of String=$cnt");
   }
   if($ch=='b')
   {
      vowelcount($s);
    }
   function vowelcount($s)
   {
     $c=0;
     for($i=0;isset($s[$i]);$i++)
     {
        if($s[$i]=='a' ||$s[$i]=='e' ||$s[$i]=='i' ||$s[$i]=='o' ||$s[$i]=='u')
           $c++;
     }
     echo("<br>Vowel Count=$c");
 }
    if($ch=='c')
    {
      $s1=strtolower($s);
      echo("<br>String in lowercase=".$s1);
      echo("<br>String in Title case=".ucwords($s1));
    }
   if($ch=='d')
   {
     $s2=str_pad($s,20,"*",STR_PAD_BOTH);
     echo("<br>$s2");
    }
   if($ch=='e')
   { 
     $s3=trim($s);
     echo("<br>$s3");
    }
    if($ch=='f')
    {
      $r=strrev($s);
      echo("<br>Revesre string=".$r);
    }
?>