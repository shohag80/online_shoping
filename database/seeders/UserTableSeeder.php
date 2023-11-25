<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name'=>'Md. Shohag Hosssain',
            'role'=>'Admin',
            'phone'=>'+8801975134225',
            'email'=>'mdshohaghossain8080@gmail.com',
            'password'=>bcrypt('019751342256'),
            'photo'=>'Admin_Photo.jpg',
        ]);
    }
}
