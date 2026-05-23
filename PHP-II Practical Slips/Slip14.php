/*Write a PHP script to read “Movie.xml” file and print all MovieTitle and 
ActorName of file using DOMDocument Parser. “Movie.xml” file should contain 
following information with at least 5 records with values. 
i. MovieInfo,MovieNo, MovieTitle, ActorName , ReleaseYear */
<?php
  $dom=new DomDocument();
  $dom->load("movie.xml");
  $title=$dom->getElementsByTagName("mtitle");
  $auther=$dom->getElementsByTagName("aname");
  foreach($title as $t)
  {
    echo"<br>Movie Title:".$t->textContent;
  }
 foreach($auther as $a)
 {
  echo"<br>Actor Name:".$a->textContent;
 }
?>