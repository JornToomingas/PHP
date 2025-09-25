<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 09</h1>

<?php
    function tervita($n){
        $puhastatud = ucfirst(strtolower(trim($n)));
        return $puhastatud;
        }

        function email_loomine($e, $p){
        $tapikad = array("ä","ö","õ","ü");
        $asendused = array("a","o","o","y");
        $enimi = str_replace($tapikad, $asendused, mb_strtolower(trim($e)));
        $pnimi = str_replace($tapikad, $asendused, mb_strtolower(trim($p)));

        return $enimi.".".$pnimi."@hkhk.edu.ee";
        }

        echo tervita("  nImI  ");
        echo "<br>";
        email_loomine("üõöä","zöüõöäöädg");
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
