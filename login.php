<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <form method="POST" action="auth.php">
        
        <div>
            <label>username:</label>
            <input name="username" type="text" required="true">
        </div>

        <div>
            <label>password</label>
            <input name="password" type="password" required="true">
        </div>
        <div>
            <input type="submit">
        </div>
        <?php
            if (isset($_GET['error'])) {
                echo "<p>Username or Password is invalid.</p>";
            }
        ?>
    </form>
</body>
</html>