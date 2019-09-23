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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Route::get
 * get là phương thức get tức là nó sẽ lấy url từ thanh địa chỉ xuống
 * :: đại diện của method static
 * static là method mà có thể gọi đến method của class mà
 * không cần khởi tạo đối tượng
 * tham số 1 là url '/' : URL trang chủ
 * tham số thứ 2 truyền vào trong method get()
 * function () {
return view('welcome');
}
 * trả về view welcome.blade.php
 */


/**
 * gõ domain/hanoi trên url
 * thì nó sẽ trả về 1 câu thông báo là
 * chào bạn đến hà nội
 */
Route::get("/hanoi", function (){
    echo "chào bạn đến hà nội";
});

/**
 * gõ domain/hochiminh trên url
 * thì nó sẽ trả về 1 câu thông báo là
 * chào bạn đến hồ chí mình
 */
Route::get("/hochiminh", function (){
    echo "chào bạn đến hồ chí mình";
});

/**
 * gõ domain/danang trên url
 * thì nó sẽ trả về 1 view có tên là
 * danang và trong view danang
 * sẽ hiện ra chữ chào đà nẵng
 */
Route::get("/danang", function () {
    return view("danang");
});

/**
 * route gọi sang controller
 * yêu cầu gõ domain/haiphong
 * gọi sang controller có tên là :
 * HaiPhongController và gọi vào method
 * quanlechan()
 * => tạo ra controller
 * php artisan make:controller HaiPhongController
 * controller trong laravel nằm trong path
 * app/Http/Controllers
 *
 */
Route::get("/haiphong", "HaiPhongController@quanlechan");

/**
 * domain/thanhhoa
 * gọi sang controller có tên là :
 * ThanhhoaController nhưng controller này
 * nằm trong folder là Province
 * bên trong app/Http/Controllers
 * method biensamson()
 * php artisan make:controller Province\ThanhhoaController
 *
 */
Route::get("/thanhhoa", "Province\ThanhhoaController@biensamson");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
