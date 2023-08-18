<?php
// Подключение к базе данных и другие настройки

$title = $_POST['title'];
$ingredients = $_POST['ingredients'];
$instructions = $_POST['instructions'];

// Валидация данных (например, проверка на заполненность полей)

// Добавление рецепта в базу данных

// Перенаправление на главную страницу
header("Location: index.php");
?>