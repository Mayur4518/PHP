/* Write PHP script to read above created “book.xml” file into simpleXML object. 
Display attributes and elements.(Hint L simple_xml_load_file() function ) */
<?php
  $xml=simplexml_load_file("books.xml");
  foreach($xml->book as $b)
  {
    foreach($b->attributes() as $attr->$value)
    {
      echo"<br>Attribute($attr):".$value;
    }
    echo"<br>Book Name".$b->bookname;
    echo"<br>Auther Name".$b->authername;
    echo"<br>Price".$b->price;
    echo"<br>Year".$b->year;
  }
?>