<html>
  <body>
    <?php
     $file="item.dat";
     $f=fopen($file,"r");
     ?>
   <center>
     <table border=2>
       <?php
            echo"<br><tr>
            <th>Item No</th>
            <th>Item name</th>
            <th>Unit sold</th>
             <th>Rate</th>
       <th>Total amt</th></tr><br>";
    while(!feof($f))
     {
      $a=explode(" ",fgets($f));
      $t=$a[2]*$a[3];
      echo"<tr>
               <td>$a[0]</td>
               <td>$a[1]</td>
               <td>$a[2]</td>
               <td>$a[3]</td>
                <td>$t</td></tr>";
     }
?>
  </table>
</center>
</body>
</html>