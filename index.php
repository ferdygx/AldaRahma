<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
<center>
    <h2>Login</h2>

    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p style='color:red;'>Username atau password salah!</p>";
    }
    ?>

    <form method="post" action="proses.php">
        User: <input type="text" name="user" required><br />
        Pass: <input type="password" name="pass" required><br />
        <input type="submit" value="Login">
    </form>
</center>
</body>
</html>
