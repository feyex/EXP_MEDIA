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

      <div class="collapse navbar-collapse" id="navbarSupportedContent ">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link page-scroll text-black" href="index">Home <span class="sr-only">(current)</span></a>
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

    
        <section class="professional content-section">
          <div class="container">
            
          </div>
        </section>

        <section class="content-section">
          <div class="container">
            <h2 class="text-center">Become a Professional</h2>
            <hr class="rul"/>
                @foreach($errors->all(':message') as $message)
                  <div id="form-messages" class="alert alert-danger text-center text-dark" role="alert">
                   <h3> {{ $message }} </h3>
                  </div>
                @endforeach()
               <p> Browse and connect immediately with seasoned pros who are interested in learning about your project and who can strategically advise you on creative/market needs, and overall career direction</p>
            <div class="row">
              <div class="optin-container col-sm col-md-6">
                <div class="cta">Sign Up</div>
                  <form method="POST" action='/prof' class=" a form hidden">
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
                    </div>
                      &nbsp;
                      <div class="text-center ">
                        {{ Form::submit('SignUp', array('class' => 'submit_btn', 'id' => 'submit_id')) }}
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