<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    //

    public function index() {
        // trả về đường dẫn của view chứ phải layout
        // bởi vì view đã biết nó phải kế thừa layout
        return view("simple.contentviews.homepage");
    }

    public function hanoi() {
        return view("simple.contentviews.hanoi");
    }
}
