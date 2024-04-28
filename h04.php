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
        <h1>h04</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <h4>Jagamine</h4>
                <form action="h04.php" method="get">
                    1. num <input type="text" name="t1" required pattern="-?\d*\.?\d+"><br>
                    2. num <input type="text" name="t2" required pattern="-?\d*\.?\d+"><br>
                    <input type="submit" value="jaga">
                </form>
                <?php
                $toode1 = $_GET['t1'];
                $toode2 = $_GET['t2'];


                if ($toode1 != ''|| $toode2 != '') {
                    $jagt = sprintf("Jagatis on: %0.01f", $toode1/$toode2);
                    echo $jagt;
                }
            
                ?>
            </div>
            <div class="col">
                <h4>Vansued</h4>
                <form action="h04.php" method="get">
                    vanus 1 <input type="text" name="v1" required pattern="-?\d*\.?\d+"><br>
                    vanus 2 <input type="text" name="v2" required pattern="-?\d*\.?\d+"><br>
                    <input type="submit" value="võrdle">
                </form>
                <?php
                $toode1 = $_GET['v1'];
                $toode2 = $_GET['v2'];

                if ($toode1 == ''|| $toode2 == '') {
                    echo '';
                } elseif ($toode1 > $toode2) {
                    $jagt = sprintf("Vanus 1 on suurem: %d", $toode1);
                    echo $jagt;
                } elseif ($toode1 < $toode2) {
                    $jagt = sprintf("Vanus 2 on suurem: %d", $toode2);
                    echo $jagt;
                } elseif ($toode1 == $toode2) {
                    $jagt = sprintf("Vanused on võrdsed: %d", $toode1);
                    echo $jagt;
                }
                ?>
            </div>
            <div class="col">
                <h4>ruut or rist</h4>
                <form action="h04.php" method="get">
                    1. kylg <input type="text" name="k1" required pattern="-?\d*\.?\d+"><br>
                    2. kylg <input type="text" name="k2" required pattern="-?\d*\.?\d+"><br>
                    <input type="submit" value="kotnrolli">
                </form>
                <?php
                $toode1 = $_GET['k1'];
                $toode2 = $_GET['k2'];


                if ($toode1 == '' || $toode2 == '') {
                    echo '';
                } elseif ($toode1 != $toode2) {
                   echo 'ristkülik';
                } elseif ($toode1 == $toode2) {
                    echo 'ruut';
                }
            
                ?>
            </div>
            <div class="col">
                <h4>juubel?</h4>
                <form action="h04.php" method="get">
                    synniaasta <input type="text" name="s1" required pattern="-?\d*\.?\d+"><br>
                    <input type="submit" value="kontorlli">
                </form>
                <?php
                $toode1 = $_GET['s1'];

                $vanus = date("Y") - $toode1;

                if ($vanus == '') {
                    echo '';
                } elseif ($vanus % 5 == 0) {
                    echo 'juubel';
                } else {
                    echo 'ei ole juubel';
                }
            
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>