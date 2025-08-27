<?php
$title = "Про нас";
require_once "blocks/header.php";
?>
<div class="container mt-2">
    <h1>Про нас</h1>

    <form action="check_get.php" method="get">
        <label for="username">Имя:</label>
        <input type="text" id="username" name="username" placeholder="Введите имя" class="form-control"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Введите email" class="form-control"><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" placeholder="Введите пароль" class="form-control"><br>
        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
        <input type="submit" value="Отправить" class="btn btn-success">
    </form>
</div>

<?php
require_once "blocks/footer.php";
?>
