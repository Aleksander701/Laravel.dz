<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!###
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
 
 */

# Роут в контролллер (страница приветствия)
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

# Роут в контролллер (страница выбора категорий новостей)
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('categories');

# Роут в контролллер (страница добавления новостей)
Route::get('/news/add', [\App\Http\Controllers\NewsController::class, 'add'])->name('add_news');

# Роут в контролллер (страница выбранной категории новостей)
Route::get('/news/categories/{id}', [\App\Http\Controllers\NewsController::class, 'categories'])->name('news');

# Роут в контролллер (страница выбранной новости)
Route::get('/news/categories/one_news/{id}', [\App\Http\Controllers\NewsController::class, 'one_news'])->name('one_news');

# Роут в контролллер (страница авторизации)
Route::get('/auth', [\App\Http\Controllers\System\SystemController::class, 'auth'])->name('auth');

/*
#Add route
Route::get('/about', function () {
    return view('about');
});

#Add route
Route::get('/contact', function () {
    return view('contact');
});
 
 */
