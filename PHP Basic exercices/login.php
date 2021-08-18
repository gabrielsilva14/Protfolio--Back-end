<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>

        <input type="submit" name="sub1" value="Connect">
    </form>

    <?php
        // Check if form was submitted
        if(isset($_POST['sub1'])) {
            // Check for @ symbol
            if(strpos($_POST['email'], '@')) {
                echo '<p style="color:green">Email valid</p>';
            } else {
                echo '<p style="color:red">Email not valid!</p>';
            }
        }
    ?>  

</body>

</html>