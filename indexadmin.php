<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
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
                <div class="admin">
                    <h2>Добро пожаловать в админ-панель</h2>
        
                    <div class="widgets">
                        <div class="widget">
                            <h3>Последние записи</h3>
                                <?php
                                // Подключение к базе данных
                                $conn = new mysqli("localhost", "root", "", "veterinarnaya");

                                // Проверка соединения
                                if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                                }

                                // SQL-запрос для получения данных (какие переменные забираем и из какой БД, просто перечисляйте через запятую)
                                $sql = "SELECT id, full_name, login, email FROM veterinarnaya.users";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                // Вывод данных в таблицу (пишите названия столбцов, которые будут сверху)
                                echo '<table>';
                                echo ' <th>ID</th>
                                        <th>Полное имя</th>
                                        <th>Логин</th>
                                        <th>Электронная почта</th>
                                        <th>Взаимодействие</th>';
                                echo '<tbody>';

                                // Цикл, который выводит данные. В конце пример кнопки удаления данных из БД
                                while ($row = $result->fetch_assoc()) {
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';
                                echo '<td>' . $row['full_name'] . '</td>';
                                echo '<td>' . $row['login'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '<td>' . "<form action='../help/delete.php' method='post'>
                                <input type='hidden' name='id' value='" . $row["id"] . "' />
                                <input type='submit' value='Удалить'>
                                </form>" . '</td>';
                                echo '</tr>';
                                }

                                echo '</tbody></table>';
                                } else {
                                echo "0 результатов";
                                }

                                $conn->close();
                                ?>
                        </div>
                    </div>
                </div>
            </div>
            </main>

    <footer>
        <p>&copy; 2024 Ветеринарная клиника - ВетСервис. Все права защищены.</p>
    </footer>
</body>
</html>