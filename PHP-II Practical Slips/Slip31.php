/* Write a Java Script Program to validate user name and password on onSubmit 
event. */
<html> 
<head> 
<script> 
function load() 
{ 
    var u = document.getElementById("t1").value; 
    var p = document.getElementById("t2").value; 
 
    if(u=="" && p=="") 
    { 
        alert("Enter username & password, it cannot be empty"); 
    } 
    else 
    { 
        if(u=="username" && p=="pass") 
        { 
            alert("Login successfully"); 
        } 
        else 
        { 
            alert("Invalid login"); 
        } 
    } 
} 
</script> 
</head> 
<body> 
Enter username: <input type="text" id="t1"><br> 
Enter password: <input type="text" id="t2"><br> 
<input type="submit" value="submit" onclick="load()"> 
</body> 
</html>