<?php

namespace Database\Seeders;

use App\Models\Admin;
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
        Admin::create([
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@defood.com',
            'password' => Hash::make('admin123'),
        ]);
        Admin::create([
            'id' => 2,
            'name' => 'Denny Firmansyah',
            'email' => 'dennykunn@gmail.com',
            'password' => Hash::make('denny123'),
        ]);
    }
}
