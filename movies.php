<?php
include_once 'header.php';
include_once 'database_call.php';
$movies = "SELECT * FROM movies";
$result = $db->query($movies);
?>
<h2>Movies</h2>
    <div class="container">
        <div class="row">
            <?php
        foreach ($result as $movie) { ?>
            <div class="col-sm">
        <div class="card" style="width: 18rem;">
        <img src="uploads/<?php echo $movie['image_url']; ?>"  class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $movie['title'] ?></h5>
                <p class="card-text">Release Date:<?= $movie['release_year'] ?></p>
                <p class="card-text">Rating:<?= $movie['rating'] ?> </p>
                <p class="card-text">Genre:<?= $movie['genre'] ?></p>
            </div>
        </div>
            </div>
            <?php
       } ?>
        </div>
    </div>
<?php
    include_once 'footer.php'
?>