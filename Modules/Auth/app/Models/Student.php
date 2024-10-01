<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Course\Models\Answer;
use Modules\Course\Models\Enrollment;
use Modules\Exam\Models\Score;

// use Modules\Auth\Database\Factories\StudentFactory;

class Student extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'FName',
        'MName',
        'LName',
        'gender',
        'BirthDate',
        'phone',
        'email',
        'password',
    ];

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }

    public function scores(){
        return $this->hasMany(Score::class);
    }

    public function answers(){
        return $this->hasMany(Answer::class);
    }

    // protected static function newFactory(): StudentFactory
    // {
    //     // return StudentFactory::new();
    // }
}
