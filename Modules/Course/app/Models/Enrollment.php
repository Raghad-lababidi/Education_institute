<?php

namespace Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Auth\Models\Student;

// use Modules\Course\Database\Factories\EnrollmentFactory;

class Enrollment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'date',
        'student_id',
        'course_id',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }

    // protected static function newFactory(): EnrollmentFactory
    // {
    //     // return EnrollmentFactory::new();
    // }
}
