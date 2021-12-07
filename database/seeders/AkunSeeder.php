<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            [
                'name'      => 'admin',
                'email'     => 'admin@mail.com',
                'password'   => bcrypt('12345678'),
                'level'     => '1',
            
            ]
            ];
            foreach ($users as $key => $value) {
                User::create($value);
            }
        }
}
