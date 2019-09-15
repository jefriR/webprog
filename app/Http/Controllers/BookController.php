<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use App\BookRating;
use App\Genre;
use App\Page;
use App\Rules\NumberMinimumRule;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Storage;
use Validator;

class BookController extends Controller
{

	public function __construct(){
		// $this->middleware();
	}

    public function index(){
        $books = Book::paginate(8);
        return view('book.home', compact('books'));
    }

    public function findById($bookId)
    {
        return Book::where('id', $bookId)->first();
    }

    public function insert()
    {
        $genres = Genre::all();
        $authors = Author::all();
        return view('book.insert')->with('genres', $genres)->with('authors', $authors);
    }

    public function show($id)
    {
        $get_book = Book::find($id);
        $bookRating = new BookRating();
        $book = [
            'name' => $get_book->name,
            'genre' => $get_book->genre,
            'author' => $get_book->author,
            'price' => $get_book->price,
            'description' => $get_book->description,
            'stock' => $get_book->stock,
            'image' => $get_book->image,
            'rating' => $bookRating->getRating($id)[1]
        ];
        return view('book.detail')->with('book', $book);
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('book.edit')->with('book', $book);
    }

    public function update(Request $request)
    {
        $rules = $this->getValidationRule();

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        $book_id = $request->id;
        $book = Book::find($book_id);
        $this->saveBookData($book, $request);
		return redirect('/')->with('success', 'Book has been updated');
    }

    /**
     * @return array
     */
    private function getValidationRule(): array
    {
        $rules = [
            'name' => 'min:3 | required',
            'genre' => 'required',
            'author' => 'required',
            'price' => 'integer | required',
            'price' => new NumberMinimumRule(5000),
            'description' => 'between:20,200 | required',
            'stock' => 'required | integer',
            'stock' => new NumberMinimumRule(0),
            'image' => 'mimes:jpeg,jpg,png | required',
        ];
        return $rules;
    }

    /**
     * @param Request $request
     */
    private function saveBookData(Book $book, Request $request)
    {
        $book->name = $request->name;
        $book->genre = $request->genre;
        $book->author = $request->author;
        $book->price = $request->price;
        $book->description = $request->description;
        $book->stock = $request->stock;
				$filename = $request->file('image')->getClientOriginalName();
				Storage::putFileAs('public', $request->file('image'), $filename);
        $book->image = $filename;
        $book->save();
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return view('book')->with('success', 'Book has been deleted');
    }

    public function store(Request $request)
    {
        $rules = $this->getValidationRule();

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $book = new Book();
        $this->saveBookData($book, $request);
        return redirect('/')->with('success', 'Book has been added');
        
    }

}
