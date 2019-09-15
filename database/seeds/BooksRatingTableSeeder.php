<?php

use Illuminate\Database\Seeder;
use App\BookRating;

class BooksRatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(BookRating::class)->create([
          'book_id' => 1, 
          'user_id' => 1, 
        	'rating' => 4.5
        ]);

        factory(BookRating::class)->create([
          'book_id' => 2, 
          'user_id' => 1, 
        	'rating' => 4.39
        ]);

        factory(BookRating::class)->create([
          'book_id' => 3, 
          'user_id' => 1, 
        	'rating' => 3.24
        ]);

        factory(BookRating::class)->create([
          'book_id' => 4, 
          'user_id' => 1, 
          'rating' => 3.89
        ]);
        
        factory(BookRating::class)->create([
          'book_id' => 5, 
          'user_id' => 1, 
          'rating' => 2.73
        ]);

        factory(BookRating::class)->create([
          'book_id' => 6, 
          'user_id' => 1, 
          'rating' => 1.67
        ]);
        
        factory(BookRating::class)->create([
          'book_id' => 7, 
          'user_id' => 1, 
          'rating' => 2.67
        ]);

    }
}
