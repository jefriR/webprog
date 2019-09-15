<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::paginate(8);
        return view('genre.home', compact('genres'));
    }

    public function insert()
    {
        return view('genre.insert');
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        $rules = $this->getValidationRules();

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        $genre = Genre::find($id);
        $this->saveGenre($genre, $request);

        return view('genre.home')->with('success', 'Genre has been edited');
    }

    /**
     * @return array
     */
    private function getValidationRules(): array
    {
        $rules = [
            'name' => 'required | unique | min:5'
        ];
        return $rules;
    }

    /**
     * @param Request $request
     */
    private function saveGenre(Genre $genre, Request $request)
    {
        $genre->name = $request->name;
        $genre->save();
    }

    public function delete($id)
    {
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->back()->with('success', 'Genre has been deleted');
    }

    public function store(Request $request)
    {
        $rules = $this->getValidationRules();

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return redirect()->back()->withErrors($validator->errors());

        $genre = new Genre();
        $this->saveGenre($genre, $request);

        return view('genre.home')->with('success', 'Genre has been added');
    }
}
