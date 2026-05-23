<?php
  $bname=$_GET["bname"];
  $xml=simplexml_load_file("books.xml");
  foreach($xml->book as $b)
   {
     if($b->bookname==$bname)
     {
       echo"<br> Book no :".$bookno;
       echo"<br> Book name:".$bookname;
       echo"<br> Authername :".$Authername;
       echo"<br> Price:".$price;
        echo"<br> Year:".$year;
      }
   }
 ?>