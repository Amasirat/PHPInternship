<?php
if($_SERVER["REQUEST_METHOD"] == "GET") {
    $username = $_GET["username"];
} else {
    header("Location: index.php?error=wrong_request_method");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/layout.css">
    <title>Welcome</title>
</head>
<body style="text-align: center;">
    <h1 style="margin-top: 2vw;">Welcome, <?= $username ?>!</h1>
</body>
</html>