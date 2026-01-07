<?php $pageTitle = 'Ostukorv - Muusikapood'; $currentPage = 'cart'; include 'header.php'; ?>

    <div class="container my-5">
        <h2>Ostukorv</h2>
        <?php
        if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
            echo '<p>Ostukorv on tühi.</p>';
        } else {
            $products = [];
            if (($handle = fopen('instruments.csv', 'r')) !== false) {
                fgetcsv($handle, 1000, ';');
                while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                    $products[] = ['name' => $data[0], 'price' => $data[1], 'category' => $data[2]];
                }
                fclose($handle);
            }
            $total = 0;
            echo '<ul class="list-group">';
            foreach ($_SESSION['cart'] as $index) {
                if (isset($products[$index])) {
                    $product = $products[$index];
                    echo '<li class="list-group-item">' . htmlspecialchars($product['name']) . ' - ' . htmlspecialchars($product['price']) . ' EUR</li>';
                    $total += floatval($product['price']);
                }
            }
            echo '</ul>';
            echo '<p class="mt-3"><strong>Kokku: ' . number_format($total, 2) . ' EUR</strong></p>';
            echo '<a href="index.php" class="btn btn-secondary">Jätka ostlemist</a>';
        }
        if (isset($_POST['add_to_cart'])) {
            $index = intval($_POST['add_to_cart']);
            if (!isset($_SESSION['cart'])) $_SESSION['cart'] = [];
            $_SESSION['cart'][] = $index;
            header('Location: cart.php');
            exit;
        }
        ?>
    </div>

<?php include 'footer.php'; ?>