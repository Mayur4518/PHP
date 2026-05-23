/*Write a PHP script to generate an XML file in the following format using SimpleXML  
functions. 
<?xml version="1.0" encoding="UTF-8"?> 
<BookInfo> 
<book> 
<bookno>1</bookno> 
<bookname>JAVA</bookname> 
<authorname> Balguru Swami</authorname> 
<price>250</price> 
<year>2006</year> 
</book> 
<book> 
<bookno>2</bookno> 
<bookname>C</bookname> 
<authorname> Denis Ritchie</authorname> 
<price>500</price> 
<year>1971</year> 
</book> 
</BookInfo> */

<?php
   $xml=new simpleXMLElement("<bookinfo/>");
   $book=$xml->addChild("book");
   $book->addChild("bookno",1);
   $book->addChild("bookname","JAVA");
   $book->addChild("authername","Balguru Swami");
   $book->addChild("price",250);
   $book->addChild("year",2006);
   
   $book1=$xml->addChild("book");
   $book1->addChild("bookno",2);
   $book1->addChild("bookname","C");
   $book1->addChild("authername","Denis Ritchie");
   $book1->addChild("price",500);
   $book1->addChild("year",1971);
   $xml->asXML("Slip12.xml");
   echo"success";
 ?> 