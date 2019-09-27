<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MalaysiaController extends Controller
{
    //

    public function index() {

        // Truyền biến từ controller xuống view
        $data = array();
        $data["dientich"] = "0.5 triệu km2";
        $data["danso"] = "1,2 triệt người";
        $data["gdp"] = "100 tỷ USD";

        /**
         * truyền 1 mảng từ controller xuống view
         * và trong view mình sẽ truy cập tên biến chính là
         * key của mảng truyền từ controller xuống
         */

        /**
         * hàm view() có 2 tham số
         * tham số 1 là đường dẫn của view tính từ folder resources/views/
         * tham so 2 là biến truyền xuống view
         */
        return view("malaysia", $data);
    }
}
