<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- The form  -->
    <form action="" method="POST">
        <input type="number" name="myNumber">
        <input type="submit" name="sub2" value="Multiply">
    </form>

    <?php
         if (isset($_POST['sub2'])) {
            $x = $_POST['myNumber'];
    ?>

    <h3>Multiplication table of <?php echo $x; ?></h3>
    <table border=1>
        <thead>
            <tr>
                <th>*0</th>
                <th>*1</th>
                <th>*2</th>
                <th>*3</th>
                <th>*4</th>
                <th>*5</th>
                <th>*6</th>
                <th>*7</th>
                <th>*8</th>
                <th>*9</th>
                <th>*10</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php
                    for ($i = 0; $i <= 10; $i++) {
                        echo '<td>' . $i * $x . '</td>';
                    }
                ?>
            </tr>
        </tbody>
    </table>

    <?php
         }
    ?>
</body>

</html>