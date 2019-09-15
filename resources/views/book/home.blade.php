@extends('layout.app')

@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('css/book.home.css')}}">
@endsection

@section('content')

  @if(isset($success))
  <div>{{ $success }}</div>
  @endif

  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Genre</th>
        <th>Author</th>
        <th>Price</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Image</th>
        @if(Session::has('user'))
        @if(Session::get('user')->role == 1)
        <th></th>
        @endif
        @endif
      </tr>
    </thead>
    <tbody>
      @foreach($books as $book)
        <tr>
          <td rowspan="3">{{ $book->name }}</td>
          <td rowspan="3">{{ $book->genre }}</td>
          <td rowspan="3">{{ $book->author }}</td>
          <td rowspan="3">{{ $book->price }}</td>
          <td rowspan="3">{{ $book->description }}</td>
          <td rowspan="3">{{ $book->stock }}</td>
          <td rowspan="3">{{ $book->image }}</td>
          @if(Session::has('user'))
            <td align="center"><a href="{{ url('/cart/insert/'.$book->id) }}">Add to Cart</a></td>
          @if(Session::get('user')->role == 1)
          <td align="center"><a href="{{ route('books.detail', $book->id) }}">Show</a></td>
          @endif
          @endif
        </tr>
        <tr>
          @if(Session::has('user'))
          @if(Session::get('user')->role == 1)
          <td align="center"><a href="{{ route('books.edit', $book->id) }}">Edit</a></td>
          @endif
          @endif
        </tr>
        <tr>
          @if(Session::has('user'))
          @if(Session::get('user')->role == 1)
          <td align="center"><a href="{{ route('books.delete.verify', $book->id) }}">Delete</a></td>
          @endif
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
  {{ $books->links() }}

@endsection