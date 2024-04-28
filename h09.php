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
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="nimi">Sisesta oma nimi:</label><br>
        <input type="text" id="nimi" name="nimi"><br><br>
        <label for="sonum">Sisesta oma sõnum:</label><br>
        <textarea id="sonum" name="sonum" rows="4" cols="50"></textarea><br><br>
        <input type="submit" value="Saada">
    </form>
<?php
    /*
    h9.php
    Peeter Kiviorg
    26.04.2024
    */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = ucfirst(strtolower($_POST['nimi']));
    echo "Tere, $nimi!<br>";

    $sonum = $_POST['sonum'];
    $tukeldatud_sonum = str_split($sonum);
    $uus_sonum = implode(".", $tukeldatud_sonum);
    echo strtoupper($uus_sonum) . "<br>";

    $ropud_sonad = array("noob", "loll", "idioot");
    $puhas_sonum = str_ireplace($ropud_sonad, "****", $sonum);
    echo "$puhas_sonum<br>";

    $eesnimi = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $_POST['nimi']));
    $perenimi = strtolower(str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), $_POST['perenimi']));
    $email = $eesnimi . "." . $perenimi . "@hkhk.edu.ee";
    echo "Sinu email on: $email";
}
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

