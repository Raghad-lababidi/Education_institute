<?php

namespace Modules\Exam\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Auth\Models\Student;

// use Modules\Exam\Database\Factories\ScoreFactory;

class Score extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'score',
        'TotalScore',
        'date',
        'exam_id',
        'student_id',
    ];
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }

    // protected static function newFactory(): ScoreFactory
    // {
    //     // return ScoreFactory::new();
    // }
}
