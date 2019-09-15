<?php

use App\Transaction;
use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Transaction::class)->create([
            "transactionDate" => "2018 June 06"
        ]);
    }
}
