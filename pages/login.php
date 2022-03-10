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
    <link rel="stylesheet" href="./assets/css/login.css">
    <title>Mimey | Login</title>
</head>
<body>
    <div class="container">
        
        <form action="" method="">

        </form>

        <div class="copyright"> <span>Developpé par <a href="https://github.com/Yondalne" target="_blank">Yondalne</a> | Copyright © <?= date("Y") ?> Tous Droits reservés</span> </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
</body>
</html>