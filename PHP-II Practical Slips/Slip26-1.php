/* Write Ajax program to print Order details by selecting a Customer’s 
name. Create table Customer and Order as follows with 1 : M cardinality 
CUSTOMER (cno, cname, city) and ORDER(ono, odate, shipping 
address)*/
<html>
<head>
<script>
function load(cname)
{
  var x=new XMLHttpRequest();
  x.open("GET","Slip26-2.php?cname="+cname,true);
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
 <select value="cname" id="cname" onchange="load(this.value)">
   <option value="mayur">mayur</option>
   <option value="nikhil">nikhil</option>
   <option value="sid">sid</option>
   <option value="siddhesh"</option>
</select>
<div id="res"></div>
</body>
</html>