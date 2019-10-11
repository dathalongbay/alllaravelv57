<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //

    public function index() {

        $users = DB::select('select * from users');

        echo "<pre>";
        print_r($users);
        echo "</pre>";

        foreach ($users as $user) {
            echo "<br> name " . $user->name;
            echo "<br> email " . $user->email;
        }

        die;
    }
}
