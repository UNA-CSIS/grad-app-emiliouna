<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    session_start(); // Start the session
 
      
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $_SESSION['OOP'] = $_POST['OOP'];  
        $_SESSION['SAD'] = $_POST['SAD'];  
        $_SESSION['AP'] = $_POST['AP'];  
        $_SESSION['IN'] = $_POST['IN'];  
        $_SESSION['ICS'] = $_POST['ICS'];  
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <form action="Confimationpage.php" method="POST">
<textarea id="essay" name="essay" rows="4" cols="50">
</textarea>
            <input type="submit" value="Submit">
    </body>
</html>
