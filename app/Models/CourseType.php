<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseType extends Model
{
    use HasFactory;

    protected $table = 'course_types';
    protected $fillable = [
        'text', 'color_from','color_to',
    ];
    public function courses(): HasMany
    {
        return $this->hasMany( Course::class);
    }




}
