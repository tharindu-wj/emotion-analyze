<?php
include "dataOperation.php";

$obj = new DataOperation;

function create_user_table(){
    $servername = "localhost";
    $username = "root";
    $password = "asdf1234";
    $dbname = "emotion_detection";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";


    $sql_table = "
    CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `captured_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    if (mysqli_query($conn, $sql_table)) {
        echo "Table Created";
    } else {
        echo "Error: " . $sql_table . "<br>" . mysqli_error($conn);
    }
}


if(isset($_POST['regUser']))
{
    //create_user_table();
    echo "uSer";

    $pssword = $_POST['psswrd'];
    echo $pssword;
    //Generate random salt
    $salt = bin2hex(mcrypt_create_iv(32,MCRYPT_DEV_URANDOM));
    $saltedPW = $pssword . $salt;
    $hashedPW = hash('sha512', $pssword);

    $myarray = array(
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $hashedPW,
        "salt" => $salt,
    );

    if($obj->insert_record(users,$myarray)){
       header("location:../login.php?msg=Lecturer Added Successfully");
    }

    else{
        header("location:../register.php?msg=Record Insert Failed");
    }
}

if(isset($_POST["edit"])){
    $password = mysqli_real_escape_string($con, $_POST['psswrd']);
    //Generate random salt
    $salt = bin2hex(mcrypt_create_iv(32,MCRYPT_DEV_URANDOM));
    $saltedPW = $password . $salt;
    $hashedPW = hash('sha512', $saltedPW);

    $id = $_POST['id'];
    $where = array("u_id"=>$id);
    $myarray = array(
        "username" => $_POST['uname'],
        "fullName" => $_POST['fname'],
        "email" => $_POST['email'],
        "contact" => $_POST['contact'],
        "password" => $hashedPW,
        "salt" => $salt,
        "status" => 0,
        "subjects" => $_POST['subject']
    );
    if($obj->update_record("user", $where, $myarray)){
        header("location:../lecturer.php?msg=Lecturer Updated Successfully");
    }

    else{
        //header("location:../lecturer.php?msg=Update Failed");
    }
}

if(isset($_GET["delete"])){
    $id = $_GET["id"];
    $where = array("u_id"=>$id);
    if($obj->delete_record(user,$where)){
        header("location:../lecturer.php?msg=Lecturer Deleted Successfully");
    }

    else{
        //header("location:../lecturer.php?msg=Delete Failed");
    }
}
?>