// Write a javascript function to validate username and password for a membership form.  
<html>
  <head>
    <script>
     function validate()
     {
       var name=document.getElementById("t1").value;
       var pass=document.getElementById("t2").value;
       var name1=/^[A-Z]+[0-9]+$/";
       var pass1=/^[a-z]+[0-9]+$/";
       if(name.match(name1) && pass.match(pass1))
       {
        window.alert("Login Successfull");
       }
      else
       {
        window.alert("Invalid");
       }
     }
   </script>
 </head>
<body>
   Enter username:<input type="text" id="t1"><br>
   Enter Password:<input type="text" id="t2"><br>
   <input type="submit" value="submit" onclick="validate()">
   </body>
</html>