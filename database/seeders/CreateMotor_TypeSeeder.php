<?php

namespace Database\Seeders;

use App\Models\Motor_type;
use Illuminate\Database\Seeder;

class CreateMotor_TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor_type = [
            [
                'id' => '1',
               'type' => 'Suzuki',
            ],
            [
                'id' => '2',
               'type' => 'Honda',
            ],
            [
                'id' => '3',
               'type' => 'Waisuku',
            ],

            
        ];
  
        foreach ($motor_type as $key => $value) {
            Motor_type::create($value);
        }
    }
}
