<?php

// Initialize empty movies array
$movies = array();

// 1. Connect to my DB
$conn = mysqli_connect('localhost', 'root', '', 'movie_db');

// Did I connect successfully ? 
if ($conn) {
    $query = 'SELECT * FROM movies';

    // 2. Prepare the query
    if (isset($_POST['searchBox'])) {
        $mySearch = $_POST['searchBox'];
        $query = "SELECT * FROM movies WHERE title LIKE '%$mySearch%'";
    }

    // 3. Executing the query (send the query to the DB)
    $results = mysqli_query($conn, $query);

    // 4. Fetch the results in a associative array
    $movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Pb with connection !';
}

// Close the connection (you can close anywhere in the file)
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies page</title>
</head>

<body>
    <?php include_once 'nav.html'; ?>

    <h2>Movies list</h2>

    <h4>Search for a movie : </h4>
    <form action="" method="post">
        <input type="text" name="searchBox" placeholder="Start typing title">
        <input type="submit" name="searchBtn" value="Search">
    </form>

    <?php foreach ($movies as $movie) : ?>
        <hr>
        <img src="<?= $movie['poster']; ?>" alt="" width="100px">
        <p>
            <strong>Title :</strong>
            <!-- Same thing as echo -->
            <?= $movie['title']; ?>
        </p>


        <p>
            <strong>Date :</strong>
            <?php echo $movie['date_of_release']; ?>
        </p>

        <!-- Link to 'Movie detail' page, URL needs the id of the movie -->
        <a href="movie.php?id=<?= $movie['id']; ?>">Detail page</a>
    <?php endforeach; ?>
</body>

</html>