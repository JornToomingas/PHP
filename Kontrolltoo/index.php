<?php
// Loeme reklaampildid kaustast
$images = glob("reklaam/*.{jpg,jpeg,png}", GLOB_BRACE);
shuffle($images);
?>

<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontrolltöö</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

<!-- NAVIGEERIMISMENÜÜ -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">🎵 InstrumentShop</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="index.php">Avaleht</a></li>
                <li class="nav-item"><a class="nav-link" href="tooted.php">Tooted</a></li>
                <li class="nav-item"><a class="nav-link" href="calculator.php">Kalkulaator</a></li>
                <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
                <li class="nav-item"><a class="nav-link" href="ostukorv.php">Ostukorv</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- BÄNNER / CAROUSEL -->
<div class="container mt-4">

    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php
            if (!empty($images)) {
                foreach ($images as $index => $img) {
                    $active = ($index === 0) ? 'active' : '';
                    echo "
                    <div class='carousel-item $active'>
                        <img src='$img' class='d-block w-100' style='max-height:400px; object-fit:cover;'>
                    </div>";
                }
            } else {
                echo "
                <div class='carousel-item active'>
                    <img src='https://via.placeholder.com/1200x400?text=Reklaamipildid+puuduvad'
                         class='d-block w-100'>
                </div>";
            }
            ?>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- SISU -->
    <div class="mt-5 text-center">
        <h1>Tere tulemast InstrumentShopi</h1>
        <p class="lead">
            Meilt leiad kvaliteetsed muusikainstrumendid igale tasemele.
        </p>
        <a href="products.php" class="btn btn-primary btn-lg">Vaata tooteid</a>
    </div>

</div>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    © <?= date("Y"); ?> InstrumentShop | PHP Projekt
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>