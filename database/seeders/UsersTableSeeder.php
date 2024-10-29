<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Odi Adrian',
            'email' => 'Odi@gmail.com',
            'umur' => '20',
            'alamat' => 'tataan',
            'password' => Hash::make('123123'),
        ]);
    }
}
