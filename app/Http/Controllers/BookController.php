<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function all() {
        $booksArr = Book::all();
        return $booksArr;
    }

    public function add(Request $request) {
        $book = new Book;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->availability = false;
        $vote->save();
        return back();
    }

    public function delete($id) {
        Book::destroy($id);
        return back();
    }

    public function changeAvailability($id) {
        $book = Book::find($id);
        $book->availability = ($book->availability ? false : true);
        $book->save();
        return back();
    }
}
