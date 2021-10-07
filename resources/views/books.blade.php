@extends('layouts.blank')
@section('main')

<div class="album py-5 bg-light" style="margin:50px; border-radius: 25px;">
    <div class="container" style="">
                @if($bookings->count())
                @foreach ($bookings as $booking)
                
                        @if(!$booking->is_accepted)
                        <h4 class="mt-4">Na Cekanju</h4>
                         <div class="table-responsive table-responsive-sm table-responsive-lg table-responsive-md">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Naziv Knjige</th>
                                    <th scope="col">Pisac</th>
                                    <th scope="col">Deskripcija</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                               
                              <tr>
                                <th scope="row"></th>
                                <td>{{$booking->book->name}}</td>
                                <td>{{$booking->book->writer}}</td>
                                <td>{{$booking->book->description}}</td>
                                <td></td>
                                
                              </tr>
                        
                            </tbody>
                          </table>
                        </div>

                        @else
                        <h4 class="mt-4">Odobreno</h4>
                        <div class="table-responsive table-responsive-sm table-responsive-lg table-responsive-md">
                            
                            <table class="table table-striped">
                                
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Naziv Knjige</th>
                                        <th scope="col">Pisac</th>
                                        <th scope="col">Deskripcija</th>
                                        <th scope="col">Link</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                
                                <tr>
                                    <th scope="row"></th>
                                    <td>{{$booking->book->name}}</td>
                                    <td>{{$booking->book->writer}}</td>
                                    <td>{{$booking->book->description}}</td>
                                    <td><a href="{{url($booking->book->url)}}">Link</a></td>
                                </tr>
                            
                                </tbody>
                            </table>
                            </div>
                        @endif
                @endforeach
                @else
                   <p class="text-center">Trenutno ne postoji rezervacija</p>
                @endif
              </div>
        </div>

@endsection