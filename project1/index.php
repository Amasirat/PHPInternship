<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/index.css">
    <link rel="stylesheet" href="assets/styles/layout.css">
    <title>Login</title>
</head>
<body>
    <span class="header">Please login to your account!</span>
    <form action="process_login.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <div class="error_prompt"><?php 
        if ($_GET["error"] == "empty_fields") {
            echo "Username and password were empty! Please enter the correct username and password";
        }
        ?></div>
        <input type="submit" value="Login">
    </form>
</body>
</html>