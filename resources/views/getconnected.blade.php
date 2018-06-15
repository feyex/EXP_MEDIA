<!doctype html>
<html>
  <head>
    <title>EXPEIRIA MEDIA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
    <script src="vendor/fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
  </head>
  <body id="page-top" class="index">

    <!--Navigation-->
    <nav  class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
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
    <br /> 
    
    <section>
      <div class="container-fluid">
        
        @if ( $profile )
          <div class="row">
            <div class="col-md-3 ml-4" >
              <img src="storage/photos/{{$profile->photos}}" alt="Profile Picture" class="img-thumbnail" >
            </div>
            <div class="vl"></div>
              <div class="row content-section">              
                <div class="col-md-3 ml-3 " >
                  <h3> <span class="badge badge-dark">Username:</span></h3>
                  <h3> <span class="badge badge-dark">Talent:</span></h3>
                  <h3> <span class="badge badge-dark">Phone N0:</span></h3>
                </div>
                <div class="col-md-8 ml-3" >
                  <h2> {{ $profile->username }}</h2>
                  <h3> {{ $profile->talent }}</h3>
                  <h2> {{ $profile->phone }}</h2>
                </div>
              </div>
            </div>
          @else
            <div class="row">
              <div class="col-md-3 ml-4" >
                <img src="holder.js/300x200" alt="..." class="img-thumbnail">
              </div>
              <div class="vl"></div>
              <div class="col-md-8 ml-4 content-section">
              <!-- To display error messages -->
              @foreach($errors->all(':message') as $message)
                <div id="form-messages" class="alert alert-danger text-center text-dark" role="alert">
                <h3> {{ $message }} </h3>
                </div>
              @endforeach()
              <div class="card">
                  <!-- <div class="card-header"><h3> Welcome  {{ Auth::user()->name }}</h3></div> -->
                  <div class="card-body">
                    @if (session('status'))
                      <div class="alert alert-success">
                        {{ session('status') }}
                      </div>
                    @endif

                    <form enctype="multipart/form-data" method="POST" action="{{ url('/createprofile') }}">
                      @csrf
                      <div class="form-group row">
                          <label for="name" class="col-sm-3 col-form-label">{{ __('Talent Type') }}</label>
                        <div class="col-sm-8">
                        {{ Form::select('talent', array('PUBLIC SPEAKING' => 'PUBLIC SPEAKING', 'ARTISAN ' => 'ARTISAN ','MUSIC' => 'MUSIC (composer/singer)', 'MODELS' =>'MODELS','ACTORS' =>'ACTORS','COMEDIAN' =>'COMEDIAN','DANCERS' =>'DANCERS','VOICE-OVER' =>'VOICE-OVER')) }}
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="name" class="col-sm-3 col-form-label">{{ __('Username') }}</label>
                        <div class="col-sm-8">
                          <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="username" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="name" class="col-sm-3 col-form-label">{{ __('Phone_Number') }}</label>
                        <div class="col-sm-8">
                          <input id="name" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phone"  required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>
                      <div class="form-group row">
                          <label for="name" class="col-sm-3 col-form-label">{{ __('Upload Photos/audio/video') }}</label>
                        <div class="col-sm-8">
                          <input type="file" class="form-control" name="photo"  />
                        </div>
                      </div>
                      <center>
                          <div>
                          <input type="submit" name="submit" value="submit">
                          </div>
                        </center>
                      {{ Form:: close() }} 
                    </form>
                  </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
    
    <div class="mt-4" ></div>

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
    <script src="vendor/holder.min.js" ></script>
    <script src="js/expieria.js"></script>
  </body>
</html>