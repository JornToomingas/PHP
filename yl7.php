<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <h1>Harjutus 07</h1>
    <?php
//Tervitus
      function tervita() {
        echo ("päiksekesekene");
      }
//Uudiskiri
      function uudiskiri() {
        echo '<div class="row">
          <div class="col-sm-2">
            <form action="">
              <input type="text" placeholder="Liitu uudiskirjaga!">
              <input type="submit" value="Liitu!" class="btn btn-success">
              </form>
            </div>
          </div>';
      }

//Kasutajanimi ja email
      function createUser($u) {
        $lu =strtolower($u); 
        echo $lu."@hkhk.edu.ee";
          echo "<br>";
        $p = substr(password_hash($lu, PASSWORD_BCRYPT),7,7);
        echo $p;
      }
//Arvud
      function vahemikus($a1, $a2, $s) {
        for ($i=$a1; $i <= $a2; $i=$i+$s) {
          echo $i;
        }
      }
//Ristküliku pindala
      function rectangles($a1, $a2) {
        return $a1 * $a2;
      }
//Isikukood
      function ik($ik) {
        $pikkus = strlen($ik);
        if ($pikkus==11) {
          // $vastus="Õige pikkusega";
        if (intval($ik[0])%2==0) {
          $vastus = "Naine";
        } else{
          $vastus = "Mees";
        }
      } else {
        $vastus="IK vale pikkusega";
      }
      return $vastus;
    }

//Head mõtted
      function headmotted() {
        $alused = array("Jüri", "Mari", "Uku");
        $oeldised = array("armastab", "viskab", "tõmbab");
        $sihitised = array("mind", "sind", "teda");

          echo $alused[array_rand($alused)]." ".$oeldised[array_rand($oeldised)]." ".$sihitised[array_rand($sihitised)];
      }
      headmotted();

      echo "<br>";

      tervita();
      uudiskiri();
      createUser("Mario");
      echo "<br>";
      vahemikus(2,20,3);
      echo "<br>";
      echo ik("48011064711");
      echo "<br>";
    ?>
    <h2>Ristküliku Pindala</h2>
    <form>
      Külg 1<input type="number" name="kylg1" value="10">
      Külg 2<input type="number" name="kylg2" value="10">
      <input type="submit" value="Arvuta Pindala">
    </form>

    <?php
      echo "Pindala ".rectangles($_GET['kylg1'],$_GET['kylg2']);
      echo "<br>";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
