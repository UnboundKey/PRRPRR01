<!---
Created by Benjamin Nordin
--->
<!DOCTYPE html>
<!--Sätter språket på svenska -->
<html lang="en">
    <head>
        <!--Making the website compatable with swedish letter-->
        <meta charset="utf-8">
        <title>Webcode - StartCode</title>
        <!--importing the stylesheet -->
        <link href="css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <form method="post" action="output.php" method="POST">
            <p>First Name</p>
            <input type="text" name="firstName" required="true">

            <p>Last Name</p>
            
            <input type="text" name="lastName">
            <br> 
            
            <input type="radio" name="gender"> Male
            <br>
            
            <input type="radio" name="gender"> Female
            <br>
            
            Birthday?: <input type="date" name="birth" required="true"> 
            <br>

            <input type="checkbox" name="" required="true">

            <input type="submit" name="send">
            <br>

        </form>
    </body>
</html>
