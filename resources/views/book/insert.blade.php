@extends('layout.app')

@section('css')

@endsection

@section('content')
	<form method="POST" enctype="multipart/form-data" action="{{ route('books.insert.verify') }}">
		{{ @csrf_field() }}
	  @foreach($errors->all() as $error)
	      <div>{{ $error }}</div>
	  @endforeach

		<h2>Insert Book</h2>
		<input type="hidden" name="id">

    <div class="form-group">
			<label for="">Book Name</label>
			<input type="text" class="form-control" name="name">
		</div>

    <div class="form-group">
			<label for="">Genre</label>
			<select name="genre" class="form-control">
				@foreach($genres as $genre)
					<option value="{{$genre->name}}">{{$genre->name}}</option>
				@endforeach
			</select>
		</div>

    <div class="form-group">
			<label for="">Author</label>
			<select name="author" class="form-control">
				@foreach($authors as $author)
					<option value="{{$author->name}}">{{$author->name}}</option>
				@endforeach
			</select>
		</div>

    <div class="form-group">
			<label for="">Price</label>
			<input type="text" name="price" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Description</label>
			<textarea name="description" class="form-control"></textarea>
		</div>

    <div class="form-group">
			<label for="">Stock</label>
			<input type="text" name="stock" class="form-control">
		</div>

    <div class="form-group">
			<label for="">Picture</label>
			<input type="file" name="image" class="form-control">
		</div>

		<div>
	  	<input type="submit" value="Insert Book" class="btn btn-primary">
		</div>
	</form>
@endsection