<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 06</h1>
    <?php
     //Massiivid ja tsüklid

    $tudrukud = ['mari', 'kati', 'marion', 'kerli', 'maria'];
    $poisid   = ['gabriel','mario','üllar','joonas','henrik']; 

    for ($i = 0; $i < count($tudrukud); $i++) {
        echo "<div style='margin-bottom:4px;'>";
        echo "<span style='display:inline-block; width:100px;'>{$tudrukud[$i]}</span>";
        echo "<span style='display:inline-block; width:100px;'>{$poisid[$i]}</span>";
        echo "</div>";
    }

echo "<br>";

    //Massiivid ja tsüklid (Bonus)
    shuffle($tudrukud);
    shuffle($poisid);

    for ($i = 0; $i < count($tudrukud); $i++) {
        echo "<div style='margin-bottom:4px;'>";
        echo "<span style='display:inline-block; width:100px;'>{$tudrukud[$i]}</span>";
        echo "<span style='display:inline-block; width:100px;'>{$poisid[$i]}</span>";
        echo "</div>";
    }
echo "<br>";
    //Kolmega jaguvad
      for ($i=1; $i <= 100 ; $i++) {
        if ($i%3==0) {
          echo $i. "<br>";
        }
      }
echo "<br>";
    //Kahanev
      for ($i = 10; $i >= 1; $i--) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    }
echo "<br>";
    //10x10 tärnid (ruut)
      for ($i=1; $i <= 100; $i++) {
          echo"*";
          if ($i%10==0) {
              echo "<br>";
          }
      }
echo "<br>";
    //koosta tärnidest horisontaalne rida
      $tarnideArv = 10;

      for ($i = 0; $i < $tarnideArv; $i++) {
          echo "*";
      }
echo "<br>";
    //koosta tärnidest vertikaalne rida
      for($rida=1; $rida<=10; $rida++){ 
        echo '*<br>';
      }
echo "<br>";
    //loo arvud 1-100
    //loo pärast iga 10 arvu reavahetus
    //lisa iga arvu järele punkt (N: 1. 2. 3. jne…)
        for ($i=1; $i <=100; $i++) {
            echo $i.".";
            if ($i%10==0) {
                echo "<br>";
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
