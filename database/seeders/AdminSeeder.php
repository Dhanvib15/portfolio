<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'dhanvibhadiyadra15@gmail.com',
        ], [
            'name' => 'Dhanvi Bhadiyadra',
            'email' => 'dhanvibhadiyadra15@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
