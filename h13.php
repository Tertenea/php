
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
        <h2>Üleslaadimine</h2>
        <p>Palun ära lae üles suuremaid faile kui 2MB.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            Vali pildifail (JPG või JPEG):
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Lae üles" name="submit">
        </form>
        
        <h2>Üleslaaditud pildid</h2>
        <div class="row">
            <?php
            /*
            h12.php
            Peeter Kiviorg
            26.04.2024
            */
            $target_dir = "uploads/";
            $allowed_types = array('jpg', 'jpeg');
            
            function uploadImage($target_dir, $allowed_types) {
                $uploadOk = 1;
                $message = "";
            
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check === false) {
                        $message .= "Fail ei ole pilt. ";
                        $uploadOk = 0;
                    }
                }
            
                if(!in_array($imageFileType, $allowed_types)) {
                    $message .= "Vabandust, ainult JPG ja JPEG failid on lubatud. ";
                    $uploadOk = 0;
                }
            
                if ($uploadOk == 0) {
                    $message .= "Vabandust, faili üleslaadimine ebaõnnestus. ";
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $message .= "Fail ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " on üles laetud. ";
                    } else {
                        $message .= "Vabandust, üleslaadimisel tekkis tõrge. ";
                    }
                }
            
                return $message;
            }
            
            if(isset($_POST["submit"])) {
                $uploadMessage = uploadImage($target_dir, $allowed_types);
                echo $uploadMessage;
            }
            
            $files = scandir($target_dir);
            foreach ($files as $file) {
                $file_info = pathinfo($file);
                if (in_array(strtolower($file_info['extension']), $allowed_types)) {
                    echo '<div class="col-md-3"><a href="' . $target_dir . $file . '" target="_blank"><img src="' . $target_dir . $file . '" class="img-fluid"></a></div>';
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
