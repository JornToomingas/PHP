<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 9</h1>
    <?php
//Tervitus 
    $kasutajanimi = "JÖrN MarKUs";
    $tervitusnimi = ucwords(strtolower($kasutajanimi));
    echo "Tere, $tervitusnimi!" . "<br>";
    ?>
    <?php
//Nimi
    $tekst = "stalker";
    $muudetudTekst = "";
    for ($i = 0; $i < strlen($tekst); $i++) {
        $muudetudTekst .= strtoupper($tekst[$i]) . "."; 
    }
    $muudetudTekst = rtrim($muudetudTekst, ".");


    echo $muudetudTekst;
    ?>
        <form method="post">
        <label for="sõnum">Sisesta oma sõnum:</label><br>
        <textarea id="sõnum" name="sõnum" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Saada">
    </form>
    <?php
//Ropud sonad
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sonum = $_POST['sõnum'];
        $ropudsonad = ["kaka", "pede", "idioot","lohh"];
        $asendatudsonum = $sonum;
        foreach ($ropudsonad as $sona) {
            $asendatudsonum = preg_replace('/\b' . preg_quote($sona, '/') . '\b/i', str_repeat('*', strlen($sona)), $asendatudsonum);
        }
        echo "<h3>Asendatud sõnum:</h3>";
        echo "<p>$asendatudsonum</p>";
    }
    ?>

    <?php
//Email
    function tervita($n) {
        $puhastatud = ucfirst(strtolower(trim($n)));
        return $puhastatud;
    }

    function email_loomine($e, $p) {
        $tapikad = array("ä","ö","õ","ü");
        $asendused = array("a","o","o","y");

        $enimi = str_replace($tapikad, $asendused, mb_strtolower(trim($e)));
        $pnimi = str_replace($tapikad, $asendused, mb_strtolower(trim($p)));

        return $enimi . "" . $pnimi . "@hkhk.edu.ee";
    }

    echo "Tervitus: " . tervita("  nImI  ") . "<br>";
    echo "E-mail: " . email_loomine("Jüri", "Äärmäe");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
