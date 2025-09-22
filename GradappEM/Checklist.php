<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
    session_start(); // Start the session
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['name'] = $_POST['name'];       
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Welcome <?php echo $_POST["name"]; ?><br>
        <form action="Essay.php" method="POST">
            <input type="checkbox" id="OOP" name="OOP" value="taken">
            <label for="OOP"> Object-oriented programming</label><br>
            <input type="checkbox" id="SAD" name="SAD" value="taken">
            <label for="SAD"> Systems analysis & design</label><br>
            <input type="checkbox" id="AP" name="AP" value="taken">
            <label for="AP"> Advanced programming</label><br><br>
            <input type="checkbox" id="IN" name="IN" value="taken">
            <label for="IN"> Introduction to Networking</label><br><br>
            <input type="checkbox" id="ICS" name="ICS" value="taken">
            <label for="ICS"> Introduction to Computer Security</label><br><br>
           
            
            <input type="submit" value="Submit">
         </form>
    </body>
</html>
