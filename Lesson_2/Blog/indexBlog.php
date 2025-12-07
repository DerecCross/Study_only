<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
<h1>Мой личный дневник</h1>
<form action="blog.php" method="post">
	<input type="text" name="title" placeholder="Тема статьи" required> <br><br>
	<textarea name="content" placeholder="Текст статьи" rows="10" cols="50" required></textarea><br><br>
	<button type="submit" name="submit">Опубликовать</button>
</form>
</body>
</html>