<?php

use App\Cart;
use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cart::class)->create([
            "user_id" => 1,
            "book_id" => 2,
            "qty" => 1,
            "price" => 250000,
            "transaction_id" => 1
        ]);

        factory(Cart::class)->create([
            "user_id" => 1,
            "book_id" => 3,
            "qty" => 1,
            "price" => 37500,
            "transaction_id" => 1
        ]);

        factory(Cart::class)->create([
            "user_id" => 1,
            "book_id" => 4,
            "qty" => 1,
            "price" => 100000,
            "transaction_id" => 1
        ]);

        factory(Cart::class)->create([
            "user_id" => 1,
            "book_id" => 5,
            "qty" => 1,
            "price" => 200000,
            "transaction_id" => 1
        ]);
    }
}
