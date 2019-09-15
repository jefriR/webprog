<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
          'name' => 'Darren Cavell',
          'email' => 'darren@mail.com',
          'password' => Hash::make('darren'),
          'role' => 1
        ]);
        factory(User::class)->create([
          'name' => 'Oliver Sebastian',
          'email' => 'oliver@mail.com',
          'password' => Hash::make('oliver'),
          'role' => 1
        ]);
        factory(User::class)->create([
          'name' => 'Jefri Ronaldo',
          'email' => 'jefri@mail.com',
          'password' => Hash::make('darren'),
          'role' => 1
        ]);
    }
}
