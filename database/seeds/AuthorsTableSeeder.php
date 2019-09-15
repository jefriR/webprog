<?php

use Illuminate\Database\Seeder;
use App\Author;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Author::class)->create([
        	'name' => 'Engelbert Humperdinck',
        	'dob' => '2/6/1936',
        	'country' => 'America'
        ]);

        factory(Author::class)->create([
        	'name' => 'Jeffrey Archer',
        	'dob' => '15/4/1940',
        	'country' => 'England'
        ]);

        factory(Author::class)->create([
        	'name' => 'Ian McPhedran',
        	'dob' => '3/6/1957',
        	'country' => 'Australia'
        ]);

        factory(Author::class)->create([
          'name' => 'Darren C', 
          'dob' => '12/06/1998', 
          'country' => 'China'
        ]);

        factory(Author::class)->create([
          'name' => 'Jefri R', 
          'dob' => '13/04/1998', 
          'country' => 'Australia'
        ]);

        factory(Author::class)->create([
          'name' => 'Darez A', 
          'dob' => '05/03/1998', 
          'country' => 'Chile'
        ]);

        factory(Author::class)->create([
          'name' => 'Oliver S', 
          'dob' => '12/10/1997', 
          'country' => 'New Zealand'
        ]);
            
    }
}
