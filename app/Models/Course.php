<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
//    use HasFactory;
    protected $table = 'courses';
    protected $fillable = [
        'title', 'subtitle',
        'cost', 'avatar',
        'started',
    ];
    public function courseType (): BelongsTo
    {
        return $this->belongsTo(CourseType::class);
    }

    public function formattedCost()
    {
        $cost = str($this->cost);

        return strlen($cost)>3?substr($cost,0,-3)." ".substr($cost,-3):$cost;
    }
}
