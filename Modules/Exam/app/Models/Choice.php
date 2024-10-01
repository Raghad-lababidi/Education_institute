<?php

namespace Modules\Exam\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Exam\Database\Factories\ChoiceFactory;

class Choice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'choice',
        'isCorrect',
        'question_id',
    ];
    public function question(){
        return $this->belongsTo(Question::class);
    }

    // protected static function newFactory(): ChoiceFactory
    // {
    //     // return ChoiceFactory::new();
    // }
}
