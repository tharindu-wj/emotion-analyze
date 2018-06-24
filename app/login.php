<?php
session_start();
require 'connection.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pssword = $_POST['psswrd'];

//echo $email;

    $query = "select * from users where email = '$email';";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $saltQuery = "select salt from users where email = '$email';";
        $result = mysqli_query($con, $saltQuery);
        $row = mysqli_fetch_assoc($result);
        $salt = $row['salt'];

        $saltedPW = $pssword . $salt;
        $hashedPW = hash('sha512', $pssword);


        $query = "select * from users where email = '$email' and password = '$hashedPW';";
        $result_set = mysqli_query($con, $query);
        //echo $hashedPW;
        if (mysqli_num_rows($result_set) > 0) {
            echo "user logged<br>";
            $row_login = mysqli_fetch_assoc($result_set);

            $_SESSION['user'] = $row_login['id'];
            header('location:../index.php');
            echo $_SESSION['user'];
        } else {
            //session_start();
            $_SESSION['msg'] = "Password incorrect";
            header('location:../login.php');
            echo $_SESSION['msg'];

        }

    } else {
        //session_start();
        $_SESSION['msg'] = "Username and Password incorrect";
        header('location:../login.php');
        echo $_SESSION['msg'];
    }
}
?>