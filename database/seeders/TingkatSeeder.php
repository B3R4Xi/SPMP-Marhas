<?php

namespace Database\Seeders;

use App\Models\Tingkat_Mapel;
use Illuminate\Database\Seeder;

class TingkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tingkat = [
            [
                'tingkat_mapel'      => 'X RPL',            
            ],[
                'tingkat_mapel'      => 'XI RPL',            
            ],[
                'tingkat_mapel'      => 'XII RPL',            
            ]
            ];
            foreach ($tingkat as $key => $value) {
                Tingkat_Mapel::create($value);
            }
    }
}
