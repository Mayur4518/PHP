/* Write a Javascript program to accept name of student, change font color to red, font 
size to 18 if student name is present otherwise on clicking on empty text box display 
image which changes its size (Use onblur, onload, onmouseover, onmouseclick, 
onmouseup)*/
<html>
 <head>
  <script>
    function checkname()
    {
      var n=document.getElementById("name").value;
      if(n!="")
      {
       document.getElementById("name").style.color="red";
       document.getElementById("name").style.fontsize="18px";
       }
   }
  function showimg()
{
   var n=document.getElementById("name").value;
   if(n=="")
   {
     document.getElementById("img").style.display="block";
    }
}
function big()
{
  document.getElementById("img").width=200;
 }
function small()
 {
   document.getElementById("img").width=100;
}
</script>
</head>
<body onload="alert('Page loaded')">
Enter name:<input type="text" id="name" onblur="checkname()" onclick="showimg()"><br>
<img id="img" src="rohit.jpg" style="display:none" onmouseover="big()" onmouseup="small()">
</body>
</html>
  
    