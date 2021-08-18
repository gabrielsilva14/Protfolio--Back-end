<?php
// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// 2. Prepare the query
$query = 'SELECT * FROM movies ORDER BY date_of_release LIMIT 3';

// 3. Executing the query (send the query to the DB)
$results = mysqli_query($conn, $query);

// 4. Fetch the results in a associative array
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Website</title>
</head>

<body>
    <?php include_once 'nav.html'; ?>

    <h2>Welcome to my movie website</h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, voluptatem quaerat sint aperiam ut quibusdam, similique voluptas quisquam soluta error, magni facere nam deleniti reiciendis. Fuga minus harum ducimus beatae.</p>

    <hr width="10px">

    <h2>Three last movies</h2>

    <?php foreach ($movies as $movie) : ?>
        <hr>
        <p>
            <strong>Title :</strong>
            <!-- Same thing as echo -->
            <?= $movie['title']; ?>
        </p>


        <p>
            <strong>Date :</strong>
            <?php echo $movie['date_of_release']; ?>
        </p>
    <?php endforeach; ?>
</body>

</html>