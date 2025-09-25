<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
	<h1>Harjutus 3</h1>
		<form method="get">
			a <input type="text" name="a"><br>
			b <input type="text" name="b"><br>
			h <input type="text" name="h"><br>
        <input type="submit" value="Saada">
		</form>

				<?php
					if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['h'])) {
						$a = $_GET['a'];
						$b = $_GET['b'];
						$h = $_GET['h'];
						$trapetsipindala = (($a + $b) * $h) /2;
						$rombiumbermoot = 4 * $a;
						echo "Rombiümbermõõt on: ",$rombiumbermoot,"<br>";
						echo "Trapetsipindala on: ",$trapetsipindala, "<br>";
					}
				?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
