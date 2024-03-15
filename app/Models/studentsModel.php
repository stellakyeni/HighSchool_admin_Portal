<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentsModel extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        'name',
        'primary_index',
        'kcpe_marks',
        'class',
        'stream',
        'admission_number',
        'admission_date',
        'dob',
        'nationality',
        'county',
        'sub_county',
        'gender',

        'father_name',
        'father_contact',
        'father_id',
        'mother_name',
        'mother_contact',
        'mother_id',
    ];
}
