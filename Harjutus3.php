<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

<h1>Harjutus 12</h1>

    <form action=""> 
            start: <input type="time" name="start" id=""><br>
            start: <input type="time" name="finish" id=""><br>
            <input type="submit" value="Leia aeg">
    </form>
    <?php
        $s = strtotime($_GET["start"]);
        $f = strtotime($_GET["finish"]);

        $diff = abs($s - $f)/3600*60;
        echo intdiv($diff,60).":".$diff % 60;
    ?>





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

<h1>Harjutus 09</h1>

<?php
$KP= "17.09.2025";
    echo date('d.m.Y G:i', time()+60);
?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>