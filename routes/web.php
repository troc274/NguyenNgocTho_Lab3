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

// Route::get('/', function () {
//     return view('hello');
// });

Route::get('hello', 'HelloController@index');

Route::get('home', 'HomeController@index');

Route::get('/', function () {
        return view('hello');
});

Route::get('/about', function () {
        echo '<h2>Đây là trang about nha</h2>';
});
Route::get('/contact', function () {
        echo '<h2>Đây là trang contact nha</h2>';
});
Route::get('/shop', function () {
        echo '<h2>Đây là trang shop nha</h2>';
});




Route::get('/test', function () {
    return view('test', ['name' => 'Bằng Võ'] );
});

Route::get('tensinhvien/{name?}', function ($name = "bằng võ") {
    echo 'tên cưng là ' .$name;
});


Route::get('/blade', function() {
    return view('page');
 });

Route::get('/ahihi', function() {
    return view('layout.master');
 });


Route::get('/blade', function() {
	$drinks = array('Vodka','Champa','Rượu Nho');
    return view('page' , array('name' => 'BẰNG VÕ', 'day' =>'Friday', 'drinks' =>$drinks));
 });





