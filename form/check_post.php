<?php
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

if(trim($name) == "") {
    echo "Вы не ввели имя пользователя";
}
else if(trim($name) <=1) {
    echo "Такого имени не существует";
}
else if(trim($email) == ""|| trim($password) == "" || trim($_POST['message']) == "") {
    echo "Введите все данные";
}
else{
    $_POST['password'] = md5($password);
    echo "<h1>Все данные</h1>";
    foreach ($_POST as $key => $item) {
        echo $key.": ".$item."<br>";

        header('Location: about.php');
        exit;
    }
}