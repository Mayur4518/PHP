//Write a php script to generate an XML file in the following format using DOM functions//
<?php
 $xml=new DOMDocument("1.0","UTF-8");
 $root=$xml->createElement("Bookinfo");
 $xml->appendChild($root);
 $book1=$xml->createElement("book");
 $root->appendChild($book1);
 $book1->appendChild($xml->createElement("bookno","1"));
 $book1->appendChild($xml->createElement("bookname","JAVA"));
 $book1->appendChild($xml->createElement("Authorname","Balguru Swami"));
 $book1->appendChild($xml->createElement("price","250"));
 $book1->appendChild($xml->createElement("year","2006"));

 $book2=$xml->createElement("book");
 $root->appendChild($book2);
 $book2->appendChild($xml->createElement("bookno","2"));
 $book2->appendChild($xml->createElement("bookname","C"));
 $book2->appendChild($xml->createElement("Authorname","Denis Ritchie"));
 $book2->appendChild($xml->createElement("price","500"));
 $book2->appendChild($xml->createElement("year","1971"));
 $xml->save("books.xml");
 echo"XML File Created";
?>

