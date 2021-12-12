<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $semester = [
            [
                'semester' => 'Ganjil',
            
            ],[
                'semester' => 'Genap',
            
            ]
            ];
            foreach ($semester as $key => $value) {
                Semester::create($value);
            }
    }
    
}
