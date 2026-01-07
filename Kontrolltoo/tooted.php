<?php
include "lisa/header.php";

// loeme CSV
$rows = array_map(fn($r) => str_getcsv($r, ';'), file("data/instruments.csv"));
array_shift($rows); // eemalda päis
?>

<h1 class="mb-4">Meie tooted</h1>

<div class="row">
<?php foreach ($rows as $product): ?>
  <div class="col-md-3 mb-4">
    <div class="card h-100 shadow-sm">

      <img src="pildid/<?= htmlspecialchars($product[3]) ?>"
           class="card-img-top"
           style="height:180px;object-fit:cover;">

      <div class="card-body d-flex flex-column">
        <h5 class="card-title"><?= htmlspecialchars($product[0]) ?></h5>
        <p class="card-text">
          Kategooria: <?= htmlspecialchars($product[2]) ?><br>
          <strong><?= $product[1] ?> €</strong>
        </p>

        <a href="ostukorv.php?add=<?= urlencode($product[0]) ?>&price=<?= $product[1] ?>"
           class="btn btn-primary mt-auto">
           Lisa ostukorvi
        </a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

<?php include "lisa/footer.php"; ?>
