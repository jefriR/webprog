<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $carts = Cart::where('transaction_id', null)->get();
        return view('cart.home', compact('carts'));
    }

    public function insert($bookId)
    {
        $bookController = new BookController();
        $book = $bookController->findById($bookId);
        return view('cart.book-cart-detail', compact('book'));
    }

    public function save(Request $request)
    {
        $bookController = new BookController();
        $book = $bookController->findById($request->bookId);
        $cart = new Cart();
        $cart->book_id = $request->bookId;
        $cart->qty = $request->qty;
        $cart->user_id = Auth::user()->id;
        $cart->price = ($cart->qty * $book->price);
        $cart->save();
        return route('cart');
    }

    public function findAll($transactionId)
    {
        return Cart::where('transaction_id', $transactionId)->get();
    }


    public function checkout($transactionId)
    {
        $carts = Cart::where('transaction_id', null)->get();
        foreach ($carts as $cart) {
            $cart->transaction_id = $transactionId;
            $cart->save();
        }
    }
}
