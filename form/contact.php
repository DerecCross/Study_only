<?php
session_start();
$title = "Контакты";
require_once "blocks/header.php";

?>

<div class="container mt-5">
    <h1><?= htmlspecialchars($title) ?></h1>

    <form action="check_contact.php" method="POST">
        <div class="mb-3">
            <label for="username" class="form-label">Имя пользователя *</label>
            <input type="text" name="username" value="<?=$_SESSION['username'] ?? ''?>" id="username" placeholder="Введите имя"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email *</label>
            <input type="email" name="email" value="<?=$_SESSION['email'] ?? ''?>" id="email" placeholder="Введите email"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="subject" class="form-label">Тема сообщения *</label>
            <input type="text" name="subject" value="<?=$_SESSION['subject'] ?? ''?>" id="subject" placeholder="Тема сообщения"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Текст сообщения *</label>
            <textarea name="message" id="message" placeholder="Ваше сообщение"
                      class="form-control" rows="5" ><?=$_SESSION['message'] ?? ''?></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
</div>
<?php
require_once "blocks/footer.php";
?>
