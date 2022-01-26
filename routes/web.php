<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return '<b>hellou world</b>';
});

Route::get('/test2', function () {
    return '<!DOCTYPE html>
    <html lang="ru">
    <head>
    <meta charset="utf-8" />
    <title>Название сайта</title>
    </head>
    <body>
    <!--Создаём таблицу контейнер, которой задаём следующее
    оформление:
    border="1" - рамка вокруг контейнера. Увеличив число, можно увеличить толщину рамки.
    align="center" - размещаем контейнер по центру экрана.
    rules="rows" - убираем двойную рамку.
    style="width:60%;" - добавляем стилевое свойства, делающее
    контейнер и весь сайт "резиновым".
    Сделать полноценный адаптивный дизайн, этим способом невозможно.-->
    <table
    border="1"
    align="center"
    rules="rows"
    style="width:60%;">
    <!--Создаём строку-->
    <tr>
    <!--Создаём ячейку строки-->
    <td>
    <!--ШАПКА САЙТА-->
    
    <!--В ячейке строки создаём ещё одну таблицу для шапки сайта.
    Оформление:
    border="1" - двойная рамка толщиной в 1px
    background="images/168.png" - картинка в шапке сайта, если требуется.
    Адрес картинки вы должны вставить свой.
    bgcolor="#7FFFD4" - фоновый цвет в шапке, если нет картинки.
    cellpadding="10" - отступ содержимого от рамки не менее 10px.
    style="width:100%; border-radius:5px;" - добавляем "резиновость"
    и закругляем уголки рамки-->
    <table
    border="1"
    background="images/168.png"
    bgcolor="#7FFFD4"
    cellpadding="10"
    style="width:100%; border-radius:5px;">
    <!--Создаём строку таблицы-->
    <tr>
    <!--Создаём столбец таблицы-->
    <th>
    <!--Содержание ячейки столбца-->
    <h1>Название сайта (организации)</h1>
    <h3>Описание сайта</h3>
    <!--Закрываем таблицу-->
    </th>
    </tr>
    </table>
    
    <!--ОСНОВНОЙ КОНТЕНТ-->
    
    <!--В этой же ячейке контейнера создаём ещё одну таблицу
    для основного контента.
    Оформление как и в предыдущей таблице-->
    
    <table
    border="1"
    bgcolor="#e6e6fa"
    cellpadding="10"
    style="width:100%; border-radius:5px;">
    <!--Создаём строку-->
    <tr>
    <!--Создаём ячейку
    Оформление:
    rowspan="2" - объединяем две ячейки в одну.
    Число объединяемых ячеек по числу ячеек в сайдбаре.
    style="width:80%" - основной контент занимает 80% всей площади,
    оставшиеся 20% для сайдбара-->
    <td
    rowspan="2"
    style="width:80%">
    <h2>Страница</h2>
    <!--Начинаем абзац с красной строки-->
    <p style="text-indent:20px">
    Здравствуйте уважаемые будущие веб-мастера!
    Мне 55 лет и я рад приветствовать Вас на своём сайте.
    Этот сайт первый, который я разработал самостоятельно,
    а до этого умел только входить в интернет.</p>
    
    <p style="text-indent:20px">Почему я решил его сделать?
    За те 3 месяца, пока разбирался в
    сайтостроении и создавал этот ресурс обнаружилось,
    что авторы руководств по созданию
    сайтов считают многие нюансы само собой разумеющимися
    и не обращают на них внимание
    А мне, учитывая возраст и «опыт», было не просто
    понять как раз эти нюансы, они отнимали больше всего
    времени.</p>
    <!--Закрываем ячейку-->
    </td>
    
    <!--САЙДБАР-->
    
    <!--Создаём ячейку сайдбара-->
    <td bgcolor="#e6e6fa">
    <h3>Меню</h3>
    <!--Абзац для ссылки на страницу сайта-->
    <p>
    <!--Ссылка на страницу сайта-->
    <a href="">
    <!--Картинка маркера перед названием страницы-->
    <img src="http://trueimages.ru/img/00/06/f4fffdb5.png">
    <!--Название страницы
    style="margin-left:5px;" - отступ названия от маркера-->
    <span style="margin-left:5px;">Страница</span></a>
    <!--Закрываем абзац-->
    </p>
    <p>
    <a href="">
    <img src="http://trueimages.ru/img/31/ab/4dcb087c2ae4305edcd15171696.jpg">
    <span style="margin-left:5px;">Страница 1</span;></a>
    </p>
    <p>
    <a href="">
    <img src="http://trueimages.ru/img/31/ab/4dcb087c2ae4305edcd15171696.jpg">
    <span style="margin-left:5px;">Страница 2</span></a>
    </p>
    <!--Закрываем строку Меню-->
    </td>
    </tr>
    <!--Создаём строку с дополнительной информацией-->
    <tr>
    <!--Ячейка с дополнительной информацией-->
    <td
    bgcolor="#e6e6fa"
    align="center">
    <h3>Общая информация</h3>
    <p>Текст общей информации или реклама</p>
    <!--Закрываем ячейку с общей информацией
    и таблицу основного контента-->
    </td>
    </tr>
    </table>
    
    <!--ПОДВАЛ-->
    
    <!--Создаём таблицу подвала-->
    <table
    border="1"
    bgcolor="#7FFFD4"
    height="100"
    cellpadding="10"
    style="width:100%; border-radius:5px;">
    <!--Создаём строку.-->
    <tr>
    <!--Создаём столбец-->
    <th>
    <h3>Подвал</h3>
    <!--Закрываем таблицу подвала. При желании в подвале можно
    сделать несколько строк и столбцов-->
    </th>
    </tr>
    </table>
    <!--Закрываем таблицу контейнера-->
    </td>
    </tr>
    </table>
    </body>
    </html>';
});

// Route::get('/greeting', function () {
//     return 'Nice to see you!';
// });

// Route::get('/anotherView', function () {
//     return view('anotherView');
// });
Route::get('/admin', [App\Http\Controllers\Admin\CategoryController::class, 'index'])
->name('admin::index');
Route::match(['get', 'post'],'/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])
->name('admin::category::create');

Route::get('/categoryNews', [App\Http\Controllers\MainController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


