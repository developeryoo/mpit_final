<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТyмсyyNet</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="login__body">
    <div class="login__main">
        <div class="login__logo">
            <a class="logo__link" href="index.html"><div class="login__l"><img src="img/logo 3 2.png" alt=""><h1>Түмсүү Net</h1></div></a>
        </div>
        <div class="login__inputs">
            <div class="login__window">
                <h1>Войти</h1>
                <p>или пройти <a href="#">регистрацию</a></p>

                <!-- <label for="email">Адрес электронной почты</label> -->
                <input type="email" id="email" name="email" placeholder="Введите E-Mail..." required>
                <a href="index.php"><button class="login__button">>></button></a>
                
                <hr>

                <div class="social">
                    <button class="login__google">Войти с помощью Google</button>
                    <button class="login__mailru">Войти с помощью Mail.ru</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>