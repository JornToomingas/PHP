<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus13</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <?php
            $kataloog = 'pildid';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_FILES['minu_fail']['name'])) {
                $sinu_faili_nimi = $_FILES['minu_fail']['name'];
                $ajutine_fail = $_FILES['minu_fail']['tmp_name'];
                $faili_tyyp = $_FILES['minu_fail']['type'];

                if ($faili_tyyp === 'image/jpeg' || $faili_tyyp === 'image/jpg') {
                    move_uploaded_file($ajutine_fail, $kataloog . '/' . $sinu_faili_nimi);
                    echo '<div class="alert alert-success">Fail üles laetud!</div>';
                } else {
                    echo '<div class="alert alert-danger">Ainult JPG ja JPEG failid on lubatud!</div>';
                }
            }
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputGroupFile01" class="form-label">Vali pilt:</label>
                <input type="file" name="minu_fail" class="form-control" id="inputGroupFile01" required>
            </div>
            <input type="submit" class="btn btn-primary" value="Lae üles!">
        </form>

        <hr>

        <h2>Üleslaetud pildid:</h2>

        <?php
            if (is_dir($kataloog)) {
                $asukoht = opendir($kataloog);
                while (($fail = readdir($asukoht)) !== false) {
                    if ($fail !== '.' && $fail !== '..') {
                        echo '<a href="' . htmlspecialchars($kataloog . '/' . $fail) . '" target="_blank">';
                        echo '<img src="' . htmlspecialchars($kataloog . '/' . $fail) . '" style="height:400px; margin:5px;" alt="Uploaded Image">';
                        echo '</a>';
                    }
                }
                closedir($asukoht);
            }
        ?>

    <h1>Harjutus 14</h1>

<?php
$directory = 'pildid/';

$images = glob($directory . '*.{jpg,jpeg}', GLOB_BRACE);

if (count($images) > 0) {
    $randomImage = $images[array_rand($images)];
    
    // Parandatud img element
    echo '<img src="' . $randomImage . '" alt="Random Image" width="200" height="200">';
} else {
    echo 'ei ole pilti siin.';
}
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
