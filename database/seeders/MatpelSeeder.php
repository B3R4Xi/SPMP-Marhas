<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class MatpelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // FAKER 
        $faker = Faker::create('id_ID');
        for($i = 1; $i<=10;$i++){
        //INSERT INTO DB
        DB::table('tbl_mapel')->INSERT([
            'kode_mapel'=>$faker->unique()->randomDigit,
            'nama_mapel'=>$faker->word,
            'tingkat_mapel'=>'10-RPL-1',
            
        ]);
    }
    }
}
