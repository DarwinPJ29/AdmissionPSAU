<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(
            [
                'id' => Str::ulid(),
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'activated' => '1',
                'role' => '1',
            ],

        );

        Information::create(
            [
                'user_id' => $admin['id'],
                'first_name' => 'Gemmarie',
                'middle_name' => '',
                'last_name' => '',

            ],
        );
    }
}
