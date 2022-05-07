<?php
    $conn =mysqli_connect('localhost','root','','ustumsuu');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Образовательная соцсеть TYMCYYNet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "assets/header.php"; ?>

    <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Образовательная соцсеть <b>TYMCYYNet</b></h1>
                <p class="intro__text">на базе "Пять китов образования"</p>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="whales">
            <div class="whale__music">
                <div class="whale__header">
                    <h1 class="whale__title">Музыка для всех</h1>
                    <a class="whale__link" href="#">Перейти></a>
                </div>
            </div>
            <div class="whale__draw">
                <div class="whale__header">
                    <h1 class="whale__title">Рисуем все</h1>
                    <a class="whale__link" href="#">Перейти></a>
                </div>
            </div>
            <div class="whale__sport">
                <div class="whale__header">
                    <h1 class="whale__title">Все в спорт</h1>
                    <a class="whale__link" href="#">Перейти></a>
                </div>
            </div>
            <div class="whale__chess">
                <div class="whale__header">
                    <h1 class="whale__title">Шахматы</h1>
                    <a class="whale__link" href="#">Перейти></a>
                </div>
            </div>
            <div class="whale__languages">
                <div class="whale__header">
                    <h1 class="whale__title">Три языка</h1>
                    <a class="whale__link" href="#">Перейти></a>
                </div>
            </div>
        </div>
    </section>


    <section class="section__news">
        <div class="container">
            <div class="section__header">
                <h1>Новости</h1>
                <button>Сначало интересное</button>
                <button>Сначало старое</button>
                <button>Сначало новое</button>
                <input placeholder="Поиск" type="text">
                <button>Найти</button>
            </div>


            <?php
                $query = "SELECT * FROM `news` ";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="news">
                <div class="new__block">
                    <div class="new__date">
                        <h1><? echo $row[1] ?></h1>
                        <h1><? echo $row[2] ?></h1>
                    </div>
                    <div class="new__body">
                        <div class="new__image"><img src="<? echo $row[4] ?>" alt=""></div>
                        <div class="new__text">
                            <h1><? echo $row[3] ?></h1>
                            <p><? echo $row[5] ?></p>
                        </div>
                    </div>
                </div>
            </div>


            <?php
                }
            ?>
        </div>
    </section>




    <?php require "assets/footer.php"; ?>












    <script src="js/three.min.js"></script>
    <script src="js/vanta.globe.min.js"></script>
    <script>
    VANTA.GLOBE({
        el: "#intro",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        minHeight: 200.00,
        minWidth: 200.00,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xcfcfcf,
        size: 0.70,
        backgroundColor: 0x0
    })
    </script>
</body>
</html>