<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Motorcycle extends Model implements Auditable
{
    use HasFactory;

    use \OwenIt\Auditing\Auditable;

    protected $fillable = [
        'id',
        'motor_type_id',
        'motor_colour_id',
        'image',
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
