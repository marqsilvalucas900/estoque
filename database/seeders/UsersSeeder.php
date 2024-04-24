<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'firstName' => 'Rodrigo',
            'lastname' => 'Oliveira',
            'email' => 'contato@rodrigo.com',
            'password' => bcrypt('12345678'),

        ]);
    }
}
