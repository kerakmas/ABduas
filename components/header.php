
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="style/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div ata-aos="zoom-in-up" class="wrap">
        <header class="header">
            <a href="/" class="logo">Php WEBSITE</a>
            <div data-aos="fade-down-right" class="singIn">
                <?
                 foreach ($pate as $address => $info) { ?>
                    <a href="./?route=<?= $address?>" data-aos="fade-down-left" class="singIn__link" <?= $_GET['rout'] == $address ? 'active' : ''?>><?= $info['name']?></a>
                <?}?>
                
                <!-- <a href="/page/registration.php" class="singIn__link">Регистрация</a> -->
            </div>
            <div class="user">
                <div class="user__profile">
                    <img src="/img/2.jpg" alt="" class="user__profile-img">
                    <h4 class="user__profile-name">Имя</h4>
                </div>
                <ul class="user__menu">
                    <li><a href="#" class="user__menu-link"><i class="far fa-external-link"></i>Выход</a></li>
                </ul>
            </div>
        </header>