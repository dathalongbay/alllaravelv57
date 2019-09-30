@extends("simple.layouts.main")
dòng bên trên là dòng khai báo view đang kế thừa từ layout nào
chú ý sẽ truyền đường dẫn của layout vào trong lệnh extends()
đường dẫn của layout lấy resources/views/ là đường dẫn gốc

@section("title")
    Nội dung trong vùng section có tên là title sẽ load vào trong
    vị trị yield("title") ở trong file layout
@endsection


@section("content")
    Nội dung trong vùng section có tên là content sẽ load vào trong
    vị trị yield("content") ở trong file layout

    <h1>Trang chủ</h1>
@endsection
