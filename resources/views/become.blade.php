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
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
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

    <section class="content-section">
      <div class="container">
        @guest
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
        @else

          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif

          <div class="row">
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
            <br />
            <div class="col"> 
              <div>
                <form action="{{ url('become/original') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label for="project_type" class="col-sm-4 col-form-label">Project Type:</label>
                    <div class="col-sm-8">
                    <select name="project_type" class="form-control">
                      <option>=== Choose Your Project ===</option>
                      <option>SCRIPT</option>
                      <option>BOOK</option>
                      <option>REALITY SHOW</option>
                      <option>DOCUMENTARY</option>
                      <option>WEB SERIES</option>
                      <option>CONTENT TREATMENT</option>
                      <option>CREATIVE CONTENT IDEATION</option>
                    </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="project_pitch">Pitch Your Project</label>
                    <textarea class="form-control" name="project_pitch" id="project_pitch" placeholder="Tell us More About Your Project" rows="3"></textarea>
                  </div>
                  <div  class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        @endguest
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