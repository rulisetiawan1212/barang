<?php

require 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];


//pengecekan kelengkapan data
if (empty($username) || empty($password)) {
    header("location: register.php");
} else {
    mysqli_query($mysqli, "INSERT INTO admin(username, password) VALUES ('$username', '$password')");
    header("location: index.php");
}
