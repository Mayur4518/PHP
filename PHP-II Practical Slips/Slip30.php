//Write a Java Script Program to print Fibonacci numbers on onclick event
<html>
 <head>
  <script>
   function validate()
   {
     var n=document.getElementById("no").value;
     var a=0,b=1,i,c;
     for(i=1;i<=n;i++)
     {
      document.write(a+" ");
      c=a+b;
      a=b;
      b=c;
      }
    }
  </script>
  </head>
   <body>
   Enter num:<input type="text" id="no"><br> 
    <input type="submit" value="submit" onclick="validate()"> 
 </body> 
</html>