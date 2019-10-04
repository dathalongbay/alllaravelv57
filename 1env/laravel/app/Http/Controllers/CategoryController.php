<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    /**
     * @param Request $request
     * @param int $id1
     * @param int $id2
     * @param int $id3
     * khi muốn lấy object của class Request (Illuminate\Http\Request)
     * của laravel thì sẽ phải truyền tham số
     * trong method là Request $request
     */
    public function index(Request $request, $id1, $id2 = "mặc định", $id3 = "mặc định"){
        var_dump($id1);
        var_dump($id2);
        var_dump($id3);

        // thử gõ : http://localhost/alllaravelv57/1env/laravel/public/category/1/1?abc=1

        echo "<br>";
        $uri = $request->path();
        echo '<br> $request->path() => ' . $uri;
        // Without Query String...
        $url = $request->url();
        echo '<br> $request->url() => ' . $url;
        // With Query String...
        $url = $request->fullUrl();
        echo '<br> $request->fullUrl() => ' . $url;
        $method = $request->method();
        echo '<br> $request->method() => ' . $method;
        echo '<br>' . __METHOD__; die;
    }


    public function create() {
        return view("request.create");
    }

    public function store(Request $request) {



    }
}
