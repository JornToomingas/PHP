<?php
session_start();
include "lisa/header.php";

$_SESSION['cart'] ??= [];

if (isset($_GET['add'])) {
  $_SESSION['cart'][] = [
    'name' => $_GET['add'],
    'price' => $_GET['price']
  ];
}

if (isset($_GET['clear'])) {
  $_SESSION['cart'] = [];
}
?>

<h1>Ostukorv</h1>

<?php if (empty($_SESSION['cart'])): ?>
  <p>Ostukorv on tühi.</p>
<?php else: ?>
<table class="table">
<tr><th>Toode</th><th>Hind (€)</th></tr>

<?php
$total = 0;
foreach ($_SESSION['cart'] as $item):
$total += $item['price'];
?>
<tr>
  <td><?= htmlspecialchars($item['name']) ?></td>
  <td><?= $item['price'] ?></td>
</tr>
<?php endforeach; ?>

<tr>
  <th>Kokku</th>
  <th><?= $total ?> €</th>
</tr>
</table>

<a href="?clear=1" class="btn btn-danger">Tühjenda ostukorv</a>
<?php endif; ?>

<?php include "lisa/footer.php"; ?>