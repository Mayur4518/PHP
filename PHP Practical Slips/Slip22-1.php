/*Write a program to read one file and display the contents of the file with its size. */
<?php
    $file=fopen("a.txt","r");
     while(!feof($file))
     {
       $lines=fgets($file);
        echo $lines;
      }
   $f="a.txt";
  $size=filesize($f);
   echo $size;
?>