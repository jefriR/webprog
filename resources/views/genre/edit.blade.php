@extends('layout.app')

@section('css')

@endsection

@section('content')
	<form method="POST" enctype="multipart/form-data" action="{{ route('genres.edit.verify') }}">
	    {{ @csrf_field() }}
	    @foreach($errors->all() as $error)
	        <div>{{ $error }}</div>
	    @endforeach

			<h2>Edit Genre - {{ $genre->name }}</h2>
	    <input type="hidden" name="id" value="{{ $genre->id }}">

    	<div class="form-group">
		    <label for="">Genre Name</label>
		    <input type="text" name="name" value="{{ $genre->name }}" class="form-control">
	    </div>

    	<input type="submit" value="Update Genre" class="btn btn-primary">
	</form>
@endsection