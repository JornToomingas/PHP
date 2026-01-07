<?php
include "lisa/header.php";

$result = "";
if ($_POST) {
  $price = (float)$_POST['price'];
  $qty = (int)$_POST['qty'];
  $total = $price * $qty;

  if (isset($_POST['warranty'])) {
    $total *= 1.1;
  }

  file_put_contents("data/orders.txt",
    date("Y-m-d H:i").";$price;$qty;$total\n", FILE_APPEND);

  $result = "Kokku: <strong>$total €</strong>";
}
?>

<h1>Hinnakalkulaator</h1>

<form method="post" class="col-md-6">
  <input type="number" step="0.01" name="price" class="form-control mb-2" placeholder="Hind (€)" required>
  <input type="number" name="qty" class="form-control mb-2" placeholder="Kogus" required>

  <div class="form-check mb-2">
    <input type="checkbox" class="form-check-input" name="warranty">
    <label class="form-check-label">Pikendatud garantii (+10%)</label>
  </div>

  <button class="btn btn-success">Arvuta</button>
</form>

<p class="mt-3"><?= $result ?></p>

<?php include "lisa/footer.php"; ?>
