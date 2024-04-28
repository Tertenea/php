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
        <h1>h02</h1>
        <?php
        /*
            h02
            Peeter Kiviorg
            29/1/2024
        */
        $x = 72;
        $y = 7;

        $liit = $x + $y;
        echo "liitmine: $x + $y = $liit <br>";

        $lahk = $x - $y;
        echo "lahutus: $x - $y = $lahk <br>";

        $kord = $x * $y;
        echo "korrutis: $x * $y = $kord <br>";

        $jaga = $x / $y;
        echo "jagatis: $x / $y = $jaga <br>";

        $jaak = $x % $y;
        echo "jaak: $x % $y = $jaak <br>";

        echo "<br>";

        $mm = 13523;
        $cm = $mm / 10;
        $m = $mm / 1000;
        $mm2cm = sprintf("%d mm on %0.2f cm <br>", $mm, $cm);
        $mm2m = sprintf("%d mm on %0.2f m <br>", $mm, $m);

        echo $mm2cm;
        echo $mm2m;

        echo "<br>";

        $a = 30;
        $b = 40;
        $c = 50;

        $pindala = $a * $b / 2;
        $ymbermoot = $a + $b + $c;
        $kolmnurk = sprintf("kolmnurga pindala on %d ühikut ja ümbermõõt on %d ühikut", $pindala, $ymbermoot);
        echo $kolmnurk;
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>