<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function courses(): HasMany
    {
        return $this->hasMany( Course::class);
    }


}
