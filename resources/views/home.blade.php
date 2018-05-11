
<!doctype html>
<html>
 <head>
  <title>EXPEIRIA MEDIA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <script src="vendor/fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <link rel="stylesheet" type="text/css" href="css/sign.css">
 </head>
 <body id="page-top" class="index">
    <!--Navigation-->
    <nav  class="navbar navbar-expand-lg fixed-top navbar-custom ">
      <div class="container text-white">
      <a class="navbar-brand navbar-bran text-danger" href="#">Expeira</a>
      <button class="navbar-toggler btn-dark " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link page-scroll " href="index">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll"  href="about">Media Production</a>
              </li>
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Expeiria Programs </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item text-dark" href="creative">  Creative Insight Project</a>
                  <a class="dropdown-item text-dark" href="programs">Expeiria Programs</a>
                  <a class="dropdown-item text-dark" href="insight"> Creative Strategic Advisor</a>
              </li>
                  
              <li class="nav-item">
                <a class="nav-link page-scroll "  data-toggle="modal" data-target="#exampleModalLong">Contact</a>
              </li>
              <li>
                <a class="nav-link page-scroll text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                   {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  @csrf
                </form>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    
        <section class="discover content-section">
          <div class="container">
            
          </div>
        </section>
        <div class="container">
                  <!-- Authentication Links -->
                  @guest
                      <div><a href="{{ route('login') }}">{{ __('Login') }}</a></div>
                      <div><a href="{{ route('register') }}">{{ __('Register') }}</a></div>
                  @else
                  <!-- <div class="card">
                     <div class="card-header"><h3> Welcome  {{ Auth::user()->name }}</h3></div>
                  </div>
                              -->
                 
          </div>

          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-md-8">
                      <div class="card">
                          <div class="card-header"><h3> Welcome  {{ Auth::user()->name }}</h3></div>
                          @endguest
                          <div class="card-body">
                              @if (session('status'))
                                  <div class="alert alert-success">
                                      {{ session('status') }}
                                  </div>
                              @endif

                              You are logged in!
                          </div>
                      </div>
                  </div>
              </div>
          </div>

        <footer>
            <nav class="navbar navbar-light text-center" style="background-color: black;">
                <a class="navbar-brand text-white" href="#">Copyright &copy;</a>	
            </nav>
        </footer>
          
        <!--MODAL CLASS -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-secondary">
              <div class="modal-header text-center">
                <center> <h5 class="modal-title text-centre" id="exampleModalLongTitle">Contact Us</h5></center>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form role="form">
                  <div class="form-group ">
                   <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Subject">
                  </div>
                    <textarea class="form-control na" rows="3"></textarea>
                  </div>
                    <button type="button" class="btn btn-default">Send</button>
                </form>
              </div>
          </div>
        </div>
      </div>
            
          
           <script type="text/javascript" >
              window.FontAwesomeConfig = {
                searchPseudoElements: true,
              }
          </script>
          <script src="vendor/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.js"></script>
          <script src="js/expieria.js"></script>
        </body>
      </html>