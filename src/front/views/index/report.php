<div class="row">
    <div class="col-12 p-3">

        <a href="<?= \yii\helpers\Url::to(['index/index'])?>">На главную</a>
        <h2>Заметка от программиста!</h2>
        <p>
            У Вас возник вопрос, не реализовал так, как описано в тестовой задании: взять из репозитории только Yii2 Advanced.
            А здравый смысл и практика мне подсказали, так делать не стоит!
            А именно разница между Basic и Advanced, во первых, это пример реализации приложения! В Advanced много хвостов, за которым придется убрать.
            В этом проекте я с легкостью перешел из Basic в Advanced.
            Для реализации таких целей не требуется особых навыков, а самое важно это понимание и знание как работает Yii2.
        </p>
        <p>Я не пошел по принципу из документации Yii2. Опять же, там всего лишь примеры, для того чтобы новички фреймворка смогли разобраться, как работает фреймворк.</p>
        <p>
            У Yii2 есть множества инструментов, так и множества ловушек. Например, не стал писать в одной модели всё: валидация, загрузка атрибутов, привязка к таблице, связи таблиц и т.д.
            Поэтому чтобы не получить всё: банан, обезьяна и джунгли, я разбил на несколько классов. И каждый класс должен брать на себя только одну ответственность! Это говорит SCP(принцип единой ответственности).
        </p>
        <p>В проекте все классы зафинализированы! И это правильно, потому что нечего там наследовать! Это принцип OCP(принцип открытости и закрытости). И программисту проще с кодовой базой работать! И IDE не будет подсказывать лишних классов, меньше в голове держать.</p>
        <h1 class="text-center">Отчет о проделанной работе</h1>
        <table class="table-bordered col-12">
            <thead>
            <tr>
                <td class="text-center p-3">
                    <b>
                        Задача
                    </b>
                </td>
                <td class="text-center p-3">
                    <b>
                        Оценка
                    </b>
                </td>
                <td class="text-center p-3">
                    <b>
                        Затрачено
                    </b>
                </td>
                <td class="text-center p-3">
                    <b>
                        Комментарий
                    </b>
                </td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center p-2">
                    Настройка Docker
                </td>
                <td class="text-center p-2">
                    30мин
                </td>
                <td class="text-center p-2">
                    10минут

                </td>
                <td class="text-center p-2">
                    Опыт и практика работы с docker
                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Первичная сборка контейнеров
                </td>
                <td class="text-center p-2">
                    50минут
                </td>
                <td class="text-center p-2">
                    30минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Установка Yii2 basic

                </td>
                <td class="text-center p-2">
                    10минут

                </td>
                <td class="text-center p-2">
                    15минут

                </td>
                <td class="text-center p-2">
                    Отсутствовал ssh-key для авторизации в Github

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Настройка Yii2 Basic на мультисайтинг

                </td>
                <td class="text-center p-2">
                    30минут

                </td>
                <td class="text-center p-2">
                    25минут

                </td>
                <td class="text-center p-2">
                    Переконфигурация Basic окружения. Yii2 Advanced – это образец для ознакомления работы мультисайтинга, в самом Yii2 Advanced много лишнего (yii init, bootstrap, и т.д.). Всегда нужно следовать чистоту кода.
                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Переконфигурирование composer.json

                </td>
                <td class="text-center p-2">
                    10 минут
                </td>
                <td class="text-center p-2">
                    10минут

                </td>
                <td class="p-2">
                    <ul>
                        <li>
                            Добавление в композер автозагрузку классов(PSR-4)
                        </li>
                        <li>
                            AdminLTE
                        </li>
                        <li>
                            Yiisoft/validator 3
                        </li>
                        <li>
                            Dotenv
                        </li>
                        <li>
                            Queue
                        </li>
                        <li>
                            Redis
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Настройка подключения к БД PostgreSQL

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">
                    Конфигурация

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Настройка сonsole–окружения

                </td>
                <td class="text-center p-2">
                    10 минут

                </td>
                <td class="text-center p-2">
                    5минут

                </td>
                <td class="text-center p-2">
                    Конфигурация

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Настройка admin-окружения

                </td>
                <td class="text-center p-2">
                    10 минут

                </td>
                <td class="text-center p-2">
                    10 минут

                </td>
                <td class="text-center p-2">
                    Конфигурация

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Настройка front-окружения

                </td>
                <td class="text-center p-2">
                    10 минут

                </td>
                <td class="text-center p-2">
                    5 минут

                </td>
                <td class="text-center p-2">
                    Конфигурация

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание миграции базы данных

                </td>
                <td class="text-center p-2">
                    30 минут

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">
                    60% времени заняло тестирование

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание сущности

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">
                    30 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание ActiveQuery

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">
                    50 минут

                </td>
                <td class="text-center p-2">
                    Забыл указать класса в методе find(), для упрощения состава запроса

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание репозитории

                </td>
                <td class="text-center p-2">
                    60 минут

                </td>
                <td class="text-center p-2">
                    50 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание сервисных слоев

                </td>
                <td class="text-center p-2">
                    60 минут

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание форм

                </td>
                <td class="text-center p-2">
                    10 минут

                </td>
                <td class="text-center p-2">
                    5 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание валидации

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">
                    60 минут

                </td>
                <td class="text-center p-2">
                    Чтение документации

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Конфигурация DI-контейнера

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание контроллера

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">
                    40 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание REST API

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Создание UserIdentity

                </td>
                <td class="text-center p-2">
                    15 минут

                </td>
                <td class="text-center p-2">
                    15 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Конфигурация контроллера для контроля доступа

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">
                    20 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Unit тест
                </td>
                <td class="text-center p-2">
                    60 минут
                </td>
                <td class="text-center p-2">
                    60 минут
                </td>
                <td class="p-2">
                    <ul>
                        <li>
                            Конфигурация
                        </li>
                        <li>
                            Написание теста
                        </li>
                        <li>
                            Проверка
                        </li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Добавить логирование у админской панели
                </td>
                <td class="text-center p-2">
                    10 минут
                </td>
                <td class="text-center p-2">
                    10 минут
                </td>
                <td class="p-2">

                </td>
            </tr>
            <tr>
                <td class="text-center p-2">
                    Тестирование проекта

                </td>
                <td class="text-center p-2">
                    60 минут

                </td>
                <td class="text-center p-2">
                    60 минут

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <td class="text-center p-2">
                    Итого

                </td>
                <td class="text-center p-2">

                </td>
                <td class="text-center p-2">
                    700 минут, 11ч.40мин.

                </td>
                <td class="text-center p-2">

                </td>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

