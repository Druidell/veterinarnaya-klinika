<?php
session_start();

if ($_SESSION['user']) {
    header('Location: /veterinarnaya/indexadmin.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <h1>ВетСервис</h1>
        <nav>
        <a href="/veterinarnaya/#about">О нас</a>
            <a href="/veterinarnaya/#services">Услуги</a>
            <a href="/veterinarnaya/#team">Наша команда</a>
            <a href="/veterinarnaya/#contact">Контакты</a>
            <a href="/veterinarnaya/work.php">Как это работает</a>
            <a href="/veterinarnaya/contact.php">Записаться</a>
            <a class="login" href="/veterinarnaya/login.php">Войти</a>
        </nav>
    </header>
    
    <main>
            <div class="maintwo">
                <h2>Авторизация</h2>
                    <div class="login-form">  
                        <form action="vendor/signin.php" method="post">
                            <div class="row-input">
                                <input type="text" class="login-form-input" name="login" placeholder="Введите имя пользователя или email"  required="">
                            </div>
                            <div class="row-input">
                                <input type="password" class="login-form-input" name="password" placeholder="Введите пароль" required="">
                            </div>
                            <div class="login-form-button">
                            <button type="submit" class="starter-button">Войти</button>
                            <?php
                            if ($_SESSION['message']) {
                            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                            }
                            unset($_SESSION['message']);
                            ?>
                            </div>
                            <div class="login-form-text">
                                <p>Забыли пароль или у вас нет учетной записи? - <a href="Contacts.php">напишите сюда</a> </p>
                            </div>
                        </form>
                    </div>
            </div>
            </main>

</body>
</html>