<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;

class TransactionController extends Controller
{
    public function index()
    {

        $transactions = Transaction::all();
        foreach ($transactions as $transaction) {
            $transaction->user = 1;
        }

        return view('transaction.home', compact('transactions'));
    }

    public function save()
    {
        $transactionDate = Carbon::now()->toDateString();
        $transaction = new Transaction();
        $transaction->transactionDate = $transactionDate;
        $transaction->save();
        $cartController = new CartController();
        $cartController->checkout($transaction->id);
        return redirect('/transactions')->with('success', 'Transaction successfully added');
    }
}
