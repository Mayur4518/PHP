<?php
   $f=fopen("contact.dat","r");
   echo"<table>";
   echo"<tr><th>Rno</th>
                   <th>Name</th>
                   <th>Residence no</th>
                    <th>Mno</th>
                    <th>Address</th></tr>";
   while($row=fscanf($f,"%s %s %s %s %s"))
   {
      echo"<tr>";
      foreach($row as $r)
      {
        echo"<td>$r</td>";
       }
      echo"</tr>";
    }
 echo"</table>";
 fclose($f);
?>