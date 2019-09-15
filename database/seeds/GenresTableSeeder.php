<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Genre::class)->create([
            'name' => 'Fiction'
        ]);

        factory(Genre::class)->create([
            'name' => 'History'
        ]);

        factory(Genre::class)->create([
            'name' => 'Fantasy'
        ]);

        factory(Genre::class)->create([
            'name' => 'Mystery'
        ]);

        factory(Genre::class)->create([
            'name' => 'Novel'
        ]);

        factory(Genre::class)->create([
            'name' => 'Drama'
        ]);

        factory(Genre::class)->create([
            'name' => 'Life'
        ]);
        
        factory(Genre::class)->create([
            'name' => 'Cartoon'
        ]);

        factory(Genre::class)->create([
            'name' => 'Comedy'
        ]);
    }
}
