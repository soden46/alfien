<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Alfien',
            'email' => 'muhammadalfien12@gmail.com',
            'password' => Hash::make('12345678'),
            'alamat' => 'Wonogiri',
            'no_hp' => '098787876',
            'role' => 'owner',
        ]);
        User::create([
            'nama' => 'Soden',
            'email' => 'soden@owner.com',
            'password' => Hash::make('Soden123'),
            'alamat' => 'Lampung',
            'no_hp' => '098787876s',
            'role' => 'owner',
        ]);
    }
}
