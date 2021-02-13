<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Book;
use App\Models\Subscription;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bookDetails = Book::all();
        return view('home')->with('bookDetails', $bookDetails);
    }
    public function subscribeBook($id)
    {
        
        $userid = Auth::user()->id;
        $bookid = $id;

        $subscription = new Subscription;
        $subscription->userid = $userid;
        $subscription->bookid = $bookid;

        $subscription->save();
        return redirect('/home')->with('status', 'Book Subscribed Successfully');
    }
}
