<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $level = [
            [
                'level' => 'admin'
            ],
            [
                'level' => 'guru'
            ]
        ];
        foreach ($level as $key => $value) {
            Level::create($value);
        }
    }
}
