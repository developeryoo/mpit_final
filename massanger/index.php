<?php
	$conn = mysqli_connect('localhost', 'root','', 'ustumsuu');
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТyмсyyNet</title>
    <link rel="stylesheet" href="style_massanger.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body id="body" class="body">
    <header class="header">
        <div class="container">
            <div class="header__inner">
                <a class="logo__link" href="/mpit/index.php"><div class="logo"><img src="img/logo2.png" alt=""></div></a>
                <nav class="nav">
                    <input class="nav__input" type="text" placeholder="Поиск сообщений/чатов">
                </nav>
            </div>
        </div>
    </header>


    <section class="section">
        <div class="container display-flex">
            <div class="menu">
                <div class="profile">
                    <div class="avatar">
                        <img src="img/avatar2.png" alt="ava">
                    </div>
                    <h1 class="profile__name">Иванов Иван Иванович</h1>
                    <p class="profile__date">10 июня 1974</p>
                    <button class="profile__button">Мой профиль</button>
                </div>
                <div class="navigation">
                    <a class="nav__link" href="/mpit/index.php">Новости</a>
                    <a href="index.php">Мессенджер</a>
                    <a href="#">Сообщество</a>
                    <a href="#">Документы</a>
                    <a href="#">Другое</a>
                </div>
            </div>


            <div class="main">
                <form method="POST" action="post_add.php" enctype="multipart/form-data">
                    <input class="news__input" type="text" name="post_text" placeholder="Что ответить всем?" required>
                    <input type="submit" class="news__button" value="Ответить">

                </form>

                <?php
                    $query = "SELECT * FROM `posts` ORDER BY posts.id DESC";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_array($result)) {
                ?>

                <div class="news__name">
                    <div class="news__dec"></div>
                    <div class="news__init">
                        <div class="news__avatar">
                            <img src="img/avatar2.png" alt="ava">
                        </div>
                        <div class="news__title">
                            <h1>Иванов Иван</h1>
                            <p>Сейчас, <b>3 непрочитанных сообщения</b></p>
                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>

                <div class="news__name">
                    <div class="news__dec"></div>
                    <div class="news__init">
                        <div class="news__avatar">
                            <img src="img/Albert_Einstein_Head.jpg" alt="ava">
                        </div>
                        <div class="news__title">
                            <h1>Сергей Адамов</h1>
                            <p>Вчера в 14:12, <b>1 непрочитанное сообщение</b></p>
                        </div>
                    </div>
                </div>

                <div class="news__name">
                    <div class="news__dec"></div>
                    <div class="news__init">
                        <div class="news__avatar">
                            <img src="img/post2.jpg" alt="ava">
                        </div>
                        <div class="news__title">
                            <h1>Новости города Иваново</h1>
                            <p>Сегодня в 09:27, <b>2 непрочитанных сообщения</b></p>
                        </div>
                    </div>
                </div>


                <div class="news__name">
                    <div class="news__dec"></div>
                    <div class="news__init">
                        <div class="news__avatar">
                            <img src="img/post3.jpg" alt="ava">
                        </div>
                        <div class="news__title">
                            <h1>Рецепты еды на каждый день</h1>
                            <p>Сегодня в 16:42, <b>1 непрочитанное сообщение</b></p>
                        </div>
                    </div>
                </div>



                <h1 class="cards__title">Возможно вы знакомы:</h1>
                <div class="cards">
                    <div class="card__profile">
                        <div class="card__avatar">
                            <img src="img/card1.webp" alt="ava">
                        </div>
                        <h1 class="profile__name">Павлов Николай</h1>
                        <p class="profile__date">5 мая 1981</p>
                        <button class="card__button">Написать</button>
                    </div>
                    <div class="card__profile">
                        <div class="card__avatar">
                            <img src="img/card2.jpg" alt="ava">
                        </div>
                        <h1 class="card__name">Иванова Ольга</h1>
                        <p class="card__date">15 декабря 1979</p>
                        <button class="card__button">Написать</button>
                    </div>
                    <div class="card__profile">
                        <div class="card__avatar">
                            <img src="img/card3.jpg" alt="ava">
                        </div>
                        <h1 class="card__name">Дыденко Максим</h1>
                        <p class="card__date">23 ноября 1986</p>
                        <button class="card__button">Написать</button>
                    </div>


                </div>

                <button class="button__more">Загрузить еще</button>
            </div>
        </div>
    </section>


    <?php include "../assets/footer.php"; ?>
</body>
</html>