<?php

namespace Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Course\Database\Factories\AssignmentFactory;

class Assignment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'title',
        'type',
        'date',
        'FilePath',
        'SolveFilePath',
        'subject_id',
    ];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    // protected static function newFactory(): AssignmentFactory
    // {
    //     // return AssignmentFactory::new();
    // }
}
