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


Route::get('/testlayouthanoi', function () {
    return view('contentviews.hanoi');
});

Route::get('/testlayoutdanang', function () {
    return view('contentviews.danang');
});

Route::get('/testlayouthochiminh', function () {
    return view('contentviews.hochiminh');
});

Route::get("/china", "ChinaController@index");
Route::get("/malaysia", "MalaysiaController@index");
Route::get("/japan", "JapanController@index");

/*Route::get("/test/1", function (){
    return view("test.1");
});


Route::get("/test/2", function (){
    return view("test.2");
});

Route::get("/test/3", function (){
    return view("test.3");
});*/


/**
 * truyền biến từ trên url xuống view
 * trong link router chuyển chuối thanh biến {tên biến}
 * truyền biến giữa route và view
 */
Route::get("/test/{id}", function ($id){
    return view("test.$id");
});


Route::get('/simpledemo', 'Simple
Controller@index');
Route::get('/simpledemo/hanoi', 'SimpleController@hanoi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * truyền dữ liệu của biến từ url xuống function của router
 * biến trên url sẽ nằm trong {}
 * vd {action} hoặc {id}
 * {action}/{id} là bắt buộc phải có trên url
 * vd : http://localhost/alllaravelv57/1env/laravel/public/testroute/bathiet/7
 * nếu không truyền biến trên url thì sẽ bị đá về trang 404
 */
Route::get("/testroute/{action}/{id}", function ($action, $id){
    echo "<br>" . "test truyền biến từ route xuống callback của route";
    echo "<br>";
    var_dump($action);
    echo "<br>";
    var_dump($id);
});

/**
 * thêm dấu ? đằng sau tên biến để ko bắt buộc khi truyền từ url'
 * vd : {action?}/{id?}
 * đồng thời phải gán gia trị mặc định khi tạo tham số của hàm callback trong route
 */
Route::get("/testroute2/{action?}/{id?}", function ($action = "mặc định", $id = "mặc định"){
    echo "<br>" . "test truyền biến từ route xuống callback của route";
    echo "<br>";
    var_dump($action);
    echo "<br>";
    var_dump($id);
});

/**
 * truyền biến từ trên url xuống controller
 * khai báo biến trong url route
 * {bien1} bắt buộc
 * {bien2?}/{bien3?} có dấu ? thì sẽ không bắt buộc
 */
Route::get("/category/{bien1}/{bien2?}/{bien3?}", "CategoryController@index");


Route::get("/requestpost/login", "CategoryController@create");
Route::post("/requestpost/login", "CategoryController@login");

/**
 *
 */
Route::get("/db/index", "StudentsController@index");


