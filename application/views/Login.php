<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"
    action="<?php echo base_url('auth/login');?>">
    <label for="username">Username:</label>
    <input type="text" name="username" REQUIRED>

    <label for="password">Password:</label>
    <input type="password" name="password" REQUIRED>

    <button type="submit">Login</button>
    </form>
</body>
</html>