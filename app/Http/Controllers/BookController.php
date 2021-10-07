<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\User;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\Bookings;

class BookController extends Controller
{
    public function books(){
        $bookings = auth()->user()->bookings()->latest()->get();
        $books = Books::all();
    
        return view('books', compact('bookings', 'books'));
    
        }
    
        public function index(){
    
            $books = Books::all();
    
            
            return view('admin.books', compact('books'));
        }
    
    
        public function create()
        {
            return view('admin.create');
        }
    
        public function store(Request $request){
    
            $request ->validate([
                'name' => 'required',
                'description'=>'required',
                'url'=>'required',
                'writer' => 'required',
                'image'=>['required', 'image']
            ]);
    
            $data = $request->all();
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/storage/app/public/upload'), $imageName);
            $data['image'] = $imageName;

            Books::create($data);
   
        
            return redirect(url('/admin'));
            }   
    
            public function destroy(Books $book)
            {
                $book->delete();
                return redirect()->back();
            }
}
