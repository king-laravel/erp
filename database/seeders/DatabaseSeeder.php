<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\Admin::create([
            'name'=>'Admin',
            'username' => 'Admin',
            'email' => '1901199m@gmail.com',
            'password'=>bcrypt('190119911'),
            'com_code' => 1
        ]);
    }
}
