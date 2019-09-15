@extends('layout.app')

@section('css')

@endsection

@section('content')
	<form method="POST" enctype="multipart/form-data" action="{{ route('books.edit.verify') }}">
		{{ @csrf_field() }}
	  @foreach($errors->all() as $error)
	      <div>{{ $error }}</div>
	  @endforeach

		<h2>Edit Book - {{ $book->name }}</h2>

    <div class="form-group">
			<input type="hidden" name="id" value="{{ $book->id }}" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Book Name</label>
			<input type="text" name="name" value="{{ $book->name }}" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Genre</label>
			<input type="text" name="genre" value="{{ $book->genre }}" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Author</label>
			<input type="text" name="author" value="{{ $book->author }}" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Price</label>
			<input type="text" name="price" value="{{ $book->price }}" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Description</label>
			<textarea name="description" class="form-control">{{ $book->description }}</textarea>
		</div>

    <div class="form-group">
			<label for="">Stock</label>
			<input type="text" name="stock" value="{{ $book->stock }}" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Picture</label>
			<input type="file" name="image" class="form-control">
		</div>

    <div class="form-group">
			<input type="submit" value="Update Book" class="btn btn-primary">
		</div>
	</form>
@endsection