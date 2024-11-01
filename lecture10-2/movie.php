<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: auto;
        }
        label, input, textarea, button {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }
        button {
            width: auto;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Enter Movie Details</h2>
    <form action="submit_movie.php" method="POST">
        <label for="movie_id">Movie ID:</label>
        <input type="text" id="movie_id" name="movie_id" required>
        
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>
        
        <label for="genre">Genre:</label>
        <input type="text" id="genre" name="genre">
        
        <label for="release_date">Release Date:</label>
        <input type="date" id="release_date" name="release_date">
        
        <label for="director">Director:</label>
        <input type="text" id="director" name="director">
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
