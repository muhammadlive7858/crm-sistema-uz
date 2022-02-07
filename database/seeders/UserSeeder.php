<?php

namespace Database\Seeders;
use \App\Models\User;
use Hash;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'muhammad',
                'email'=>'muhammad@gmail.com',
                'parol'=>Hash::make('muhammad')  
            ]
        ];
    }
}
