# Задание
Реализовать следующий функционал, используя фреймворк Laravel

1. Создать форму авторизации и регистрации (без использования пакетов), пароли в базе должны быть захешированы
2. Создать cущности Tag и Post
- Отношение ManyToMany
- Post должен иметь: ID, название, слаг, текст, картинку,
- Tag должен иметь ID, название, слаг
- Слаг должен быть уникальным и генерироваться исходя из названия, при создании модели необходимо проверять наличие сущности с таким слагом в бд и при нахождении добалять постфикс с цифрой, например “Запись_1”, “Запись_2” и.т.д.
3. Реализовать CRUD Tag и Post
- Сделать views для CRUD данных сущностей
- Подключить resource сущностей в файле web.php
- При удалении Tag должны удаляться все Post
- При удалении Post должна удаляться картинка
4. Закешировать запросы к бд при загрузке страницы и сбрасывать кеш при обновлении данных в БД.
5. Подключить библиотеку Intervention Image
6. На странице post.show вывести картинку в размере 300x300 с помощью Intervention Image
	
При реализации использовать:
Trait, Jobs, Services, FormRequest, Observers


# Как развернуть приложение:
1. На исполняемом ПК должен быть установлен Docker, Docker-Compose
2. Скачать данный репозиторий
3. В терминале указать команду docker-compose up -d в корневой папке проекта
4. В браузере перейти по ссылкe localhost/
Готово!
