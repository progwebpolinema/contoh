<?php
    session_start();
    $error = '';

    if(isset($_POST["submit"])){
        if(!empty($_POST["username"]) || !empty($_POST["password"])) {
            # Get username and password from user
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            # Create a connection to mysql database
            # mysql_connect parameter
            # mysql_connect(db_url, db_username, db_password, db_name)
            $con = mysqli_connect("localhost", "root", "", "latlogin");

            # Check connection to database
            if(!$con) {
                die("Connection failed : " .mysqli_connect_error());
            }

            # Write MySql Query
            $query = "SELECT * FROM lat_user WHERE username='$username' AND password='$password'";
            # Get the query result
            $result = mysqli_query($con, $query);

            # If username exist in database, save to the session and redirect to profile.php
            if(mysqli_num_rows($result) == 1) {
                $_SESSION["user"] = $username;
                header("Location: profile.php");
            } else {
                $error = urlencode("Username atau password salah!");
                header("Location: index.php?pesan=$error");
            }

            # Close connection to database
            mysqli_close($con);

        } else {
            $error = urlencode("Username atau password kosong!");
            header("Location: index.php?pesan=$error");
        }
    }
?>