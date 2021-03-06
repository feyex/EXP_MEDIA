<!doctype html>
<html>
  <head>
    <title>EXPEIRIA MEDIA </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
              @guest
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
              @else
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
              @endguest
            </ul>
        </div>
      </div>
    </nav>

    
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./img/pro-industryPro11.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./img/pro-premium-Generic1.jpg" alt="Second slide">
        </div>
      </div>
    </div>
    @guest
    <section class="content-section">
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
                </form>
              </div>
            </div>
          </div>
      </div>
    </section>

    @else
      <section class="content-section-become">
        <div class="container">
          <div class="row">
            <div class="col col-lg-12 col-md-12">
              <h1>We’d love to have you as part of our creative family of originators!</h1>
              <p>
                We’re in the business of nurturing and developing your talent and helping you bring your projects to market. If your project is approved as one of our Originals by any producer or enabler, you’ll receive creative development, packaging outreach, financing and distribution and become one of the success stories on our platform!
              </p>
              <p>
                Expeiria is designed to crack down problems within the production and distribution process by enabling emerging creators like you to get the access and information you need to make real progress with your branded media project. By developing your talent/skills and create incredible opportunities for you to get your projects featured by producers, financed, and made. Creators on our platform will have the opportunity to have their projects picked up by producers at various stages of development, production or distribution.
              </p>
              <p>
                Our thesis was that by connecting you to high-level producing mentorship, your projects would become truly great and connect with a market. And that by offering you self-service education and training by real industry pros, that you could learn to become a professional.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="content-section insight">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading">Pitch Your Project</h2>
              <h6 class="section-subheading text-blue">Tell us what you are working on</h6>
            </div>
          </div>
          <br />
          <br />

          @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ $message }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
          @endif

          <form action="{{ url('project') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <select id="project_type" name="project_type" class="form-control">
                    <option value="item0">-- Choose Your Project --</option>
                    <option value="Book" >Book</option>
                    <option value="Documentary" >Documentary</option>
                    <option value="Script" >Script</option>
                    <option value="Reality" >Reality Show</option>
                    <option value="Series" >Web Series</option>
                    <option value="Treatment" >Content Treatment</option>
                    <option value="Ideation" >Creative Content Ideation</option>
                  </select>
                </div>
                <div class="form-group">
                  <select id="project_category" name="project_category" class="form-control">
                    <option value="">-- Select One -- </option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <textarea class="form-control" name="project_pitch" id="project_pitch" placeholder="Tell us More About Your Project" rows="3" cols="30"></textarea>
                </div>
              </div>
              <div  class="form-group">
                <input type="submit" class="btn btn-primary  btn-lg" value="Submit" />
              </div>
            </div>
            {{ Form:: close() }} 
          </form>
        </div>
      </section>
    @endguest


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