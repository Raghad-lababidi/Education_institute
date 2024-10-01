<?php

namespace Modules\Course\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Course\Database\Factories\LevelFactory;

class Level extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    // protected static function newFactory(): LevelFactory
    // {
    //     // return LevelFactory::new();
    // }
}
