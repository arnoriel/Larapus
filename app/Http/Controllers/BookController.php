<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\author;
use Illuminate\Http\Request;
use Alert;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=Book::all();
        return view ('admin.book.index', compact ('book'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $author=Author::all();
        return view ('admin.book.create', compact ('author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'amount' => 'required',
            'cover' => 'required',
        ]);

        $book = new book;
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->amount= $request->amount;
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/larapus/', $name);
            $book->cover = $name;
        }
        $book->save();
        Alert::success('Buku Berhasil di Tambah', 'Buku sudah masuk Database');
        return redirect('/administrator/book');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author=Author::all();
        $book = Book::findOrFail($id);
        return view('admin.book.show', compact('book', 'author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author=Author::all();
        $book = Book::findOrFail($id);
        return view('admin.book.edit', compact('book', 'author'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          //validasi data
        $validated = $request->validate([
            'title' => 'required',
            'author_id' => 'required',
            'amount' => 'required',
            'cover' => 'required',
        ]);

        $book = book::findOrFail($id);
        $book->title = $request->title;
        $book->author_id = $request->author_id;
        $book->amount= $request->amount;
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/larapus/', $name);
            $book->cover = $name;
        }
        $book->save();
        Alert::success('Buku Berhasil Ditambah', 'Buku sudah masuk Database');
        return redirect('/administrator/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        Alert::success('Buku Berhasil Dihapus', 'Buku Telah dihapus dari Database');
        return redirect()->route('book.index');
    }
}