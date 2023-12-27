<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
        
        $students = \App\Models\Student::all();

        $student = \App\Models\Student();
        $student->name = 'John Doe';
        $student->email = 'john@example.com';
        $student->save();

        $student = \App\Models\Student::find(i);
        $student->name = 'Updated Name';
        $student->save();

        $student = \App\Models\Student::find(i);
        $student->delete();






}
