/*Write a javascript to display message ‘Exams are near, have you started 
preparing for?’ using alert, prompt and confirm boxes. Accept proper input 
from user and display messages accordingly. */
<html>
 <head>
   <script>
     var n=confirm("Exams are near,have you started preparing for?");
     if(n==true)
     {
       var name=window.prompt("Enter Name");
       if(name!=null)
       {
        window.alert("Best of Luck"+name);
       }
     }
    else
    {
      window.alert("Prepare for exams");
    }
 </script>
</head>
</html>