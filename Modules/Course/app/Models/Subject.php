<?php

namespace Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Auth\Models\Teacher;
use Modules\Exam\Models\Exam;

// use Modules\Course\Database\Factories\SubjectFactory;

class Subject extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'level_id',
    ];
    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function enrollments(){
        return $this->belongsToMany(Enrollment::class);
    }

    public function teachers(){
        return $this->belongsToMany(Teacher::class);
    }
    public function assignments(){
        return $this->hasMany(Assignment::class);
    }

    public function resources(){
        return $this->hasMany(Resource::class);
    }
    public function exams(){
        return $this->hasMany(Exam::class);
    }

    // protected static function newFactory(): SubjectFactory
    // {
    //     // return SubjectFactory::new();
    // }
}
