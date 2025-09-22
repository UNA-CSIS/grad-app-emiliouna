<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->

<?php
    session_start(); // Start the session
  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_SESSION['name'];
       $OOP = $_SESSION['OOP'];
       $SAD = $_SESSION['SAD'];
       $AP = $_SESSION['AP'];
       $IN = $_SESSION['IN'];
       $ICS = $_SESSION['ICS'];
       $essay = $_SESSION['essay'];
        echo "Name: " . $name . "<br>";
        
        echo "Object-oriented programming: " . $OOP . "<br>";
        echo "Systems analysis & design: " . $SAD . "<br>";
        echo "Advanced programming: " . $AP . "<br>";
        echo "Introduction to Networking: " . $IN . "<br>";
        echo "Introduction to Computer Security: " . $ICS . "<br>";
       
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
    }
    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    </body>
</html>
