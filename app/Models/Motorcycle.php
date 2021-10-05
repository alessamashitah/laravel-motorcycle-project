<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'type',
        'colour',
    ];

    public function Users()
    {
        return $this->hasMany(User::class);
    }
}
