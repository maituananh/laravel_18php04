<?php

use Illuminate\Support\Facades\Schema;


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

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/thamso/{ten}/{tuoi}', function ($ten, $tuoi) {
    echo "tên của bạn là: " . $ten . '------' . $tuoi;
});

Route::get("goicontroller", "mycontroller@xinchao");

Route::get('controller/{thamso}', 'mycontroller@controller2');

Route::get('chuyencontroller', 'mycontroller@chuyencontroller'); // chuyển đến controller

//controller gọi đến router này
Route::get('rout1', ['as'=>'denday', function() {
    echo 'controller dẫn đến router này';
}]);

Route::get('myrequest', 'mycontroller@request');

Route::get('getForm', function() {
    return view('postForm');
});

Route::post('postForm', ['as'=>'postForm', 'uses'=>'mycontroller@postForm']);

Route::get('/uploadFile', function() {
    return view('postFile');
});

// đặt biệt danh
Route::post('postFile',['as'=>'postFile', 'uses'=> 'mycontroller@postFile']);

// truyền tham số qua controller
Route::get('thamsoView/{thamso}', 'mycontroller@thamso');

// cho phép biến name sử dụng ở mọi nơi
View::Share('name', 'dữ liệu share là mai tuấn anh');

// chọn link để view ra
Route::get('template/{link}', 'mycontroller@bladeTemplate');

// database
Route::get('database', function() {
    Schema::create('demoLaravel', function($table) {
        $table->increments('id');  // tự động tăng
        $table->string('ten', 100);
    });
    echo 'đã thực hiện thành công';
});
