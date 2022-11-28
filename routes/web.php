<?php

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

//Route Pemweb
Route:: get('/', 'webcontroller@home');
Route:: get('carrent', 'webcontroller@beranda');
Route:: get('tentang', 'webcontroller@tentang');
Route:: get('cars', 'webcontroller@cars');
Route:: get('blog', 'webcontroller@blog');
Route:: get('kontak', 'webcontroller@kontak');
Route:: get('tips', 'webcontroller@tips');
Route:: get('pw', 'webcontroller@pw');
Route:: get('admin', 'webcontroller@admin');
Route:: get('adminmobil', 'webcontroller@am');
Route:: get('adminblog', 'webcontroller@ab');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('adminmobil', 'adminmobilcontroller');
Route::resource('adminblog', 'adminblogcontroller');
Route::resource('adminuser', 'adminusercontroller');