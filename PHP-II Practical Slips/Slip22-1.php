<html>
  <head>
   <script>
     function load(aname)
     {
       var x=new XMLHttpRequest();
       x.open("GET","Slip22-2.php?aname="+aname,true);
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
   <select name="aname" id="aname" onchange="load(this.value)">
      <option value="Yash">Yash</option>
      <option value="SRK">SRK</option>
       <option value="Singh">Ranveer</option>
   </select>
  <div id="res"></div>
 </body>
</html>