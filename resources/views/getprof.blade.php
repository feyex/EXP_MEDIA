<!doctype html>
<html>
 <head>
  <title>EXPEIRIA MEDIA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <script src="vendor/fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
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
                <a class="nav-link page-scroll " href="connected"><b> Welcome  {{ Auth::user()->name }}</b><span class="sr-only">(current)</span></a>
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

    
    <section class="professional content-section">
      <div class="container">
        
      </div>
    </section>
    
    <section>
      <div class="container">
        <!-- Authentication Links -->
        @guest
            <div><a href="{{ route('discover') }}">{{ __('Login') }}</a></div>
        @else
      </div>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8 content-section">
              <!-- To display error messages -->
                  @foreach($errors->all(':message') as $message)
                      <div id="form-messages" class="alert alert-danger text-center text-dark" role="alert">
                      <h3> {{ $message }} </h3>
                      </div>
                  @endforeach()
                  <div class="card">
                      @endguest
                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success">
                                  {{ session('status') }}
                              </div>
                          @endif

                         {{ Form:: open ( array('url' => '/areaofinterest')) }}
                          <div class="form-group row">
                              <label for="name" class="col-sm-3 col-form-label">{{ __('Talent Type') }}</label>
                            <div class="col-sm-8">
                            {{ Form::select('category', array('DIRECTOR' => 'DIRECTOR', 'PRODUCER ' => 'PRODUCER ','PUBLISHER' => 'PUBLISHER', 'ART DEALER' =>'ART DEALER','MODELING AGENCY' =>'MODELING AGENCY','TALENT SCOUT' =>'TALENT SCOUT','TALENT ATTONEY' =>'TALENT ATTONEY')) }}
                            </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-sm-3 col-form-label">{{ __('Talent Type') }}</label>
                            <div class="col-sm-8">
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="past_project" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-sm-3 col-form-label">{{ __('Project type of interest') }}</label>
                            <div class="col-sm-8">
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="project" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-sm-3 col-form-label">{{ __('Talent type of interest') }}</label>
                            <div class="col-sm-8">
                              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="talent"  required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>
                          <center>
                              <div>
                               <input type="submit" name="submit" value="submit">
                              </div>
                            </center>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <footer>
        <nav class="navbar navbar-light text-center" style="background-color: black;">
            <a class="navbar-brand text-white" href="#">Copyright &copy;</a>	
        </nav>
    </footer>
          
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