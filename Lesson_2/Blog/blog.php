<link rel="stylesheet" href="blog.css">
<button type="submit" class="fixed-btn" name="submit" onclick="window.location.href='indexBlog.php'">Добавить запись</button>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$title = $_POST['title'] ?? '';
$content = $_POST['content'] ?? '';
$date = date('d.m.Y H:i');

$posts = [];
if (file_exists('blog.json')) {
$posts = json_decode(file_get_contents('blog.json'), true);
}

$posts[] = [
'title' => htmlspecialchars($title),
'content' => htmlspecialchars($content),
'date' => $date
];

file_put_contents('blog.json', json_encode($posts));

header('Location: ' . $_SERVER['PHP_SELF']);
exit;
}

$posts = [];
if (file_exists('blog.json')) {
	$posts = json_decode(file_get_contents('blog.json'), true);
	$posts = array_reverse($posts); // новые сверху
}

foreach ($posts as $post): ?>
	<div style="border:1px solid #ccc; margin:5px; padding:1px;">
		<h3><?php echo $post['title']; ?></h3>
		<p><?php echo nl2br($post['content']); ?></p>
		<small><?php echo $post['date']; ?></small>
	</div>
<?php endforeach; ?>
