<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor_colour extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'motor_colour_id',
    ];

    public function motorcycles()
    {
        return $this->hasMany(Motorcycle::class);
    }
}
