<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'C5b6U@example.com',
            'password' => bcrypt('password'),
            'role' => 'admin',
            'telepon' => '081234567890',
            'alamat' => 'Jl. Jalanan Jalanan',
        ]);

        User::create([
            'name' => 'Petugas',
            'email' => '2HlJg@example.com',
            'password' => bcrypt('password'),
            'role' => 'petugas',
            'telepon' => '081234567890',
            'alamat' => 'Jl. Jalanan Jalanan',
        ]);

        User::create([
            'name' => 'Peminjam',
            'email' => 'NjJXa@example.com',
            'password' => bcrypt('password'),
            'role' => 'peminjam',
            'telepon' => '081234567890',
            'alamat' => 'Jl. Jalanan Jalanan',
        ]);
    }
}
