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
                <a class="nav-link page-scroll " href="/">Home <span class="sr-only">(current)</span></a>
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
          </ul>
        </div>
      </div>
    </nav>

    
    <header class="discover content-section">
      <div class="container">
        <div class="row">
          <div class="my-auto ml-auto">
            <a class="btn btn-danger mr-2" href="#user" role="button">SignUp</a>
            <a class="btn btn-danger ml-2" href="#user" role="button">Log In</a>
          </div>
        </div>
      </div>
    </header>

    <section class="content-section">
      <div class="container">
        <!-- Projects Row -->
        <div class="row">
          @foreach ($profiles as $profile)
            <div class="col-md-3 img-portfolio">
                <!-- <a href="portfolio-item.html"> -->
                  <img class="img-fluid img-thumbnail img-hover" src="storage/photos/{{$profile->photos}}" alt="">
                  <p>{{ $profile->username }}</p>
                  <p>{{ $profile->talent }}</p>
                <!-- </a> -->
            </div>
          @endforeach
        </div>
        <!-- /.row -->
      </div>
    </section>

    <section class="insight content-section" id="user">
          <div class="container">
            <h2 class="text-center">Showcase your talent</h2>
            <hr class="rul"/>
                @foreach($errors->all(':message') as $message)
                  <div id="form-messages" class="alert alert-danger text-center text-dark" role="alert">
                   <h3> {{ $message }} </h3>
                  </div>
                @endforeach()
            <ul>
              <li>Create your 100% free high impact profile (short bio/interest/ experience)</li>
              <li>Advance portfolio management (would you like to get notifications of activities you like. Such as…) Casting call submission, receive casting call notices, Receive audition notices.</li>
              <li>Upload HD profile photo</li>
              <li>Get qualified industry professionals evaluations</li>
            </ul>
            <div class="row">
              <div class="optin-container col-sm col-md-6">
                <div class="cta">Sign Up</div>
                  <form method="POST" action="{{ route('register') }}" class=" a form hidden">
                        @csrf
                    <div class="form-row text-center">
                      <div class="col">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                          @if ($errors->has('name'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('name') }}</strong>
                              </span>
                          @endif
                        <!-- {{ Form:: text('username', '', array("class" => "form-control", 'placeholder' => '')) }} -->
                      </div>
                      <div class="col">
                        <label for="email" class="col-form-label text-center text-danger">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                          @if ($errors->has('email'))
                              <span class="invalid-feedback">
                                  <strong>{{ $errors->first('email') }}</strong>
                              </span>
                          @endif
                        <!-- {{ Form:: email('email', '', array("class" => "form-control", 'placeholder' => 'johndoe@gmail.com')) }} -->
                      </div>
                    </div>
                    <div class="form-row text-center">
                        <div class="col">
                          <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                          <!-- {{ Form:: password('password', array('class' => 'form-control')) }} -->
                        </div>
                        <div class="col">
                          <label for="password-confirm" class="col-form-label text-center text-danger">{{ __('Confirm Password') }}</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                        {{ Form::hidden('invisible', 'discover') }}
                    </div>
                      &nbsp;
                      <div class="text-center ">
                        {{ Form::submit('SignUp', array('class' => 'submit_btn', 'id' => 'submit_id')) }}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{!! url('auth/facebook') !!}" class="btn btn-primary btn-block">
                                    Login with facebook
                                </a>
                            </div>
                        </div>
                      </div>
                     
                </form>
                </div>
              
            
          <div class="coptin-container col-sm col-md-6">
            <div class="ctc">Log-in</div>
            <form method="POST" action="{{ route('login') }}" class=" c form hidden">
                    @csrf
            <div class="form-row text-center">
              <div class="col">
                <label class="col-form-label  text-danger" for="formGroupExampleInput">Email Address</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                    
              </div>
              <div class="col">
                <label class="col-form-label  text-danger" for="formGroupExampleInput2">Password</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
              </div>
              {{ Form::hidden('invisible', $name) }}
            </div>
              &nbsp;
              <div class="text-center">
                {{ Form::submit('Log-in', array('class' => 'submit_btn', 'id' => 'c')) }}
              </div>
              {{ Form:: close() }} 
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