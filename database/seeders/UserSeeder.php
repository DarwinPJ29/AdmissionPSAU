<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userId = Str::ulid(); // Generate ULID for user

        DB::table('users')->insert([
            'id' => $userId,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'activated' => true,
            'role' => 1,
            'form_done' => false,
            'requirements_done' => false,
            'requirements_remarks' => null,
            'schedule_done' => false,
            'score_done' => false,
            'evaluation' => false,
            'mail_done' => false,
            'status' => 0,
            'is_default_pass' => false,
            'isPrivacy' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Create associated information for the user
        $informationId = Str::ulid(); // Generate ULID for information

        DB::table('information')->insert([
            'id' => $informationId,
            'user_id' => $userId,
            'prefix' => '',
            'first_name' => 'Admin',
            'middle_name' => 'Doe',
            'last_name' => 'Smith',
            'suffix' => null,
            'citizenship' => 'Filipino',
            'province_id' => 1,
            'municipality_id' => 1,
            'barangay_id' => 1,
            'gender' => 'Male',
            'age' => 30,
            'number' => '09123456789',
            'birth_date' => '1993-01-01',
            'birth_place' => 'City of Example',
            'religion' => 'Christianity',
            'civil_status' => 'Single',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
