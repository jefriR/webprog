<table>
    <tr>
        <th>Name</th>
        <th>Genre</th>
        <th>Author</th>
        <th>Price</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Rating</th>
    </tr>
    <tr>
        <td>{{ $book->name }}</td>
        <td>{{ $book->genre }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->price }}</td>
        <td>{{ $book->description }}</td>
        <td>{{ $book->stock }}</td>
        <td><img src="{{ asset('storage/'.$book->image) }}"></td>
        <td>{{ $book->rating }}</td>
    </tr>
</table>

<form action="{{route('cart.insert.verify')}}" method="POST">
    {{ @csrf_field() }}
    <input type="hidden" value="{{$book ->id}}" id="bookId" name="bookId">
    <div>
        <label for="qty">Qty : </label>
        <input type="number" name="qty" id="qty">
    </div>
    <div>
        <input type="submit" value="Add to Cart" class="btn btn-primary">
    </div>
</form>