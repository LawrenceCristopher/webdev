<?php
session_start();

$mysqli = new mysqli("localhost", "root", "", "userdb") or die(mysqli_error($mysqli));

if (isset($_POST['sendit'])) {
    $name = $_POST["name"];
    $email_address = $_POST["email_address"];
    $messagedata = $_POST["messagedata"];

    $mysqli->query("INSERT INTO user (name, email_address, messagedata)
    VALUES ('$name', '$email_address', '$messagedata')") or die(mysqli_error($mysqli));

    $_SESSION["message"] = "Message sent";
    $_SESSION["msg_type"] = "success";

    header("location: index.php");

    
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query ("DELETE FROM user WHERE id=$id") or die($mysqli->error);

    $_SESSION["message"] = "Record Deleted";
    $_SESSION["msg_type"] = "danger";

    header("location: adminpage.php");

}


?>
