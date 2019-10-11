<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    //

    public function index($action) {

       if ($action != "") {
           $this->$action();
       }
    }

    public function index1() {

        echo "<br>" . __METHOD__;
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

    public function index2() {

        echo "<br>" . __METHOD__;
        $users = DB::table('users')->get();

        /**
         *
         * Illuminate\Support\Collection Object
         */

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;

    }
}
