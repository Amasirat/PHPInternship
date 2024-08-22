<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["username"] == "" || $_POST["password"] == "") {
        header("Location: index.php?error=empty_fields");
    } 
    else {
        $username = $_POST["username"];
        header("Location: welcome.php?username=$username");
    } 
}