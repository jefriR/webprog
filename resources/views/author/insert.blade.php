@extends('layout.app')

@section('css')
@endsection

@section('content')
	<form method="POST" enctype="multipart/form-data" action="{{ route('authors.insert.verify') }}">
	    {{ @csrf_field() }}
	    @foreach($errors->all() as $error)
	        <div>{{ $error }}</div>
	    @endforeach
	    <input type="hidden" name="id">

	    <div class="form-group">
		    <label for="">Author Name</label>
		    <input type="text" name="name" class="form-control">
		  </div>

	    <div class="form-group">
	    	<input type="submit" value="Insert Author" class="btn btn-primary">
		  </div>
	</form>
@endsection