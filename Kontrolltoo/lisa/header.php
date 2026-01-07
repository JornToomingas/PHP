<?php session_start(); ?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Muusikapood'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigeerimismenüü -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Muusikapood</a> <!-- Logo tekstina -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage ?? '') === 'index' ? 'active' : ''; ?>" href="index.php">Avaleht</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage ?? '') === 'products' ? 'active' : ''; ?>" href="products.php">Tooted/Teenused</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage ?? '') === 'calculator' ? 'active' : ''; ?>" href="calculator.php">Kalkulaator</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage ?? '') === 'contact' ? 'active' : ''; ?>" href="contact.php">Kontakt</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo ($currentPage ?? '') === 'cart' ? 'active' : ''; ?>" href="cart.php">Ostukorv (<?php echo count($_SESSION['cart'] ?? []); ?>)</a></li>
                </ul>
            </div>
        </div>
    </nav>