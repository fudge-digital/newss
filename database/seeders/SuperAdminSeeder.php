<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::updateOrCreate(
            ['email' => 'satriobudyo.id@gmail.com'],
            [
                'name' => 'Super Satrio',
                'password' => Hash::make('2025selalusukses_11M#'),
                'role' => 'super_admin',
                'is_active' => true,
            ]
        );
    }
}
