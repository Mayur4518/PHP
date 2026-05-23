/* Write a Java Script Program to show Hello Good Morning message onload event using alert box and 
display the Student registration */
<html>
 <head>
   <script>
     function greet()
     {
       window.alert("Hello Good Morning");
      var name=document.getElementById("t1").value;
       var rno=document.getElementById("t2").value;
       var add=document.getElementById("t3").value;
       document.getElementById("res").innerHTML="Name:"+name+"<br>Roll No:"+rno+"<br>Address:"+add;
      }
   </script>
  </head>
 <body onload="greet()">
   Student name:<input type="text" id="t1"><br> 
  Student rno:<input type="text" id="t2"><br> 
  Address:<input type="text" id="t3"><br>
  <div id="res"></div>
  <input type="submit" value="submit" onclick="greet()">
</body>
</html>