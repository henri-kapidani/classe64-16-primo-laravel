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

$arr = [
    [
        'route'     => 'home',
        'menuName'  => 'Home'
    ],
    [
        'route'     => 'products',
        'menuName'  => 'Products'
    ],
    [
        'route'     => 'about',
        'menuName'  => 'About Us'
    ],
    [
        'route'     => 'saluti',
        'menuName'  => 'Pagina di saluti'
    ],
];

Route::get('/', function () use ($arr) {
    return view('home', [
        'pageTitle' => 'Homepage',
        'arr'       => $arr
    ]);
})->name('home');

Route::get('/about-us', function () {
    return view('frontoffice.about', [
        'pageTitle' => 'about from view',
        'hTitle'    => 'This is our about us page'
    ]);
})->name('about');

Route::get('/products', function () {
    return view('frontoffice.products');
})->name('products');

Route::get('/salulti', function () use ($arr) {
    return view('frontoffice.saluti', [
        'pageTitle' => 'Saluti page',
        'arr'       => $arr
    ]);
})->name('saluti');
