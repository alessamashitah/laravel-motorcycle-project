<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'motor_type_id',
    ];

    public function motorcycles()
    {
        return $this->hasMany(Motorcycle::class);
    }
}
