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

