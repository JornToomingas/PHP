<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iseseisev</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Iseseisev</h1>
    <br>
    <h3>Tekst</h3>
    <?php
        echo 'Juhan Liiv, "Ääremärkused"';
    ?>

    <h3>Teisendamine</h3>

    <form method="post">
        <label>Tollid: <input name="inches" requiered></label>
        <button type="submit">Teisenda</button>
    </form>

    <?php
    if  ($_SERVER['REQUEST_METHOD'] ==='POST') {
        $inches = str_replace(',', ',', trim($_POST['inches']));
        if (is_numeric($inches)) {
            $cm = floatval($inches) * 2.54;
            echo "<p>$inches tolli = $cm cm</p>";
        } else {
            echo "<p>Vigane sisend</p>";
        }
    }
    ?>

    <h3>Loend</h3>
    <?php
    $nr = 10;
    while ($nr >= 1) {
        echo $nr . "<br>";
        $nr--;
    }
    ?>

    <h3>Morsekood</h3>

    <form method="post">
    <label>Sisesta tekst: <input type="text" name="text" required></label>
    <button type="submit">Teisenda</button>
  </form>

    <?php
$morse = [
    'A' => '.-', 'B' => '-...', 'C' => '-.-.', 'D' => '-..',
    'E' => '.', 'F' => '..-.', 'G' => '--.', 'H' => '....',
    'I' => '..', 'J' => '.---', 'K' => '-.-', 'L' => '.-..',
    'M' => '--', 'N' => '-.', 'O' => '---', 'P' => '.--.',
    'Q' => '--.-', 'R' => '.-.', 'S' => '...', 'T' => '-',
    'U' => '..-', 'V' => '...-', 'W' => '.--', 'X' => '-..-',
    'Y' => '-.--', 'Z' => '--..',
    '0' => '-----', '1' => '.----', '2' => '..---', '3' => '...--',
    '4' => '....-', '5' => '.....', '6' => '-....', '7' => '--...',
    '8' => '---..', '9' => '----.'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = strtoupper($_POST['text']);
    $result = "";
    for ($i = 0; $i < strlen($text); $i++) {
        $char = $text[$i];
        if ($char === " ") {
            $result .= " / ";
        } elseif (isset($morse[$char])) {
            $result .= $morse[$char] . " ";
        }
    }
    echo "<p><strong>Morse:</strong> $result</p>";
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>