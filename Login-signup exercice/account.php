<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once 'menu.html'; ?>
    </br>


    <?php

    if (isset($_POST['logoutBtn']))
        session_destroy();


    if (isset($_SESSION['email'])) {
        echo 'Hello user, email : ' . $_SESSION['email'];
    } else {
        header('Location: login.php');
    }


    ?>

    <form action="" method="POST">
        <input type="submit" name="logoutBtn" value="log-out">
    </form>
</body>

</html>