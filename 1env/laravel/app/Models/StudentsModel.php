<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentsModel extends Model
{
    // tên bảng trong db
    protected $table = "students";

    protected $primaryKey = 'id';
}
