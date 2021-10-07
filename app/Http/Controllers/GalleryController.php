<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Bookings;
use Illuminate\Support\Carbon;

class GalleryController extends Controller
{
    public function index(){
        $books = Books::orderBy('created_at', 'DESC')->get();
        $bookings = Bookings::all();

        return view('gallery', compact('books', 'bookings'));
    }

    public function create(){
       
    }

    public function store(Request $request){
        $request->validate([
            'book_id' => 'required',
        ]);
        Bookings::create($request->all());
        return redirect()->back()->with('Status' ,' Uspešno ste poslali zahtev za rezervaciju knjige');
    }
}
