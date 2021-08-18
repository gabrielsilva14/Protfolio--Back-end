<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    // Only if I clicked
    if(isset($_POST['sbmBtn'])) {
        // Get the timestamps of now
        $now = strtotime('now');
        echo 'Now : ' . $now . '<br>';
        
        // Get the timestamps based on the selected date
        $myDate = $_POST['datepicker'];
        $timestamp = strtotime($myDate);

        // Difference
        echo $now - $timestamp;
    }

?>

<form action="" method="post">
    <input type="date" name="datepicker"><br>
    <input type="submit" name="sbmBtn" value="Send">
</form>

</body>
</html>