<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::factory()->create([
            'name' => 'Luis Antonio Parrado',
            'email' => 'luisprmat@gmail.com',
            'password' => '$2y$10$M8awRk6shZm.6MFPkZIovelh0zEk8mF24y9.HJSCiTptTh86KxWt.', //lpklprplus
        ]);

        $team = Team::create([
            'name' => 'Equipo de '. $admin->name,
            'user_id' => $admin->id,
            'personal_team' => true
        ]);

        $admin->update([
            'current_team_id' => $team->id
        ]);

        User::factory()->count(10001)->create();
    }
}
