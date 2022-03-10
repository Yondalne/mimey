<?php

    function makeURL() {
        $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        return $url;
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/baseImg/logo_ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>  
    <link rel="stylesheet" href="./assets/css/init.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <title>Mimey | Banque d'image 100% ivoirienne</title>
</head>
<body>
    <?php 
        include("./components/navbar.html")
    ?>
    <div class="searchContainer">
        <img class="searchBackground" src="./assets/baseImg/banner.jpg" alt="">
        <form action="">
            <input type="text" placeholder="Rechercher une image en tapant un mot clé">
            <input type="submit">
        </form>
    </div>

    <div class="imagesContainer">

    </div>

    <?php 

        include("./components/footer.html")

    ?>

    <script src="./assets/js/jquery.min.js"></script>
    <script>
        $(".mobileMenu").hide();
        function showHide () {
            $(".mobileMenuContainer").toggle();
            $(".mobileMenu").fadeToggle();
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>