<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'name' => 'Admin',
            'email' => 'giordani.santos.silveira@gmail.com',
            'password' => bcrypt('Dani@war13'),
            'email_verified_at' => now(),
            'is_admin' => true
        ]);
    }
}
