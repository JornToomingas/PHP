<?php $pageTitle = 'Kalkulaator - Muusikapood'; $currentPage = 'calculator'; include 'header.php'; ?>

    <div class="container my-5">
        <h2>Hinna Kalkulaator</h2>
        <form method="post">
            <div class="mb-3">
                <label for="price" class="form-label">Hind (EUR)</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Kogus</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="warranty" name="warranty">
                <label class="form-check-label" for="warranty">Pikendatud garantii (+10%)</label>
            </div>
            <button type="submit" class="btn btn-primary">Arvuta</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $price = floatval($_POST['price']);
            $quantity = intval($_POST['quantity']);
            $total = $price * $quantity;
            if (isset($_POST['warranty'])) {
                $total *= 1.1;
            }
            echo '<p class="mt-3">Kokkuhind: ' . number_format($total, 2) . ' EUR</p>';
            file_put_contents('orders.txt', date('Y-m-d H:i:s') . " - Hind: $price, Kogus: $quantity, Garantii: " . (isset($_POST['warranty']) ? 'Jah' : 'Ei') . ", Kokku: $total\n", FILE_APPEND);
        }
        ?>
    </div>

<?php include 'footer.php'; ?>