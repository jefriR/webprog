@extends('layout.app')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/book.detail.css') }}">
@endsection

@section('content')
	<div class="book-details">
		<div class="s1">
			<div class="details">
				<div class="details-primary">
					<h2 class="details-price">IDR. {{ $book['price'] }}</h2>
					<h2 class="details-stock">{{ $book['stock'] }} left</h2>
					<h2 class="details-rating">{{ $book['rating'] }}★</h2>
				</div>
				<h1 class="details-title">{{ $book['name'] }}</h1>
				<p><strong>Description:</strong> {{ $book['description'] }}</p>
				<p><strong>Genre:</strong> {{ $book['genre'] }}</p>
				<p><strong>Author:</strong> {{ $book['author'] }}</p>
			</div>
		</div>
		<div class="s2">
			<img src="{{ asset('storage/'.$book['image']) }}">
		</div>
	</div>
@endsection