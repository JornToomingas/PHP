<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <h1>Harjutus 2</h1>
        <?php
				$kaks = 2;
				$uks = 1;
				$j = $uks / $kaks;
				$k = $uks * $kaks;
				$li = $uks + $kaks;
				$la = $uks - $kaks;

				$korrutus = sprintf('Korrutus: %d', $k);
				$liitmine = sprintf('Liitmine: %d', $li);
				$lahutamine = sprintf('Lahutamine: %d', $la);
				$jagamine = sprintf('Jagamine: %0.3f', $j);
				echo $liitmine, "<br>";
				echo $lahutamine, "<br>";
				echo $korrutus, "<br>";
				echo $jagamine, "<br><br>";

				$mm = 3000;

				$cm = $mm / 10;
				$m = $cm / 100;

				echo "Millimeetrid: ", $mm, "<br>";
				echo "Sentimeetrid: ", $cm, "<br>";
				echo "Meetrid: ", $m, "<br><br>";
					
				$a = 10;
				$b = 5;
				$c = sqrt($a**2 + $b**2);
				$umbermoot = $a + $b + $c;
				$pindala = ($a * $a) / 2;
				echo sprintf("Kolmnurga ümbermõõt on: %0.2f", $umbermoot), "<br>";
				echo sprintf("Kolmnurga pindala on: %0.2f", $pindala), "<br>";
		?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
