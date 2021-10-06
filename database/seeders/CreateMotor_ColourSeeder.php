<?php

namespace Database\Seeders;

use App\Models\Motor_colour;
use Illuminate\Database\Seeder;

class CreateMotor_ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor_colour = [
            [
                'id' => '1',
                'colour' => 'Hitam',
            ],
            [
                'id' => '2',
                'colour' => 'Biru',
            ],
            [
                'id' => '3',
                'colour' => 'Merah',
            ],
            
        ];
  
        foreach ($motor_colour as $key => $value) {
            Motor_colour::create($value);
        }
    }
}
