/*Add or append in paragraph text and also in the numbered(ordered) list in a 
given HTML document using jQuery selectors. 
i. [Hint : Use Append( ) method] */
<html>
<head>
<script src="jquery-4.0.0.min.js"></script>
<script>
   $(document).ready(function()
  {
    $("p").append('Hello");
    $("ol").append("<li>Pineapple</li>");
   }
 );
</script>
</head>
<body>
  <p>This is Paragraph </p>
  <ol type="1">
    <li>Mango</li>
  </ol>
</body>
</html>