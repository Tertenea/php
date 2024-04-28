<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php kms type sh</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .thumbnail {
            max-width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Harjutused</h1>
        <?php
        /*
        h14.php
        Peeter Kiviorg
        26.04.2024
        */
        $imagedir = 'img/';

        function suvaPilt($dir) {
            $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            $randomImage = $images[array_rand($images)];
            return $randomImage;
        }

        function pisipilt($dir, $columns = 3) {
            $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            $rowCount = ceil(count($images) / $columns);
            for ($i = 0; $i < $rowCount; $i++) {
                echo '<div class="row">';
                for ($j = 0; $j < $columns; $j++) {
                    $index = $i * $columns + $j;
                    if ($index < count($images)) {
                        echo '<div class="col">';
                        echo '<a href="' . $images[$index] . '" target="_blank">';
                        echo '<img src="' . $images[$index] . '" class="thumbnail" onclick="pisipiltSuureks(\'' . $images[$index] . '\');">';
                        echo '</a>';
                        echo '</div>';
                    }
                }
                echo '</div>';
            }
        }
        ?>
        
        <script>
            function pisipiltSuureks(imageSrc) {
                var largeImageWindow = window.open('', '_blank');
                largeImageWindow.document.write('<img src="' + imageSrc + '" style="max-width: 100%;">');
            }
        </script>

        <h2>Suvaline pilt:</h2>
        <img src="<?php echo suvaPilt($imagedir); ?>" style="max-width: 100%;">

        <h2>Pisipildid veergudes:</h2>
        <?php pisipilt($imagedir, 3); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
