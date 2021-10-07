@extends('layouts.admin')
@section('naslov', 'Knjige')
@section('main')

<div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Naziv Knjige</th>
                <th scope="col">Deskripcija</th>
                <th scope="col">Link</th>
                <th scope="col"></th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($books as $book)
          <tr>
            <th scope="row"></th>
            <td>{{$book->name}}</td>
            <td>{{$book->description}}</td>
            <td>{{$book->url}}</td>
            <td>
              <form action="{{route('book.destroy',$book)}}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger py-1 m-0 text-white" type="submit"><i
                          class="fas fa-trash    "></i></button>
              </form>
          </td>
        
          </tr>
          @endforeach
        </tbody>
      </table>
   

</div>

@endsection

