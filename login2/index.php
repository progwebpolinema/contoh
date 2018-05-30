<?php
    include('login.php'); // Includes Login Script
    
    # If user still in session, redirect to profile.php instead of login again
    if(isset($_SESSION['user'])){
        header("location: profile.php");
    }
    
    if(isset($_GET['pesan'])) {
        $mess = "<p> {$_GET['pesan']}</p>";
    } else {
        $mess = "";
    }
?>
<html>
    <head>
        <title>Simple Login 2 - Using MySQL Database</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <?php echo $mess; ?>
            Username : <input type="text" name="username" placeholder="Username Anda"><br/>
            Password : <input type="password" name="password" placeholder="Password Anda"><br/>
            <input type="submit" name="submit">
        </form>
    </body>
</html>