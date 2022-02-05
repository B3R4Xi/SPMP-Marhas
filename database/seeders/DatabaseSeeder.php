<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // LevelSeeder::class,
            // AkunSeeder::class,
            // HariSeeder::class,
            // TingkatSeeder::class,
            JenisMatpelSeeder::class,
            SemesterSeeder::class,
            KelasSeeder::class,
            LabSeeder::class,
            HariSeeder::class,
            WaktuSeeder::class,
            GuruSeeder::class,
            MatpelSeeder::class,
        ]);
    }
}
