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

    <form action="" method="post">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="loginBtn" value="log-in"><br>
    </form>


    <?php

    if (isset($_POST['loginBtn'])) {

        $userPassword = strip_tags(trim($_POST['password']));
        $sanitizedMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        if (empty($sanitizedMail))
            echo 'Email is mandatory';
        else {

            $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');

            $query = "SELECT *
        FROM users
        WHERE mail = '" . $sanitizedMail . "'";

            $results = mysqli_query($conn, $query);

            if (mysqli_num_rows($results) > 0) {
                header('Location: account.php');
                $_SESSION['email'] = $sanitizedMail;
            } else
                echo 'User doesnt exist, please click register to creat an account !';
        }
    }

    ?>


</body>

</html>