<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $fillable = [
        'title', 'subtitle',
        'cost', 'avatar',
        'slug',
        'start_at','duration',
        'load', 'format',
        'section_who',
        'section_about_what',
        'section_result',
        'section_how_it_goes',
        'section_schedule',
        'cost_description',
    ];
    protected $casts = [
        'start_at'=>'date',
        'section_who'=>'array',
        'section_about_what'=>'array',
        'section_result'=>'array',
        'section_how_it_goes'=>'array',
        'section_schedule'=>'array',
        'cost_description'=>'array',
    ];
    public function courseType (): BelongsTo
    {
        return $this->belongsTo(CourseType::class);
    }
    public function teacherAssoc (): HasMany
    {
        return $this->hasMany(CourseTeacher::class);
    }
    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class, 'courses_teachers');
    }

    public function users(): HasMany
    {
        return $this->hasMany(UserCourse::class);
    }


    public function formattedCost()
    {
        $cost = str($this->cost);

        return strlen($cost)>3?substr($cost,0,-3)." ".substr($cost,-3):$cost;
    }
}
