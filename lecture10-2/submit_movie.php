<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $movie_id = $_POST['movie_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $genre = $_POST['genre'];
    $release_date = $_POST['release_date'];
    $director = $_POST['director'];

    // Process and store data as needed (e.g., save to database)
    echo "<h3>Movie Submitted</h3>";
    echo "ID: " . htmlspecialchars($movie_id) . "<br>";
    echo "Title: " . htmlspecialchars($title) . "<br>";
    echo "Description: " . htmlspecialchars($description) . "<br>";
    echo "Genre: " . htmlspecialchars($genre) . "<br>";
    echo "Release Date: " . htmlspecialchars($release_date) . "<br>";
    echo "Director: " . htmlspecialchars($director) . "<br>";
}
?>
