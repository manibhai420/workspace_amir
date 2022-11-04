<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Amir Fayyaz', 'email'=>'rehmanofficial100@gmail.com', 'type'=>'1', 'password'=>bcrypt('123456')]);
        User::create(['name'=>'Amir', 'email'=>'rehmanoficial100@gmail.com', 'type'=>'2', 'password'=>bcrypt('123456')]);

            User::factory(10)->create();

            User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'type' => '0',
            'password' => bcrypt('123456')
        ]);




    }
}
