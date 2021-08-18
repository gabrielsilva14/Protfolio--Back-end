<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h2>Register form</h2>

    <?php
    //var_dump($_POST);

    // 1. Only when the form is being submitted
    if (isset($_POST['signinBtn'])) {
        // 2. Add validations
        if (empty($_POST['firstName']))
            echo 'First name is mandatory<br>';

        if (empty($_POST['lastName']))
            echo 'Last name is mandatory<br>';

        if (strlen($_POST['email']) < 8 || strlen($_POST['email']) > 50)
            echo 'Mail should be between 8 and 50 characters long<br>';

        if (strlen($_POST['password']) <= 8)
            echo 'Password should be 8 char<br>';
        else if ($_POST['password'] != $_POST['confirmPassword'])
            echo 'Password are not identical !<br>';

        // Make sure we checked the checkbox
        if (isset($_POST['newsletter']))
            echo 'You clicked the checkbox';

        // Display summary of what user typed in
        echo 'First name : ' . $_POST['firstName'] . '<br>';
        echo 'Last name : ' . $_POST['lastName'] . '<br>';
        echo 'Email : ' . $_POST['email'] . '<br>';
    }
    ?>

    <form action="" method="post">
        <input type="text" name="firstName" placeholder="First Name"><br>
        <input type="text" name="lastName" placeholder="Last Name"><br>
        <input type="email" name="email" placeholder="Email address"><br>
        <input type="password" name="password" placeholder="Password (>8 characters)"><br>
        <input type="password" name="confirmPassword" placeholder="Confirm your password"><br>
        <input type="checkbox" name="newsletter" id="news">
        <label for="news">Subscribe to the newsletter</label><br>

        <input type="submit" name="signinBtn" value="Sign-in">
    </form>
</body>

</html>