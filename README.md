# Микросервис электронная очередь
## Начало работы:
* Скачайте и добавьте этот репозиторий в свой проект
* В файле database/dbconnect.php заменить значения переменных для подключения на свои, соответствующие базе данных
- Таблица базы данных должна иметь 3 колонки: имя, фамилия, дата+время
- Пример базы данных находится по пути database/lz_queue.sql
* Данные из формы для записи отправлять в endpoints/person.php
- Инпут для имени обязательно должен иметь name="name"
- Инпут для фамилии обязательно должен иметь name="surname"
* Получать лист pdf из endpoints/list.php
## Пример:
<
  //Форма для регистрации в очереди
  <form action="./endpoints/person.php" method="post">
    <label>
      Имя: <input type="text" name="name" id="name">
    </label>
    <label>
      Фамилия: <input type="text" name="surname">
    </label>
    <button type="submit">Зарегистрироваться</button>
  </form>
  //Форма для получения списка людей в очереди
  <form method="post" action="./endpoints/list.php">
    <button type="submit">Получить список очереди</button>
  </form>
>

Пример можно посмотреть в файле example.html