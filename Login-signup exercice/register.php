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
        <input type="text" name="firstName" placeholder="First Name"><br>
        <input type="text" name="lastName" placeholder="Last Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="registerBtn" value="Register"><br>
    </form>


    <?php

    if (isset($_POST['registerBtn'])) {

        $errors = false;

        $userFirstName = strip_tags(trim($_POST['firstName']));
        $userLastName = strip_tags(trim($_POST['lastName']));
        $userPassword = strip_tags(trim($_POST['password']));
        $sanitizedMail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

        if (empty($userFirstName)) {
            echo 'User first name is mandatory<br>';
            $errors = true;
        }

        if (empty($userLastName)) {
            echo 'User last name is mandatory<br>';
            $errors = true;
        }

        if (empty($sanitizedMail)) {
            echo 'Email is mandatory<br>';
            $errors = true;
        }

        if (empty($userPassword)) {
            echo 'Password is mandatory<br>';
            $errors = true;
        }


        if (!filter_var($sanitizedMail, FILTER_VALIDATE_EMAIL)) {
            echo 'Email is not valid<br>';
            $errors = true;
        }


        $conn = mysqli_connect('localhost', 'root', '', 'spotify_db');
        $query = "INSERT INTO users(first_name, last_name, mail, password)
            VALUES('$userFirstName','$userLastName', '$sanitizedMail', '$userPassword')";

        $result = mysqli_query($conn, $query);

        if ($result)
            echo 'Account created';
        else
            echo 'Problem creating account';
    }

    ?>


</body>

</html>