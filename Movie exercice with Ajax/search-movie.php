<?php


$movies = array();


$conn = mysqli_connect('localhost', 'root', '', 'movie_db');
$mySearch = $_POST['searchBox'];
$query = "SELECT * FROM movies WHERE title LIKE '%$mySearch%'";
$results = mysqli_query($conn, $query);
$movies = mysqli_fetch_all($results, MYSQLI_ASSOC);
mysqli_close($conn);

// DISPLAY ALL MOVIES :
foreach ($movies as $movie) {
    echo 'Title : ' . $movie['title'] . '<br>';
    echo 'Release date : ' . $movie['date_of_release'] . '<br>';
    echo '<img src="' . $movie['poster'] . '" width="100px">';
    echo '<hr>';
}
