@extends('layouts.blank')
@section('main')
<div class="pb-5"></div>
<div class="container"style="padding-top:100px; padding-bottom:100px; background-color:#fff; border-radius:25px">
    
    <form action="{{route('booking.store')}}" enctype="multipart/form-data" method="post">
        @csrf   
        

            <div class="row">
            
            <div class="col-8 offset-2">
                <div class="row">
                    <h2 class="pb-3"> Rezervisite knjigu </h2>
                </div>
                <input type="hidden" value="@if(auth()->user()){{ auth()->user()->id }} @endif" name="user_id">
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Ime i Prezime</label>
    
                    @if(auth()->user())
                    <input id="name" type="name" placeholder="Petar Petrovic" class="form-control @error('name') is-invalid @enderror" 
                    name="name" 
                   
                    value="{{ old('name') }}"  
                    autocomplete="name" autofocus>
    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    @endif
                </div>

                

                <div class="form-group row">
                    <label for="number" class="col-md-4 col-form-label">Broj telefona</label>
    
                    
                    <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" 
                    name="number" 
                    placeholder="+381 64 100000"
                    
                    value="{{ old('number') }}"  
                    autocomplete="number" autofocus>
    
                    @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label class="pr-2" for="">Izaberite knjigu</label>
                            <select name="book_id"  style="height:30px; " class="form-select @error('book_id')
                            is-invalid
                        @enderror">
                                @foreach ($books as $book)
                                @if(!$book->extra)
                                    <option value="{{$book->id}}">{{$book->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>



                <div class="form-group pt-4 text-center">
                    <button type="submit" class= "btn btn-danger">Rezervisi</button>
                </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="pt-5"></div>
@endsection