<?php
$title = "Главная страница";
require_once "blocks/header.php";
?>
<h1>Главная</h1>

<?php
$lis = [10, 1, 8, 7, 100];
unset($lis[2]);
$lis = array_values($lis);
rsort($lis);
print_r($lis);

require_once "blocks/footer.php";
?>

