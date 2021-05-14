<?php
include './config.php';
$socialarray = json_decode($socialicon_object, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="<?=$webicon == null ? "https://cdn.discordapp.com/attachments/795066298295910420/808509247485902888/2.png" : $webicon?>" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title><?=$weblabel?></title>
    <meta name="description" content="<?=$webdescription?>">
    <meta name="keywords" content="<?=$webkeywords?>">
</head>

<body style="background-image: url('https://images.pexels.com/photos/268966/pexels-photo-268966.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260')">
    <div class="layout-center">
        <h1 class="main-title"><?=$main_title?></h1>
        <p class="content-text"><?=$content_text?></p>
        <div class="social-buttons">
        <?php foreach($socialarray as $val){?>
            <div class="soc-item">
                <a href="<?=$val["link"]?>" style="background-color: <?=$val["bg_color"]?>;">
                    <i style="color: <?=$val["color"]?>;" class="<?=$val["icon"]?>"></i>
                </a>
            </div>
        <?php }?>
        </div>
    </div>
    <footer class="layout-footer">
        <h1>Arvision</h1>
        <p>
            © Telif Hakkı 2021 Arvision - Tüm hakları saklıdır.
        </p>
    </footer>
    <script src="assets/script.js"></script>
</body>

</html>