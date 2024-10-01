<?php

namespace Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Auth\Models\Student;

// use Modules\Course\Database\Factories\AnswerFactory;

class Answer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'date',
        'FilePath',
        'student_id',
        'assignment_id',
    ];

    public function assignment(){
        return $this->belongsTo(Assignment::class);
    }

    public function student(){
        return $this->belongsTo(Student::class);
    }

    // protected static function newFactory(): AnswerFactory
    // {
    //     // return AnswerFactory::new();
    // }
}
