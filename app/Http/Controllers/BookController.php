<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{



    public function create()
    {
        return view('book.create');
    }


    public function index()
    {
        $books = Book::all();
        return view('book.index',compact('books'));
    }


    public function store(Request $request, $data)
    {
       /* $validated = $request->validate([
            'title' => 'required|max100',
            'author' => 'required|min:5|max100',
            'category_id' => 'required|exists:categories,id',
            'image' =>'required|mimes:jpeg,jpg,png|max:2048',
            'src' => 'required|file|mimetypes:application/pdf|max10240',
        ]);
        if ($request->hasFile('image')) {
            $data ['image'] = $request->file('image')->store('books', 'public');
        }
        if ($request->hasFile('image')) {
            $data ['src'] = $request->file('src')->store('books', 'public');
        }  */

        Book::create($data);
       dd(request()->all());
    }
    public function show(Book $book)
    {
        return view('book.show',compact('book'));
    }

    public function edit(Book $book)
    {
        $book = Book::all();
        return view('book.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('book.index');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }



}
