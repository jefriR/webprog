@extends('layout.app')

@section('css')

@endsection

@section('content')
	<form method="POST" enctype="multipart/form-data" action="{{ route('genres.insert.verify') }}">
	    {{ @csrf_field() }}
	    @foreach($errors->all() as $error)
	        <div>{{ $error }}</div>
	    @endforeach
	    <input type="hidden" name="id">

	    <div class="form-group">
		    <label for="">Genre Name</label>
		    <input type="text" name="name">
			</div>

			<div>
		    <input type="submit" value="Insert Genre" class="btn btn-primary">
		  </div>
	</form>
@endsection