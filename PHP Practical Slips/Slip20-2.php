/*Write a program to read a flat file “student.dat”, calculate the percentage and display the data 
from file in tabular format.(Student.dat file contains rollno, name, OS, WT, DS, Python, Java, 
CN )            */
<html>
  <body>
    <?php
      $f="student.dat";
      $f1=fopen($f,"r");
      ?>
   <center>
    <table border=2>  
       <?php
           echo"<tr>
                          <td>Rno</td>
                          <td>Name</td>
                          <td>OS</td>
                          <td>WT</td>
                          <td>DS</td>
                          <td>Python</td>
                          <td>Java</td>
                          <td>CN</td>
                          <td>Total</td>
                          <td>Per</td>
                        </tr>";
          while(!feof($f1))
          {
            $a=explode(" ",fgets($f1));
            $t=$a[2]+$a[3]+$a[4]+$a[5]+$a[6]+$a[7];
            $p=$t/6;
            echo"<tr>
                             <td>$a[0]</td>
                             <td>$a[1]</td>
                             <td>$a[2]</td>
                             <td>$a[3]</td>
                             <td>$a[4]</td>
                             <td>$a[5]</td>
                             <td>$a[6]</td>
                             <td>$a[7]</td>
                             <td>$t</td>
                             <td>$p</td>
                         </tr>";
          }
   ?>
  </table>
 </center>
</body>
</html>