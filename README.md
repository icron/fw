Diploma
=============================

1. Есть файл index.php, где происходит подключение к БД, а есть файл index.html
c версткой, как их объеденить? Что должно являтся точкой входа?

2. Как при помощи ООП реализовать вход в интерфейс администратора?

3. Как при помощи ООП вывести список администраторов из БД в таблицу,
измененить пароль, добавить, удалить администратора?

4. Как использовать TWIG при выводе данных?


index.php?r=default/index

// Добавление вопроса
admin.php?r=question/create

// оРедактирование вопроса
admin.php?r=question/update

// Удаление вопроса
admin.php?r=question/delete