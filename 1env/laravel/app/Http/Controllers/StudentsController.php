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

    /**
     * Học câu lệnh where trong DB
     */
    public function index3() {
        $users = DB::table('students')->where('student_name', 'qLSKqHOUsO')->get();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;
    }

    /**
     * Học lấy 1 bản ghi duy nhất trong CSDL
     */
    public function index4() {
        $users = DB::table('users')->first();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;
    }

    /**
     * Học câu lệnh where trong DB
     */
    public function index5() {
        $users = DB::table('students')->where('id', '>', 3)->get();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;
    }

    public function index6() {
        $users = DB::table('students')->where('student_name', 'like', "W%")->get();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;
    }

    public function index7() {

        echo "<br>" . __METHOD__;
        $users = DB::table('students')->orderBy('id', 'desc')->get();

        /**
         *
         * Illuminate\Support\Collection Object
         */

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;

    }

    public function index8() {

        echo "<br>" . __METHOD__;
        $users = DB::table('students')->orderBy('id', 'desc')->toSql();

        /**
         *
         * Illuminate\Support\Collection Object
         */

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;

    }

    public function index9() {

        echo "<br>" . __METHOD__;
        $users = DB::table('students')->where('student_name', 'like', "W%")->toSql();

        /**
         *
         * Illuminate\Support\Collection Object
         */

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        die;

    }

    /** thêm vào trong db */
    public function index10() {


        DB::table('students')->insert(
            ['student_name' => 'nguyen van an', 'student_location' => "ha noi"]
        );

    }

    /**
     * thêm nhiều bản ghi 1 lúc
     */
    public function index11() {


        DB::table('students')->insert([
            ['student_name' => 'nguyen van b', 'student_location' => "ha noi"],
            ['student_name' => 'nguyen van c', 'student_location' => "bac ninh"],
            ['student_name' => 'nguyen van d', 'student_location' => "bac giang"],
            ['student_name' => 'nguyen van e', 'student_location' => "nam dinh"],
            ['student_name' => 'nguyen van f', 'student_location' => "ha nam"]
        ]);

    }

    /**
     * cập nhật db
     */
    public function index12() {
        DB::table('students')
            ->where('id', 1)
            ->update(['student_name' => "demo update", "student_location" => "ho chi minh"]);
    }

    /**
     * xóa dữ liệu db
     */
    public function index13() {
        DB::table('students')->where('id', '>', 20)->delete();
    }


    
    

}
