/*Write a PHP script having 3 textboxes. The first textbox should be for accepting name of the 
student, second for accepting name of college and third for accepting a proper greeting message. 
Write a function for accepting all the three parameters and generating a proper greeting 
message. If any of the parameters are not passed, generate the proper greeting message.(Use the 
concept of missing parameters)*/
<html>
<body>
 <form method="POST">
Enter student name:
<input type="text" name="sn">
Enter college name:
<input type="text" name="cn">
Enter Greeting Message:
<input type="text" name="msg">
<input type="submit" value="submit">
</form>
</body>
</html>
<?php
 $sn=$_POST['sn'];
$cn=$_POST['cn'];
$msg=$_POST['msg'];
function display($sn,$cn,$msg)
{
 if($sn==null or $cn==null or $msg==null)
 {
   echo"Welcome..!";
}
else
   {
     echo($msg." ".$sn." to ".$cn);
   }
}
display($sn,$cn,$msg);
?>
                         