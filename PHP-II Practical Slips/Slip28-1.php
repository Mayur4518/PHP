/* Write Ajax program to get book details from XML file when user 
select a book name. Create XML file for storing details of book(title, 
author, year, price). */
<html>
<head>
<script>
function load(bname)
{
  var x=new XMLHttpRequest();
  x.open("GET","Slip28-2.php?bname="+bname,true);
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
  <select name="bname" onchange="load(this.value)">
    <option value="JAVA">JAVA</option>
     <option value="C">Python</option>
   </select>
 <div id="res"></div>
 </body>
</html>