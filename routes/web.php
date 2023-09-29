<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});


 Route::get('/home', function () {
    echo "Página Inicial";
})->name('home');

 Route::get('/user/{id}', function ($id) {
    echo "Perfil do Usuário com ID: $id";
})->name('user.profile');

 Route::get('/post/{slug}', function ($id) {
    echo "Post de blog pelo nome do post";
})->name('blog.post');

 Route::get('/category/{category}', function ($category) {
    echo "Posts na Categoria: $category";
})->name('blog.category');

 Route::get('/user/{id}/language/{lang?}', function ($user.profile) {
    echo "Perfil de usuário com um parâmetro opcional para língua";
})->name('user.profile.language');

 Route::get('/products/{category}/{minPrice?}', function ($products.category) {
    echo "Perfil de usuário com um parâmetro opcional para língua";
})->name('products.category.price');

  Route::get('/page/{page}', function ($page) {
    echo "Exibir um número de página inteiro usando uma restrição de formato";
})->name('page.number');


  Route::get('/convert/{currency}', function ($convert.currency) {
    echo "Conversor de moeda";
})->name('currency.converter');


 Route::get('/sum/{number1}/{number2}', function ($number1, $number2) {
    $soma = $nnumber1 + $number2;
    echo $soma;
})->name('sum.numbers')->where(['number1' => '[0-9]+', 'number2' => '[0-9]+']);










