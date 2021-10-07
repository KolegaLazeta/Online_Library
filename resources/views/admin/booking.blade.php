@extends('layouts.admin')
@section('naslov', 'Rezervacije')
@section('main')


<h4 class="mt-4">Odobreni</h4>
<div class="table-responsive table-responsive-sm table-responsive-lg table-responsive-md">
  <table class="table table-striped">
    <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Ime Korisnika</th>
          <th scope="col">E-mail</th>
          <th scope="col">Knjiga</th>
          <th scope="col">Ukloni</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($accepted as $booking)
      <tr>
        <th scope="row"></th>
        <td>{{$booking->user->name}}</td>
        <td>{{$booking->user->email}}</td>
        <td>{{$booking->book->name}}</td>

      <td>
        <form action="{{route('booking.destroy',$booking->id)}}" method="post">
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

  <h4 class="mt-4">Na Cekanju</h4>
  <div class="table-responsive table-responsive-sm table-responsive-lg table-responsive-md">
<table class="table table-striped" style="paddnig-top:100px">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Ime Korisnika</th>
            <th scope="col">E-mail</th>
            <th scope="col">Knjiga</th>
            <th scope="col"></th>
            <th scope="col">Potvrdi</th>
              <th scope="col">Ukloni</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($bookings as $booking)
      <tr>
        <th scope="row"></th>
        <td>{{$booking->user->name}}</td>
        <td>{{$booking->user->email}}</td>
        <td>{{$booking->book->name}}</td>
  
        
        <form action="{{route('booking.update',$booking->id)}}" method="post">
          @csrf
          @method('put')
        

          <td class="text-center">
              <input type="checkbox" class="form-check-input" name="is_accepted" id="" value="1">
          </td>
          
          <td>
              <button class="btn btn-primary py-1 m-0 text-white" type="submit"><i
                      class="fas fa-check"></i></button>
          </td>
        </form>


      <td>
        <form action="{{route('booking.destroy',$booking->id)}}" method="post">
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

@endsection
