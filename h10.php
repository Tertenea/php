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

    <menu>
        <a href="h10.php">Avaleht</a> |
        <a href="h10.php?leht=portfoolio">Portfoolio</a> |
        <a href="h10.php?leht=kaart">Kaart</a> |
        <a href="h10.php?leht=kontakt">Kontakt</a> |
        <a href="h10.php?leht=minust">Minust</a>
    </menu>
    <p>pee pee poo poo</p>
    <?php
    /*
    h10.php
    Peeter Kiviorg
    26.04.2024
    */
    if(!empty($_GET['leht'])){
        $leht = htmlspecialchars($_GET['leht']);
        $lubatud = array('portfoolio','kaart','kontakt','minust');
        $kontroll = in_array($leht, $lubatud);
        if($kontroll==true){
            include($leht.'.php');
        } else {
            echo "<br>";
            echo 'leht ei eksisteeri';
        }
    }
    ?>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
