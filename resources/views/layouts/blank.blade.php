<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Online Library</title>

  
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link href="/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="stylesheet" href="{{ URL::asset('/css/sb-admin-2.css'); }} ">
  <link rel="stylesheet" href="{{ URL::asset('/css/sb-admin-2.min.css'); }} ">
  <link rel="stylesheet" href="{{ URL::asset('/css/home.css'); }} ">
     

  
</head>

<body>
  <div id="app">
    
    <div class="navbar navbar-expand-md shadow-sm" style="background-color: #ed3015; ">
        <div class="container">
            <div class="d-flex">
            <a class="navbar-brand d-flex pt-2" href="{{ url('/home') }}">
                <div class="pr-1"><img style="height: 40px"  src="/img/logo.ico"></div>
                <div class="pt-2" style="font-size:29px; color:white">Library</div>
              </a>
            </div>

                <div class="ml-auto d-flex pt-4" style="justify-content: end">
                  <ul class="d-flex">
                    <a href="{{ url('/home') }}"><button class="pr-3 pt-2"><spam class="font">Pocetna</spam></button></a>
                    <a href="{{url('/gallery')}}"><button class="pr-3 pt-2"><spam class="font">Galerija</spam></button></a>
                    <a href="{{url('/aboutus')}}"><button class="pr-3 pt-2"><spam class="font">O Nama</spam></button></a>

                    @if(auth()->user())
                    <a href="{{url('/mybooking')}}"><button class="pr-3 pt-2"><spam class="font">Moje Rezervacije</spam></button></a>
                    @else
                    <a href="{{url('/')}}"><button class="pr-3 pt-2"><spam class="font">Moje Rezervacije</spam></button></a>
                    @endif
                    
                    @if(auth()->check())

                          

                      @if(auth()->user()->role == ('admin'))
                    
                   
                        
                            <ul class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="font">{{Auth::user()->name}} <i class="fa fa-angle-down"></i></span>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                  
                                    <form action="{{route('logout')}}" method="post">
                                      @csrf
                                      
                                      <li>
                                        <a href="{{url('/admin')}}"><p style="color: black; font-size:15px; padding-left:23px">Admin panel</p></a>
                                      </li>

                                        <button class="dropdown-item" data-toggle="modal" data-target="#logoutModal"  type="submit">
                                          <spam style="color: black; font-size:15px">Odajvite se</spam>
                                        </button>
                                      </form>
                                </div>
                            </ul>
                      @else

                          
                                
                                <div class="navbar-nav mr-auto pt-2">
                                
                                  
                                  @if(auth()->user())
                                      <li>
                                          <form action="{{route('logout')}}" >
                                            @csrf
                                            <button class="pr-3"  type="submit"class="">
                                              <spam class="font">Odajvite se</spam>
                                            </button>
                                          </form>
                                      </li>
                               
                                  @endif
    
                                      </div>
                       @endif
                       
                    
                    @else
                      <div class="pt-2">
                        <a  href="/"><button class="pr-3"><spam class="font">Prijavite se</spam></button></a>
                      </div>

                     

                    @endif
                  </div>
                              
                  
        </div>
          
                 


                       
                      </div>
                    </div>
                  </ul>
                </div>

        <div class="main" style="position: relative; min-height: 100vh;">
      @yield('main')
    </div>


    <footer class="text-center text-lg-start bg-light text-muted " style="position:; bottom:0;">
      <!-- Section: Social media -->
      <section
        class="d-flex justify-content-center p-4 border-bottom" 
      >
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Kontaktirajte nas na drugim platformama: </span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div class="" >
        
          <a href="" class="me-4 text-reset">
            <i class="fa fa-facebook-f " style="font-size:20px; padding-left:10px"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-twitter"  style="font-size:20px; padding-left:10px"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-google" style="font-size:20px; padding-left:10px"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-instagram"  style="font-size:20px; padding-left:10px"></i>
          </a>
          
          
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        <span>Copyright &copy; Ankica Jakovljevic 2021</span>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <a class="scroll-to-top rounded" href="#app">
      <i class="fa fa-angle-up"></i>
  </a>
     

      <script src="/vendor/jquery/jquery.min.js"></script>
      <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- Core plugin JavaScript-->
      <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

      <!-- Custom scripts for all pages-->
      <script src="/js/sb-admin-2.min.js"></script>
</body>
</html>

