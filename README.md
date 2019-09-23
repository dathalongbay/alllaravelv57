# alllaravelv57
### composer create-project laravel/laravel="5.7"
### https://allaravel.com/series/hoc-laravel-tu-a-den-z-mien-phi
### gõ lệnh : php artisan make:auth để tạo ra 1 phần đăng nhập đăng ký đơn giản
### migration trong folder database/migrations của laravel là gì ?
### bình thường để tạo bảng trong CSDL mình sẽ phải vào navicat hoặc phpmyadmin để tạo bảng 
### nhưng migrations trong laravel sẽ làm giúp chúng ta việc đó

### để tạo ra 1 bảng thì sẽ phải tạo ra 1 migration mới 
### lệnh đó là : php artisan make:migration create_students_table

### muốn chuyển tất cả các migrations đã có trong laravel thành table trong CSDL thì làm thế nào ?
### gõ lệnh : php artisan migrate

### nếu gặp lỗi thì sẽ : app/Providers/AppServiceProvider.php
### thêm dòng Schema::defaultStringLength(191); này vào trong phương thức public function boot()
### nhớ là phải import namespace use Illuminate\Support\Facades\Schema;

### tạo ra 1 migration mà tên bảng là : locations chứa các tỉnh thành vn : location_name ( text ) , location_gpd ( text ) 
### 1 - php artisan make:migration create_XXXXX_table
### 2 - php artisan migrate

### router trong laravel nằm trong đường dẫn routes/web.php
### đây là 1 cái file chứa điều hướng giữa link url và controller hoặc hàm xử lý khi mà truy cập vào url đó
### url trang chủ mặc định là /
### Route::get('/', function () {
 ###   return view('welcome');
###  });
