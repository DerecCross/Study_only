<?php
$title = "Главная страница";
require_once "blocks/header.php";
?>
<h1>Главная</h1>

<?php
$file = fopen('text.txt', 'a');
fwrite($file,"Example text 2\ nHello");

fclose($file);

require_once "blocks/footer.php";
?>

