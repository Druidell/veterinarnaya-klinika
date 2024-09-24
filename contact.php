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
            <div class="contact" id="contact">
                <h2>Контакты</h2>
                <p>Телефон: <strong>+7 800 555-35-35</strong></p>
                <p>Адрес: <strong>г. Пенза, ул. Московская, д. 199</strong></p>
                <p>Часы работы: <strong>Пн-Пт: 9:00 - 20:00, Сб: 10:00 - 18:00, Вс: Выходной</strong></p>
            
                <div class="contact-grid">
                <h2>Запись на прием</h2>
                <form class="contact-form" action="help/admin.php" method="POST">
                    <input type="text" name="namepet" placeholder="Имя питомца" required>
                    <input type="text" name="nameowner" placeholder="Имя владельца" required>
                    <input type="text" name="surnameowner" placeholder="Фамилия владельца" required>
                    <input type="text" name="agepet" placeholder="Возраст питомца" required>
                    <input type="text" name="typepet" placeholder="Тип животного" required>
                    <textarea name="descriptionpet" placeholder="Описание" rows="5" required></textarea>
                    <input type="text" name="numberowner" placeholder="Телефон" required>
                    <input type="submit" value = "Отправить" class = "btn"> 
                </form>
                </div>
            </div>
            </div>
            </main>

    <footer>
        <p>&copy; 2024 Ветеринарная клиника - ВетСервис. Все права защищены.</p>
    </footer>
</body>
</html>