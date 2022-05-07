<?php
    $conn =mysqli_connect('localhost','root','','ustumsuu');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Музыка для всех</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <?php include "assets/header.php"; ?>

    <div class="intro__music">
        <div class="container">
            <div class="intro__music__inner">
                <h1 class="intro__music__label">Раздел</h1>
                <h1 class="intro__music__title"><b>Музыка для всех</b></h1>
            </div>
        </div>
    </div>


    <section class="section__news">
        <div class="container">
            <div class="section__header">
                <h1>Курсы, уроки, конкурсы, соревнования</h1>
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



    <?php include "assets/footer.php"; ?>
</body>
</html>