<?php
$username = $_POST["username"];
$password = $_POST["password"];

if (isset($username) && isset($password)) {
    if ($username == "admin" && $password == "test123"){
        session_start();
        echo "Welcome ".$username;
    }else{
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
?>