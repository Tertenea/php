<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php kms type sh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">

    <h1>Harjutused</h1>
    <?php
    /*
    h7.php
    Peeter Kiviorg
    26.04.2024
    */
    function vanusekalk($sunnia) {
        $praegunea = date("Y");
        return $praegunea - $sunnia;
    }
    function Kooliaalopp($aasta) {
        $tana = date_create(date("Y-m-d"));
        $koolilopp = date_create(($aasta) . "-06-22");
    
        if ($tana > $koolilopp) {
            $koolilopp = date_create((date("Y") + 1) . "-06-22");
        }
    
        $interval = date_diff($tana, $koolilopp);
        return $interval->format('%a');
    }
    function aastaajapilt($kuu) {
        if ($kuu >= 3 && $kuu <= 5) {
            echo '<img src="/php/img/kevad.jpg" alt="Kevad" class="img-fluid">';
        } elseif ($kuu >= 6 && $kuu <= 8) {
            echo '<img src="/php/img/suvi.jpg" alt="Suvi" class="img-fluid"> ';
        } elseif ($kuu >= 9 && $kuu <= 11) {
            echo '<img src="/php/img/sügis.jpg" alt="Sugis" class="img-fluid">';
        } else {
            echo '<img src="/php/img/talv.jpg" alt="Talv" class="img-fluid">';
        }
    }
    
    date_default_timezone_set('Europe/Tallinn');
    echo date("d.m.Y H:i");
    echo "<br>";
    ?>
    <body>
    <form action="h08.php" method="get">
                <h3>Vanus</h3>
                Sünniaasta <input type="text" name="aa" required pattern="-?\d*\.?\d+"><br>
                <input type="submit" value="Arvuta">
            </form>
    </body>
    <?php
    if (isset($_GET['aa']) && $_GET['aa'] !== '') {
    $aa = $_GET['aa'];
    $vanus = vanusekalk($aa);
    echo "Oled $vanus aasta vanune";
    }
    echo "<br>";
    $paevad = Kooliaalopp(2024);
    echo "Kooli lõpuni on $paevad päeva";
    echo "<br>";
    $crntMonth = date('n');
    $ssn = '';
    switch ($crntMonth) {
        case 3:
        case 4:
        case 5:
            $ssn = 'kevad';
            break;
        case 6:
        case 7:
        case 8:
            $ssn = 'suvi';
            break;
        case 9:
        case 10:
        case 11:
            $ssn = 'sügis';
            break;
        case 12:
        case 1:
        case 2:
            $ssn = 'talv';
            break;
        default:
            $ssn = 'Error';
    }

    switch ($ssn) {
        case 'kevad':
            echo '<img src="img/kevad.jpg" alt="Kevad">';
            break;
        case 'suvi':
            echo '<img src="img/suvi.jpg" alt="Suvi">';
            break;
        case 'sügis':
            echo '<img src="img/sugis.jpg" alt="Sügis">';
            break;
        case 'talv':
            echo '<img src="img/talv.jpg" alt="Talv">';
            break;
        default:
            echo 'Aastaega ei saa määrata';
    }
    ?>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
