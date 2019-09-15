@if(isset($success))
    <div>{{ $success }}</div>
@endif

<table>
    <tr>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Qty</th>
    </tr>
    @php $totalPrice = 0;@endphp
    @foreach($carts as $cart)
        @php
            $bookController = new \App\Http\Controllers\BookController();
            $book = $bookController->findById($cart->book_id);
        $totalPrice += $cart->price;
        @endphp
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->image }}</td>
            <td>{{ $cart->price }}</td>
            <td>{{ $cart->qty }}</td>
        </tr>
    @endforeach
    <td colspan="10">{{$totalPrice}}</td>
    <a href="{{route('transaction.insert')}}">Checkout</a>
</table>