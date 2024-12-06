<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $exist = User::where('email', 'admin@gmail.com')->first();
        if (empty($exist)) {
            User::create([
               'name' => 'Admin',
               'email' => 'admin@gmail.com',
               'password' => Hash::make('Dev11224411')
            ]);
        }
    }
}
