<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
          'name' => 'Bernardus Kurnia',
          'email' => 'bernardus@mail.com',
          'password' => Hash::make('bernardus'),
          'role' => 0
        ]);
        factory(User::class)->create([
          'name' => 'Ricky Marten',
          'email' => 'ricky@mail.com',
          'password' => Hash::make('ricky'),
          'role' => 0
        ]);
        factory(User::class)->create([
          'name' => 'Grisviany',
          'email' => 'grisviany@mail.com',
          'password' => Hash::make('grisviany'),
          'role' => 0
        ]);
    }
}
