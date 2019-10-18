<?php

namespace App\Http\Controllers;

use App\Models\StudentsModel;
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

        return view("welcome");
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

        return view("welcome");

    }

    /**
     * Học câu lệnh where trong DB
     */
    public function index3() {
        $users = DB::table('students')->where('student_name', 'qLSKqHOUsO')->get();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        return view("welcome");
    }

    /**
     * Học lấy 1 bản ghi duy nhất trong CSDL
     */
    public function index4() {
        $users = DB::table('users')->first();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        return view("welcome");
    }

    /**
     * Học câu lệnh where trong DB
     */
    public function index5() {
        $users = DB::table('students')->where('id', '>', 3)->get();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        return view("welcome");
    }

    public function index6() {
        $users = DB::table('students')->where('student_name', 'like', "W%")->get();

        echo "<pre>";
        print_r($users);
        echo "</pre>";
        return view("welcome");
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
        return view("welcome");

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
        return view("welcome");

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
        return view("welcome");

    }

    /** thêm vào trong db */
    public function index10() {


        DB::table('students')->insert(
            ['student_name' => 'nguyen van an', 'student_location' => "ha noi"]
        );

        return view("welcome");
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

        return view("welcome");

    }

    /**
     * cập nhật db
     */
    public function index12() {
        DB::table('students')
            ->where('id', 1)
            ->update(['student_name' => "demo update", "student_location" => "ho chi minh"]);

        return view("welcome");
    }

    /**
     * xóa dữ liệu db
     */
    public function index13() {
        DB::table('students')->where('id', '>', 20)->delete();


        return view("welcome");
    }


    public function index14() {


        // khởi tạo model ORM
        $studentModel = new StudentsModel();
        $table = $studentModel->getTable();

         echo "<br>" . __FILE__ . " --- debug ----";
         echo "<pre>";
         print_r($table);
         echo "</pre>";
        return view("welcome");
    }

    public function index15() {

        // lấy ra tất cả các bản ghi trong bảng students
        $students = StudentsModel::all();
        echo "<br>" . __FILE__ . " --- debug ----";
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        return view("welcome");
    }

    public function index16() {

        // lấy ra tất cả các bản ghi trong bảng students
        $students = StudentsModel::all();
        foreach($students as $student) {
            echo "<br>". $student->id . " -- " . $student->student_name;
        }
        return view("welcome");
    }



    public function index17() {

        // lấy ra tất cả các bản ghi trong bảng students
        $students = StudentsModel::where('id',">", 5)
            ->orderBy('id', 'asc')
            ->take(10)
            ->get();
        foreach($students as $student) {
            echo "<br>". $student->id . " -- " . $student->student_name;
        }
        return view("welcome");
    }


    public function index18() {

        $studentModel = new StudentsModel();

        $studentModel->student_name = "Name by ORM MODEL";
        $studentModel->student_location = "Location by ORM MODEL";

        $studentModel->save();


        return view("welcome");
    }



    public function index19() {

        $studentModel = StudentsModel::find(29);

        $studentModel->student_name = "Update Name by ORM MODEL";
        $studentModel->student_location = "Update Location by ORM MODEL";

        $studentModel->save();


        return view("welcome");
    }


    public function index20() {

        StudentsModel::where("id", ">", 5)
        ->where("id", "<", "10")->update(["student_location"=>"đà nẵng"]);


        return view("welcome");


    }


    public function index21() {
        $studentModel = StudentsModel::find(29);

        $studentModel->delete();


        return view("welcome");
    }


    public function index22() {
        StudentsModel::where("id", ">", 5)
            ->where("id", "<", "10")->delete();


        return view("welcome");
    }
}
