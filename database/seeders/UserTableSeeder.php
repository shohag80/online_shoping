<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Md. Shohag Hosssain',
            'role'=>'Manager',
            'phone'=>'01975134225',
            'email'=>'mdshohaghossain8080@gmail.com',
            'password'=>bcrypt('808080'),
            'photo'=>'Admin Photo',
        ]);
    }
}
