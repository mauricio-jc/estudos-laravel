<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'uuid' => Uuid::uuid4(),
            'name' => 'Fulano',
            'email' => 'fulano@email.com',
            'password' => bcrypt(1234567),
        ]);
    }
}
