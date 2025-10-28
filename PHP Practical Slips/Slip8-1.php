 /*Using regular expressions check for the validity of entered email-id.                          
1. The @ symbol should not appear more than once. 
2. The dot (.) can appear at the most once before @ and at the most twice or at least once 
after @ symbol. 
3. The substring before @ should not begin with a digit or underscore or dot or @ or any 
other special character. (Use explode and preg_match function.) */
     <html>
     <body>
       <form method="POST">
         Enter Email-id:
       <input type="text" name="t1"><br>
     <input type="submit" value="Check"><br>
   </form>
 </body>
</html>
  <?php
      $s=$_POST['t1'];
         if(preg_match("^[a-z0-9]+@[a-z]+\.com^",$s))
             echo"Email is Valid";
        else
              echo"Email is invalid";
?>
        