<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <h3>Harjutus 4</h3>
        <form method="get">
            a <input type="number" name="a"><br>
            b <input type="number" name="b"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
            if (isset($_GET['a']) && isset($_GET['b'])) {
                $a = $_GET['a'];
                $b = $_GET['b'];
                $jagamine = $a / $b;
                echo "Arvude jagatis on: ", $jagamine, "<br>";
            }
        ?>
        <p></p>
        <h3>Vanus</h3>
        <form method="get">
            1. Vanus <input type="number" name="vanus1"><br>
            2. Vanus <input type="number" name="vanus2"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
            if (isset($_GET['vanus1']) && isset($_GET['vanus2'])) {
                $vanus1 = $_GET['vanus1'];
                $vanus2 = $_GET['vanus2'];
                if ($vanus1 < $vanus2) {
                    echo "2. vanus on vanem kui 1. vanus.";
                }
                else if ($vanus2 < $vanus1) {
                    echo "1. vanus on vanem kui 2. vanus.";
                }
                else {
                    echo "Ühe vanused";
                }
            }
        ?>
        <p></p>
        <h3>Ruudu validaator</h3>
        <form method="get">
            1. Külg <input type="number" name="kulg1"><br>
            2. Külg <input type="number" name="kulg2"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
            if (isset($_GET['kulg1']) && isset($_GET['kulg2'])) {
                $kulg1 = $_GET['kulg1'];
                $kulg2 = $_GET['kulg2'];
                if ($kulg1 == $kulg2) {
                    echo "Kujund on ruut.";
                }
                else {
                    echo "Kujund on ristkülik.";
                }
            }
        ?>
        <p></p>
        <h3>Ruudu validaator - Graafiline</h3>
        <form method="get">
            1. Külg <input type="number" name="kulg1"><br>
            2. Külg <input type="number" name="kulg2"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
            if (isset($_GET['kulg1']) && isset($_GET['kulg2'])) {
                $kulg1 = $_GET['kulg1'];
                $kulg2 = $_GET['kulg2'];
                if ($kulg1 == $kulg2) {
                    $ruut = "img/ruut.png";
                    echo "<br>";
                    echo "<img src=$ruut alt=img width=200 height=200>";
                }
                else {
                    $ristkulik = "img/Ristkulik.png";
                    echo "<br>";
                    echo "<img src=$ristkulik alt=img width=400 height=200>";
                }
            }
        ?>
        <p></p>
        <h3>Juubeli kalkulaator</h3>
        <form method="get">
            Sünnipäev <input type="number" name="sunnipaev"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
            if (isset($_GET['sunnipaev'])) {
                $sunnipaev = $_GET['sunnipaev'];
                $aasta = 2025;
                $vanus = $sunnipaev - $aasta;
                $jaak = $vanus % 5;
                if ($jaak == 0) {
                    echo "Sul on juubli aasta.";
                }
                else {
                    echo "Sul ei ole juubel veel.";
                }
            }
        ?>
        <p></p>
        <h3>Punktide hinnete kontroll</h3>
        <form method="get">
            Punktide arv: <input type="number" name="punktid"><br>
            <input type="submit" value="Saada">
        </form>
        <?php
            if (isset($_GET['punktid'] )&& !empty($_GET['punktid'])) {
                $punktid = $_GET['punktid'];
                if ($punktid >= 10) {
                    echo "SUPER!!";
                }
                else if ($punktid >= 5 && $punktid <= 9){
                    echo "TEHTUD!!";
                }
                else if ($punktid < 5 && $punktid >= 0) {
                    echo "HALB!!";
                }
                else {
                    echo "SISESTA OMA PUNKTID!!!";
                }
            }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
