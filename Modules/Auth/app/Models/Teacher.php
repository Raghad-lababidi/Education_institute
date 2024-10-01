<?php

namespace Modules\Auth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Course\Models\Subject;

// use Modules\Auth\Database\Factories\TeacherFactory;

class Teacher extends Model
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
        'specialization',
        'BirthDate',
        'phone',
        'email',
        'password',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    // protected static function newFactory(): TeacherFactory
    // {
    //     // return TeacherFactory::new();
    // }
}
