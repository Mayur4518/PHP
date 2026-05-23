/*Remove div section elements after clicking 
on button using jQuery. [Hint : Use #id 
selector] */
<html>
<head> 
   <script src="jquery-4.0.0.min.js"></script>
  <script>
    $(document).ready(function()
    {
     $("#b1").click("function()
     {
       $("#d1").empty();
      }
    );
  }
 );
</script>
</head>
<body>
   <div d1="d1">Hello</div>
    <div>Welcome</div>
  <button type="submit" id="b1">
Remove
  </button>
 </body>
</html>