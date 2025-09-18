<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$user_name = htmlspecialchars(trim($_POST['username'])); //htmlspecialchars - преобразует все html символы в строку.
$from = htmlspecialchars(trim($_POST['email'])); //trim - встроенная функция, которая удаляет пробельные символы (и другие указанные символы) с начала и конца строки.
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION['username'] = $user_name;
$_SESSION['email'] = $from;
$_SESSION['subject'] = $subject;
$_SESSION['message'] = $message;

if(strlen($user_name) < 3 || strlen($user_name) > 50){
    $error_username = "Введите корректное имя";
}
else if(strlen($from) < 3 || strpos($from, "@") == false){
    $error_email = "Вы ввели некорректный email";
}
else if(strlen($subject) <= 5){
    $error_subject = "Темы сообщения не мении 5 символов";
}
else if(strlen($message) <= 15){
    $error_message = "Тема сообщения не менее 5 символов";
}
else {

}
header('Location: contact.php');
exit;
} else {
    // Если кто-то попытался напрямую зайти на check_contact.php
    header('Location: contact.php');
    exit;
}
