@extends('layouts.blank')

@section('main')  
<div class="album py-5 bg-light" style="margin: 70px; border-radius: 25px">
    <div class="container" style="">

      <div class="row offset-1 pb-5 pl-4" >

        @foreach($books as $book)
        
      
        <div class="pr-5 pb-4" style="">
          <div class="card shadow-sm" >
            <img src="/storage/app/public/upload/{{$book->image}}" width="100%" height="225"  role="img"></img>

            <div class="card-body">
              <h4>{{$book->name}}</h4>
              <p>{{$book->writer}}</p>
              <p class="card-text">{{$book->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group" style="padding-right:10px">



                  @if(auth()->user())

                  <form action="{{route('booking.store')}}" enctype="multipart/form-data" method="post">
                    @csrf   

                      <input name="name" value="{{Auth::user()->name}}" type="hidden">
                      <input name="email" value="{{Auth::user()->email}}" type="hidden">
                      <input name="book_id" value="{{$book->id}}" type="hidden">
                      <input name="user_id" value="{{Auth::user()->id}}" type="hidden">


                      <button type="submit" class="btn btn-sm btn-outline-secondary">Rezervisi</button>

                  </form>

                  @else
                  <a href="/"><button type="button" class="btn btn-sm btn-outline-secondary">Rezervisi</button></a>
                  @endif
                
                </div>
                <small class="text-muted">{{$book->created_at}}</small>
              </div>
            </div>

          </div>
        </div>
    
    
        @endforeach
        
        
    </div>
  </div>
</div>
</main>

@endsection