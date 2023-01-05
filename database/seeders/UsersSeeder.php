<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ADM',
            'email' => 'sebasloes369@gmail.com',
            'matricula' => 'administrador',
            'id_user' => 1,
            'password' => bcrypt('horariosabc'),
        ]);
    }
}
