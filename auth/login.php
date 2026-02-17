<?php
session_start();
var_dump($_SESSION);
if (isset($_SESSION['monyet'])) {
    header('Location: ../index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container" style="width: 100%; height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
        <header>
            <h1>Login</h1>
        </header>
        <main style="width: 40%; padding-inline: 10%; ">
            <form action="proses_login.php" method="POST" style="display: flex; flex-direction: column; row-gap: 10px;">
                <input type="text" name="username" id="username" placeholder="Username">
                <input type="password" name="password" id="password" placeholder="Password">
                <button type="submit">Login</button>
            </form>
        </main>
    </div>
</body>

</html>