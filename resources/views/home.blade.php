@extends('layouts.blank')
@section('main')
  <div class="headline">
    <div class="inner" style="margin:70px">
      <h1 style="color: rgb(63, 61, 61)">Dobrodosli u Online biblioteku</h1>
      <p style="color: rgb(63, 61, 61); font-size: 25px" >Znate da je biblioteka uvijek otvorena za vas? To važi, u svakom slučaju, ako koristite biblioteku na internetu pomoću vaših kompjutera, mobilnih telefona ili tableta. U svakom momentu dana ili noći možete dobiti preporuke za čitanje ili reklamne poruke o tome šta se dešava u različitim bibliotekama u gradu</p>
    </div>
  </div>


    <!-- content -->
  
  <div class="cards">
    <h1 class="pb-5">Najnoviji sadrzaj</h1>
    <div class="inercards" style="justify-content:center; display:flex">

    @foreach($books as $book)
      <a href="/gallery "><div class="card-deck" style="padding-right:50px" >
        <div class="card" style="display: inline-block;">
          <img class="card-img-top" src="/storage/{{$book->image}}" style="height:160px; width:170px"alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$book->name}}</h5>
            <p class="card-text">{{$book->description}}</p>
            <p class="card-text"><small class="text-muted">{{$book->created_at}}</small></p>
          </div>
        </div>
      </div></a>
      @endforeach

    </div>
  </div>



  <!-- content -->

  <div class="team">
    <div class="container py-5">
      <div class="row mb-4" style="justify-content:center">
        <div class="col-lg-5" >
          <h2 class="display-4 font-weight-bold">Nas tim:</h2>
         
        </div>
      </div>
     
      
      <div class="row text-center">
        @foreach($users as $user)
        <!-- Team item-->
        <div class="col-xl-3 col-sm-6 mb-5 m-auto">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
            <h5 class="mb-0"></h5><span class="small text-uppercase text-muted">{{$user->name}}</span>
            <ul class="social mb-0 list-inline mt-3">
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        @endforeach

        <!-- End-->

       

      </div>
    
    </div>
  </div>



  <!-- content -->

  <div class="container-sm" style=" background-color: white;margin:auto; margin-top:70px; margin-bottom:70px; border-radius:25px;">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col">
        <img src="/img/ourmision.png" style="max-height: 100%; max-width:100%; border-radius:25px" alt="">
      </div>
      <div class="col-lg-6">
        <h2 style="text-align: center; padding-top:50px">Nasa Vizija</h2>
        <p style="margin: 40px; font-size:20px">Cilj nam je pružiti vam što veći izbor sadržaja koji vas obavještavaju, nadahnjuju, potiču i zabavljaju. Da bi to ostvarili uspostavili smo saradnju sa više izdavača i online knjižara. U našem radu pratimo nove trendova u izdavaštvu, kako bismo vam uvijek mogli pružiti one naslove koji će vam na kvalitetan način ispuniti slobodno vrijeme, te omogućiti lični rast i razvoj.
          Sajt sadrži linkove na web stranice portala kao i embedovani sadržaj koji pripada drugim javnim servisima i stranicama.  Te stranice nisu pod kontrolom sajta i on nije odgovoran za sadržaj tih stranica.
    </p>
      </div>
    </div>
    </div>




@endsection