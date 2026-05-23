/*Write AJAX program to read contact.dat file and print the contents of the 
file in a tabular format when the user clicks on print button. Contact.dat file 
should contain srno, name, residence number, mobile number, Address. 
[Enter at least 3 record in contact.dat file]*/
<html>
 <head>
   <script>
     function load()
     {
       var x=new XMLHttpRequest();
       x.open("GET","Slip23-2.php",true);
       x.send();
       x.onreadystatechange=function()
       {
         if(x.readyState==4 && x.status==200)
         {
           document.getElementById("res").innerHTML=x.responseText;
          }
        }
      }
 </script>
 </head>
<body>
   <div id="res"></div>
     <button onclick="load()">Print</button>
   </body>
</html>