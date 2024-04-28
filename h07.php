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
    function tervita(){
        return "Tsau issi!"; 
        }
        
        function uudiskiri() {
            echo '
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="sisesta email">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Liitu</button>
            </form>
            ';
        }
        function kasutajaEmail($kasutnim) {
            $kasutnim = strtolower($kasutnim);
        
            $email = $kasutnim . "@hkhk.edu.ee";
        
            $tahed = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $parool = '';
            for ($i = 0; $i < 7; $i++) {
                $parool .= $tahed[rand(0, strlen($tahed) - 1)];
            }
        
            return [
                'user' => $kasutnim,
                'email' => $email,
                'pass' => $parool
            ];
        }
        function Arvud($algus, $lopp, $samm = 1) {
            for ($i = $algus; $i <= $lopp; $i += $samm) {
                echo $i . " ";
            }
        }
        function ristkpind($length, $width) {
            return $length * $width;
        }
        function isikukood($isikukood) {
            if (strlen($isikukood) != 11) {
                return "Vigane isikukood";
            }
        
            $sugu = $isikukood[0] % 2 == 0 ? "Naine" : "Mees";
        
            $aasta = $isikukood[1] . $isikukood[2];
            $kuu = $isikukood[3] . $isikukood[4];
            $paev = $isikukood[5] . $isikukood[6];
            $sunnip = "19$aasta-$kuu-$paev";
        
            return [
                'sugu' => $sugu,
                'sunnip' => $sunnip
            ];
        }
        function halvadMotted() {
            $alus = ["Kass", "Koer", "Juku"];
            $oeldis = ["sööb", "jookseb", "hüppab"];
            $sihitis = ["hiirt", "pargis", "üle aia"];
        
            $valitudAlus = $alus[array_rand($alus)];
            $valitudOeldis = $oeldis[array_rand($oeldis)];
            $valitudSihitis = $sihitis[array_rand($sihitis)];
        
            return "$valitudAlus $valitudOeldis $valitudSihitis.";
        }
        echo tervita();

        uudiskiri();

        $kasutaja = kasutajaEmail('issimario');
        print_r($kasutaja);
        echo "<br>";
        Arvud(2, 8); 
        echo "<br>";
        Arvud(2, 8, 3); 
        echo "<br>";
        $ristkpind = ristkpind(5, 3);
        echo "Ristküliku pindala on " . $ristkpind;
        echo "<br>";
        $isikuk = isikukood('47605030299');
        print_r($isikuk);
        echo "<br>";
        echo halvadMotted();
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
