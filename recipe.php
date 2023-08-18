<?php
// Подключение к базе данных и другие настройки

$id = $_GET['id'];

// Получение информации о рецепте из базы данных

// Получение комментариев к рецепту из базы данных

// Вывод рецепта и комментариев
?>
<!DOCTYPE html>
<html>
<head>
    <title>Рецепт</title>
</head>
<body>
    <h1>Рецепт</h1>
    <!-- Вывод информации о рецепте -->
    <h2>Комментарии</h2>
    <!-- Вывод комментариев -->
    <h2>Добавить комментарий</h2>
    <form action="add_comment.php" method="POST">
        <input type="hidden" name="recipe_id" value="<?=$id?>">
        <textarea name="comment" placeholder="Комментарий"></textarea>
        <input type="submit" value="Добавить">
    </form>
</body>
</html>