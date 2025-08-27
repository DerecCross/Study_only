<?php
$title = "Главная страница";
require_once "blocks/header.php";
?>
<h1>Главная</h1>

<?php
//echo date(' d/m/y H:i:s', time() + 10000).'<br>';
echo date('m-d H:i:s', strtotime("+10 H"));

require_once "blocks/footer.php";
?>

