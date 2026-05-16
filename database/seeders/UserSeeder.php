<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Fulano de Tal',
            'email' => 'fulano@example.com',
            'password' => '123456'
        ]);
    }
}
