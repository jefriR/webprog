@extends('layout.app')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('css/genre.home.css')}}">
@endsection

@section('content')
    @if(isset($success))
        <div>{{ $success }}</div>
    @endif

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach($genres as $genre)
            <tr>
                <td>{{ $genre->id }}</td>
                <td>{{ $genre->name }}</td>
                <td><a href="{{ route('genres.edit', $genre->id) }}">Update</a></td>
                <td><a href="{{ route('genres.delete.verify', $genre->id) }}">Remove</a></td>
            </tr>
        @endforeach
    </table>
    {{ $genres->links() }}
@endsection