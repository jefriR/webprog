@extends('layout.app')

@section('css')
	<link rel="stylesheet" href="{{asset('')}}">
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
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->id }}</td>
                <td>{{ $author->name }}</td>
                <td><a href="{{ route('authors.edit', $author->id) }}">Update</a></td>
                <td><a href="{{ route('authors.delete.verify', $author->id) }}">Remove</a></td>
            </tr>
        @endforeach
    </table>
    {{ $authors->links() }}
@endsection