/* Create TEACHER table as follows TEACHER(tno, tname, 
qualification, salary). Write Ajax program to select a teachers name 
and print the selected teachers details. */
<html>
<head>
<script>
function load(tname)
{
  var x=new XMLHttpRequest();
  x.open("GET","Slip25-2.php?tname="+tname,true);
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
  <select value="tname" id="tname" onchange="load(this.value)">
     <option value="Shambhavi">Shambhavi</option>
     <option value="Mahesh">Mahesh</option>
     <option value="Rohit">Rohit</option>
  </select>
<div id="res"></div>
</body>
</html>