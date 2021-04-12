<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory()->create([
            'name'     => 'Jose',
            'lastname' => 'Era',
            'username' => 'jorfgf',
            'phone'    => '9999999',
            'email'    => 'jorfgfe@gmail.com',
            'password' => bcrypt('12345678')

        ]);
 
    }
}
