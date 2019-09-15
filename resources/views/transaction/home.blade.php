{{--<a href="{{ route('transaction.insert') }}">Create Transaction</a>--}}

@if(isset($success))
    <div>{{ $success }}</div>
@endif

<table>
    <tr>
        <th>Transaction ID</th>
        <th>Transaction Date</th>
        <th>User</th>
        <th>Items</th>
    </tr>
    @foreach($transactions as $transaction)
        <tr>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->transactionDate }}</td>
            <td>{{ $transaction->user }}</td>
            <td>
        @php
            $cartController = new \App\Http\Controllers\CartController();
            $carts = $cartController->findAll($transaction->id);
        @endphp
        @foreach($carts as $cart)
            @php
                $bookController = new \App\Http\Controllers\BookController();
                $book = $bookController->show($cart->book_id);
            @endphp
            <tr>
                <td>{{$book->name}}</td>
                <td>{{$cart->price}}</td>
                <td>{{$cart->qty}}</td>
            </tr>
            @endforeach
            </td>
            </tr>
        @endforeach
</table>
{{--{{ $transactions->links() }}--}}