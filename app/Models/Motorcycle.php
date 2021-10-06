<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'motor_type_id',
        'motor_colour_id',
    ];

    public function Users()
    {
        return $this->hasMany(User::class);
    }

    public function motorType()
    {
        return $this->belongsTo(Motor_type::class, 'motor_type_id');
    }

    public function motorColour()
    {
        return $this->belongsTo(Motor_colour::class, 'motor_colour_id');
    }
}
