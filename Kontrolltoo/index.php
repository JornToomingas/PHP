<?php $pageTitle = 'Avaleht - Muusikapood'; $currentPage = 'index'; include 'header.php'; ?>

    <!-- Bänner (Carousel) -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php
            $images = glob('reklaam/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            shuffle($images); // Suvaline järjestus
            $active = true;
            foreach ($images as $image) {
                echo '<div class="carousel-item' . ($active ? ' active' : '') . '">';
                echo '<img src="' . htmlspecialchars($image) . '" class="d-block w-100" alt="Reklaam">';
                echo '</div>';
                $active = false;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Tooted -->
    <div class="container my-5">
        <h2>Tooted</h2>
        <div class="row">
            <?php
            $products = [];
            if (($handle = fopen('instruments.csv', 'r')) !== false) {
                fgetcsv($handle, 1000, ';'); // Skip header
                while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                    $products[] = ['name' => $data[0], 'price' => $data[1], 'category' => $data[2]];
                }
                fclose($handle);
            }
            foreach ($products as $index => $product) {
                $image = 'pildid/' . strtolower(str_replace(' ', '', $product['name'])) . '.jpg'; // Eeldab pildi nime
                echo '<div class="col-md-3 mb-4">';
                echo '<div class="card h-100">';
                echo '<img src="' . htmlspecialchars($image) . '" class="card-img-top" alt="' . htmlspecialchars($product['name']) . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . htmlspecialchars($product['name']) . '</h5>';
                echo '<p class="card-text">Hind: ' . htmlspecialchars($product['price']) . ' EUR<br>Kategooria: ' . htmlspecialchars($product['category']) . '</p>';
                echo '<form method="post" action="cart.php">';
                echo '<input type="hidden" name="add_to_cart" value="' . $index . '">';
                echo '<button type="submit" class="btn btn-primary">Lisa ostukorvi</button>';
                echo '</form>';
                echo '</div></div></div>';
            }
            ?>
        </div>
    </div>

<?php include 'footer.php'; ?>