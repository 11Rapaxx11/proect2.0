<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
      <title>Сайт рецептов</title>
</head>
<body>
    <div class='imgblock'>
   <div align="center"><h1><span>САЙТ РЕЦЕПТОВ
   </span><img src="eda4.jpg"></h1> </div>
    <h2>Найти рецепт</h2>
    <form action="search.php" method="GET">
        <input type="text" name="query" placeholder="Поиск по названию или ингредиентам">
        <input type="submit" value="Найти">
    </form>

    <h2>Рецепты</h2>
    <ul>
        <li><a href="recipe.php?id=1">Рецепт 1</a></li>
        <li><a href="recipe.php?id=2">Рецепт 2</a></li>
        <li><a href="recipe.php?id=3">Рецепт 3</a></li>
        <!-- Добавьте больше рецептов здесь -->
    </ul>

    <h2>Добавить рецепт</h2>
    <form action="add_recipe.php" method="POST">
        <input type="text" name="title" placeholder="Название рецепта">
        <div>
        <textarea name="ingredients" placeholder="Ингредиенты"></textarea>
        <div>
        <textarea name="instructions" placeholder="Пошаговое приготовление"></textarea>
        <div>
        <input type="submit" value="Добавить">
    </form>
 </body>
</html>