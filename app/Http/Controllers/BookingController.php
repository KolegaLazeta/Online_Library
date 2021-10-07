<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Models\Books;

class BookingController extends Controller
{
    public function index()
    {
       
        $bookings = Bookings::select('*')->
        where('is_accepted',false)
        ->orderBy('created_at')->paginate(10);

        $accepted = Bookings::select('*')->
        where('is_accepted',true)
        ->orderBy('created_at')->paginate(10);

        return view('admin.booking', compact('bookings', 'accepted'));
    }


    public function update(Request $request, Bookings $booking)
    {
        $booking->update($request->all());
        return redirect()->back();
    }

    public function destroy(Bookings $booking)
    {
        $booking -> delete();
        return redirect()->back();
    }
}
