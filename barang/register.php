<?php

require 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <H2> Register </H2>
        <form action="process_register.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="Masukkan Username" name="username" autocomplete="off" required>
            </div>
            <br>
            <div class="form-group">
                <input type="text" placeholder="Masukkan Password" name="password" autocomplete="off" required>
            </div>
            <br>
            <input type="submit" value="Register" name="Register">
            <br>
            <br>

        </form>
    </div>