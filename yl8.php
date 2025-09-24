<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
$kataloog = 'pildid';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_FILES['minu_fail']['name'])) {
        $sinu_faili_nimi = $_FILES['minu_fail']['name'];
        $ajutine_fail = $_FILES['minu_fail']['tmp_name'];
        $faili_tyyp = strtolower(pathinfo($sinu_faili_nimi, PATHINFO_EXTENSION));

        if ($faili_tyyp == 'jpg' || $faili_tyyp == 'jpeg') {
            $faili_koht = $kataloog . '/' . $sinu_faili_nimi;

            if (!file_exists($faili_koht) && move_uploaded_file($ajutine_fail, $faili_koht)) {
                echo 'Said tehtud :P<br>';
            } else {
             echo 'ebaonnestus<br>';
            }
        } else {
            echo 'Pole lubatud failitüüp!<br>';
        }
    }
}

if ($asukoht = opendir($kataloog)) {
    while ($rida = readdir($asukoht)) {
        if ($rida != '.' && $rida != '..') {
            echo '<a href= "' . $kataloog . '/' . $rida . '" target="_blank">' . $rida . '</a><br>';
            echo '<a href="' . $kataloog . '/' . $rida . '" target="_blank"><img src="' . $kataloog . '/' . $rida . '" width="100" height="100" style="margin:5px"></a>';
        }
    }
    closedir($asukoht);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="minu_fail"><br>
    <input type="submit" value="Lae üles!">



    <h2>Suvaka pildi kuvamine</h2>

<?php
$directory = 'pildid/';


$images = glob($directory . '*.{jpg,jpeg}', GLOB_BRACE);

if (count($images) > 0) {
    
    $randomImage = $images[array_rand($images)];
    
    echo '<img src="' . $randomImage . '" alt="Random Image" /width="200" height="200">';
} else {
    echo 'Pilti pole!';
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>