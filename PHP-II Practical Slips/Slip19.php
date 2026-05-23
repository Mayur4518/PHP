// To insert text before and after an image using jQuery. [Hint : Use before( ) and after( )] 
<html>
 <head>
  <script src="jquery-4.0.0.min"></script>
  <script>
  $(document).ready(function
  {
    $("img").before("Rohit");
    $("img").after("Sharma");
  }
);
</script>
</head>
<body>
  <img src="rohit.jpg" width="100">
</body>
</html>