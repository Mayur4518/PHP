/* Write Ajax program to fetch suggestions when is user is typing in a 
textbox. (eg like google suggestions. Hint create array of suggestions and 
matching string will be displayed) */
  <html>
<head>
<script>
  function load(str)
  {
    var x=new XMLHttpRequest();
    x.open("GET","Slip27-2.php?str="+str,true);
    x.send();
    x.onreadystatechange=function();
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
  <input type="text" onkeyup="load(this.value)">
  <div id="res"></div>
 </body>
</html>