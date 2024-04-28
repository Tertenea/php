<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>h03</h1>
        <?php
        /*
            h03
            Peeter Kiviorg
            1/2/2024
        */
        $toode1 = $_GET['t1'];
        $toode2 = $_GET['t2'];
        $toode3 = $_GET['t3'];

        if ($toode1 != ''|| $toode2 != ''|| $toode3 != '') {
            $traps = sprintf("Trapetsi pindala on: %0.01f", (($toode1+$toode2)/2)*$toode3);
            echo $traps;
        }
        else {
          echo '';
        }

        $romb1 = $_GET['r1'];

        if ($romb1!= '') {
          $romp = sprintf("Rombi ümbermõõt on: %0.01f", $romb1*4);
          echo $romp;
        }
        else {
          echo '';
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>