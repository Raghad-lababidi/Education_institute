<?php

namespace Modules\Exam\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Course\Models\Subject;

// use Modules\Exam\Database\Factories\ExamFactory;

class Exam extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'date',
        'description',
        'subject_id',
    ];
    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function scores(){
        return $this->hasMany(Score::class);
    }

    public function question(){
        return $this->hasMany(Question::class);
    }

    // protected static function newFactory(): ExamFactory
    // {
    //     // return ExamFactory::new();
    // }
}
