<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';
    protected $fillable = [
        'name', 'position',
        'about', 'avatar',

    ];

    protected $casts =[
        'about' => 'array',
    ];
    public function courseAssoc (): HasMany
    {
        return $this->hasMany(CourseTeacher::class);
    }

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'courses_teachers');
    }


}
