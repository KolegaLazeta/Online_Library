<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsTo('App\Models\Books', 'book_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    protected $fillable = [ 'name','email', 'user_id', 'book_id', 'is_accepted'];
}
