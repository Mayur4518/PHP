/*Write the HTML code for generating the form as shown below. Apply the internal CSS to 
following form to change the font size of the heading to 6pt and change the color to red and 
also change the background color to yellow.*/
<html>
 <head>
  <style>
     form{
               background-color:yellow;
border:2px solid black;
font-size:6pt;
color:red;
line-height:1.5;
text-align:left;
              }
        </style>
 </head>
   <body>
     <h1>Project Management</h1>
<form>
     Project Name:<input type="text" placeholder="project name"><br>
     Assigned to:<select>
                           <option value="@">Er Merry Petison</option>
                            <option value="@">NICK LAKSH PAT</option></select><br>
    Start Date:<input type="date"><br>
    End Date:<input type="date"><br>
  Priority:
<input type="radio">HIGH
<input type="radio">Average
<input type="radio">LOW<br>
Description<textarea></textarea><br>
<input type="submit" value="submit" style="background-color:green;">
<input type="submit" value="clear" style="background-color:blue;">

<form>
</body>
</html>
