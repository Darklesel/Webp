
<?php
include_once 'header.php';
include_once 'database_call.php';

$movies = "SELECT * FROM movies ORDER BY id DESC LIMIT 3";
$result = $db->query($movies);

?>

    <h2>Featured Movies</h2>

    <div class="movie-list">
        <?php
        foreach ($result as $movie) {
        ?>
        <div class="movie-card">
            <img src="uploads/<?php echo $movie['image_url']; ?> " alt="Movie Poster" width="150" height="215">
            <h3><?= $movie['title'] ?></h3>
            <p>Release Date: <?= $movie['release_year'] ?></p>
            <p>Rating: <?= $movie['rating'] ?> </p>
            <p>Genre: <?= $movie['genre'] ?> </p>
        </div>
        <?php
        }
        ?>
    </div>

<?php
    include_once 'footer.php'
?>