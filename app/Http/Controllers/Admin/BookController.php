<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    //
    public function getAllbooks(){

    	$bookDetails = Book::all();
    	return view('admin.book.books')->with('bookDetails', $bookDetails);
    }
    public function addBook(){

    	return view('admin.book.addbook');
    }
    public function editBook($id){

    	$bookDetails = Book::findOrFail($id);
    	return view('admin.book.editbook')->with('bookDetails', $bookDetails);
    }
    public function updateBook(Request $request, $id)
    {
    	$bookDetails = Book::find($id);
    	$bookDetails->book_title = $request->input('book_title');
    	$bookDetails->author_name = $request->input('author_name');
        $bookDetails->isbn_number = $request->input('isbn_number');
        $bookDetails->description = $request->input('description');

    	$bookDetails->update();
    	return redirect('/books')->with('status', 'Book Details Updated');
    }

    public function createBook(Request $request)
    {
    	
    	$bookDetails = new Book;
    	$bookDetails->book_title = $request->input('book_title');
    	$bookDetails->author_name = $request->input('author_name');
    	$bookDetails->isbn_number = $request->input('isbn_number');
        $bookDetails->description = $request->input('description');

    	$bookDetails->save();
    	return redirect('/books')->with('status', 'Data Added Successfully');
    }
    public function deleteBook($id)
    {
    	$bookDetails = Book::findOrFail($id);

    	$bookDetails->delete();
    	return redirect('/books')->with('status', 'Book Entry Deleted');
    }
}
