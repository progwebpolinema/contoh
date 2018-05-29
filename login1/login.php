<?php
    session_start();
    $error = '';

    if(isset($_POST["submit"])){
        if(!empty($_POST["username"] || !empty($_POST["password"]))) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            # Manual check username dan password
            if($username == "afif" and $password == "polinema") {
                $_SESSION["user"] = $username;
                header("Location: profile.php");
            } else {
                $error = urlencode("Username atau password salah!");
                header("Location: index.php?pesan=$error");
            }
        } else {
            $error = urlencode("Username atau password kosong!");
            header("Location: index.php?pesan=$error");
        }
    }
?>