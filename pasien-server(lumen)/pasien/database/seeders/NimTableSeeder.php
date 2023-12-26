<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class NimTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::create([
            'name' => 'G.211.21.0054',
            'email' => 'G.211.21.0054@gmail.com',
            'password' => Hash::make('admin')
        ]);
    }
}
