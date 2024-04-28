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
    <?php
    /*
    h6.php
    Peeter Kiviorg
    26.04.2024
    */
    $arv = 1;
    while($arv <= 100){
        echo "$arv. ";
        if ($arv % 10 == 0) {
            echo "<br>";
        }
        $arv++;
    }
    $i = 1;
    for($i = 0; $i < 10; $i++){
        echo "*";
    }
    $i = 1;
    for($i = 0; $i < 10; $i++){
        echo "* <br>";
    }
    $i = 0;
    for($i = 0; $i < 26; $i++){
        echo " *  ";
        if ($i % 5 == 0) {
            echo "<br>";
    }
    }
    $i = 10;
    while($i >= 1){
        echo "$i. ";
        $i--;
    }
    echo "<br>";
    $i = 1;
    for(; $i <= 100; $i++){
        if ($i % 3 == 0) {
            echo "$i. ";
        }
    }
    echo "<br>";

    $tudrukud = array("Mia", "Sofia", "Emily", "Hanna", "Eva");
    $poisid = array("Mark", "Oliver", "Hugo", "Artur", "Kent");

    foreach ($poisid as $index => $poiss) {
        if (isset($tudrukud[$index])) {
            echo $poiss . " ja " . $tudrukud[$index] . "<br>";
        }
    }
    ?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
