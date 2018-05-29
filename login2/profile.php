<?php
    session_start();
    $username = $_SESSION["user"];
?>
<html>
    <head>
        <title>Profile</title>
    </head>
    <body>
        <h2>Selamat Datang, <?php echo $username; ?> !<h2>
        <a href="logout.php">Logout</a>
    </body>
</html>