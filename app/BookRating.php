<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookRating extends Model
{
    protected $table = 'books_rating';
    
    public function getRating($bookId)
    {
        $listOfRatings = $this->where('book_id', $bookId)->get();
        $ratingCount = $listOfRatings->count();
        $totalRating = 0;
        foreach ($listOfRatings as $each_rating) {
            $totalRating += $each_rating->rating;
        }
        $ratings = [
            $ratingCount, $totalRating
        ];
        return $ratings;
    }
}
