<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAuthSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'akash',
            'email' => 'akashvora11@gmail.com',
            'mobile' => '9638770350',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'text_password' => '12345678',
        ]);
    }
}
