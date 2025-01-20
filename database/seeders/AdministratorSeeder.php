<?php

namespace Database\Seeders;

use App\Models\Administrator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Administrator::create([
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@defood.com',
            'password' => Hash::make('admin123'),
        ]);
        Administrator::create([
            'id' => 2,
            'name' => 'Denny Firmansyah',
            'email' => 'dennykunn@gmail.com',
            'password' => Hash::make('denny123'),
        ]);
    }
}
