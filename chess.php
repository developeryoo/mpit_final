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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "assets/header.php"; ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Оформление платной подписки</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Переведите на счет +79142788263 (сбербанк) сумму 100 рублей, после чего Вам будет выдана подписка в течении 15 минут.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Я перевел(а)</button>
        </div>
        </div>
    </div>
    </div>

    <div class="intro__chess">
        <div class="container">
            <div class="intro__chess__inner">
                <h1 class="intro__whales__label">Раздел</h1>
                <h1 class="intro__whales__title">Шахматы</h1>
            </div>
        </div>
    </div>


    <section class="section__news">
        <div class="container">
            <div class="section__header">
                <h1>Курсы, уроки, конкурсы, соревнования</h1>
                <button class="add__new">Добавить пост</button>
            </div>


            <form class="form" method="POST" action="php/add_chess.php" enctype="multipart/form-data">
                <input class="news__input" type="text" name="chess_date" placeholder="Дата" required>
                <input class="news__input" type="text" name="chess_type" placeholder="Тип" required>
                <input class="news__input" type="text" name="chess_title" placeholder="Название" required>
                <input class="news__input" type="text" name="chess_image" placeholder="URL изображения (только URL!)" required>
                <textarea name="chess_text" id="text" cols="30" rows="10" placeholder="Введите текст" required></textarea>
                <button class="news__button">Опубликовать</button>
            </form>



            <?php
                $query = "SELECT * FROM `chess` ORDER BY chess.id DESC";
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        form = document.querySelector('.form');
        add_button = document.querySelector('.add__new');

        add_button.onclick = function() {
        if(form.style.display == 'block')
          form.style.display = 'none';
        else
          form.style.display = 'block';
    };
    </script>



    <?php include "assets/footer.php"; ?>
</body>
</html>