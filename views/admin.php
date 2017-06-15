<h1>Таблица администраторов</h1>
<table border="1">
    <tr>
        <th>Имя администратора</th>
        <th>Смена пароля</th>
        <th>Удаление</th>
    </tr>
    <tr>
        <td>Александр</td>
        <td>
            <form>
               <input name="" placeholder="Введите новый пароль">
                <button>Изменить</button>
            </form>
        </td>
        <td><a href="">Удалить администратора</a></td>
    </tr>
</table>




<br />
<br />




<h1>Список тем</h1>
<form>
    <label>Создание новой темы:</label>
    <input name="" placeholder="Введите название темы">
    <button>Создать</button>
</form>
<br />
<table border="1">
    <tr>
        <th>Название темы</th>
        <th>Всего вопросов в теме</th>
        <th>Опубликованно вопросов</th>
        <th>Вопросов без ответа</th>
        <th>Удаление темы</th>
    </tr>
    <tr>
        <td>Шаблонизатор TWIG</td>
        <td>5</td>
        <td>3</td>
        <td>2</td>
        <td><a href="">Удалить тему</a></td>
    </tr>
</table>




<br />
<br />






<h1>Вопросы без ответа в порядке добавления</h1>

<br />
<table border="1">
    <tr>
        <th>Вопрос</th>
        <th>Новая редакция вопроса</th>
        <th>Дата добавления вопроса</th>
        <th>Удаление вопроса</th>

    </tr>
    <tr>
        <td>Как установить шаблонизатор TWIG?</td>
        <td>
            <form>
                <textarea>Старая редакция вопроса</textarea><br />
                <button>Изменить вопрос</button>
            </form>
        </td>
        <td>14.06.17</td>
        <td><a href="">Удалить вопрос</a></td>
    </tr>
</table>
