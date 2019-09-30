@extends("simple.layouts.main")
dòng bên trên là dòng khai báo view đang kế thừa từ layout nào
chú ý sẽ truyền đường dẫn của layout vào trong lệnh extends()
đường dẫn của layout lấy resources/views/ là đường dẫn gốc

@section("title")
    Title của trang hà nội
@endsection


@section("content")
   Nội dung của trang hà nội
@endsection
