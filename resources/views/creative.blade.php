<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>EXPEIRIA MEDIA</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendor/fontawesome/svg-with-js/js/fontawesome-all.min.js"></script>
    <link href="css/style.css" rel="stylesheet">

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
     <!-- Header -->
     <header>
        <div class="container">
            <div class="intro-text">
              <div class="intro-heading exp">EXPEIRIA MEDIA</div>
                <div class="exp"> 
                  <p class="new text-danger">Achieving insight and intellectual growth </p>
                </div>
              <p class="text-center"><i>"WE ARE DRIVEN BY IDEAS, CREATIVITY, INNOVATION, PARTICIPATION AND PEOPLE"</i></p>
            </div>
        </div>
      </header>
    
    <section id="about" class="content-section">
        <div class="container text-dark">
            <h1 class=" text-center" >CREATIVE INSIGHT PROJECT</h1>
            <p> CIP is formed as a means of achieving insight and intellectual growth (Responsible for the cultivation of education, skills, talents, and interest) – coaching, mentorship, nexus activities and entertainment.Innovation and investment the road map to stabilize economy
            <p>It is our belief that, successful businesses are built upon the execution of basic fundamentals, and the major school of development people enroll for everyday is the school of media entertainment. The largest method of education is moving towards the direction of media/entertainment. People learn lots of things from media/entertainment than what they learn in school (academics, business, relationships, lifestyles etc.).</p>  
            <p>This knowledge acquired is what they transform and apply to real life. The quality of decision made by individual is based on the level of information they’ve acquired from their social environment/community. 
                Through collaboration with Expeiria team, where creators and enablers contribute their expertise and experience in telling story known as THE CREATIVE INSIGHT PROJECT. This project is described as a “long term scheme of national significance to create a living and working community for creative industries”.  Enablers recruit originators and then contest for best awarded story tellers both in audio and visual content development (music, dance and drama).</p>
        </div>
    </section>

    <section id="expieria" class="insight2 content-section">
      <div class="container text-white">
          <h1 class=" text-danger  text-center">Creative Intern Program</h1>
          <p class="text-white"><b> We are looking for qualified candidates interested combining their passion for the arts and media with their desire to improve the world around them. Our program is designed to offer you a learning experience while connection you with industry professionals and leaders in the impact media space, including film, arts, design, video editing (etc). Our focus is creating and telling stories using media that drives awareness and actions around causes and issues both locally and internationally.</b> </p>
          <p class="text-white"><b>Thank you for your interest in becoming a part of our creative intern program. We are looking for qualified candidates interested in combining their passion for the arts and media with their desire to improve the world around them.</b> </p>  
          
        <div class="text-white row">
            <div class="col-sm col-md-6">
              <h5 class=" text-danger  text-center">REQUIREMENTS & EXPECTATIONS</h5>
              <ul>
                <li><p class="text-black">	A commitment of at least 3 months</p></li>
                <li><p class="text-black">	Applicants must have solid interpersonal skills and excellent organizational & creative skills</p></li>
                <li><p class="text-black">Applicants must be patient, friendly, punctual, and work well under pressure in a fast-paced, ever-changing environment</p></li>
                <li><p class="text-black">Preferred if applicants have experience in a related field</p></li>
                <li><p class="text-black">Applicants are not expected to depend on industry funds for survival during and after the period of internship</p></li>
              </ul>
              <p> Please fill out the form below and email your resume to intern@.......................</p>
             </div>
             <div class="inquire col-sm col-md-6 text-danger">
              <div class="">
                <h4 class=" text-center cls ">INQUIRE </h4>
                <p class="text-left">Thank you for your interest in becoming one of our top media model. Please fill in your contact information and a little more about yourself below:</p>
              </div>

                
              
              @foreach($errors->all(':message') as $message)
                  <div id="form-messages" class="alert alert-danger" role="alert">
                    {{ $message }}
                  </div>
                @endforeach()  
                <div class="form-row text-center">
                  <div class="col">
                    {{ Form:: open(array('url' => '/creat', 'id' => 'contact_form')) }}
                    <label class="col-form-label  text-danger" for="formGroupExampleInput">Name</label>
                    {{ Form:: text('name', '', array("class" => "form-control", 'placeholder' => 'Name')) }}
                  </div>
                  <div class="col">
                    <label class="col-form-label  text-danger" for="formGroupExampleInput2">Email</label>
                    {{ Form:: email('email', '', array("class" => "form-control", 'placeholder' => 'Email')) }}
                  </div>
                </div>
                <div class="form-row text-center">
                  <div class="col">
                    <label class="col-form-label  text-danger" for="formGroupExampleInput">Phone Number</label>
                    {{ Form:: number('phone', '', array("class" => "form-control", 'placeholder' => '+234')) }}
                  </div>
                  <div class="col">
                    <label class="col-form-label  text-danger" for="formGroupExampleInput2">Location(city/state/country)</label>
                    {{ Form:: text('location', '', array("class" => "form-control", 'placeholder' => 'Lagos')) }}
                  </div>
                 </div>
                 <div class="form-row text-center">
                    <div class="col">
                      <label class="col-form-label  text-danger" for="formGroupExampleInput">How did hear you about us?</label>
                      {{ Form::select('know_us', array('Friends' => 'Friends', 'Handbill' => 'Handbill','Word of mouth' => 'Word of Mouth'), 'S') }}
                    </div>
                    <div class="col">
                      <label class="col-form-label  text-danger" for="formGroupExampleInput2">Educational Level</label>
                      {{ Form::select('education_level', array('B.Sc' => 'B.Sc', 'HND' => 'HND','OND' => 'OND', 'SSCE' =>'SSCE')) }}
                    </div>
                  </div>
                  <div class="form-row text-center">
                    <div class="col">
                      <label class="col-form-label  text-danger" for="formGroupExampleInput">Interests</label>
                      {{ Form:: text('interest', '', array("class" => "form-control", 'placeholder' => 'Dancing?')) }}
                    </div>
                    <div class="col">
                      <label class="col-form-label  text-danger" for="formGroupExampleInput">Skills/Experience</label>
                      {{ Form:: text('skills', '', array("class" => "form-control", 'placeholder' => '')) }}
                    </div>
                  </div>
                  <div class="form-row text-center">
                    <div class="col ">
                      <label class="col-form-label text-danger" for="formGroupExampleInput">Where would you like to intern</label>
                      {{ Form:: text('intern_section', '', array("class" => "form-control", 'placeholder' => '')) }}
                    </div>
                    <div class="col ">
                      <label class="col-form-label text-danger" for="formGroupExampleInput">Attach CV</label>
                       {{ Form:: file('file_upload')}}
                    </div>
                  </div>
                  <div class="text-center">
                      {{ Form::submit('Submit', array('class' => 'submit_btn', 'id' => 'submit_id')) }}
                  </div>
                {{ Form:: close() }}
              </div>
        </div>           
      </div>
    </section>
        
    <section id="expieria" class=" content-section">
        <div class="container text-dark text-left">
          <h1 class=" text-dark  text-center">Contest</h1>
          <p class="text-dark">A platform where creators are given the opportunity to pitch their short film idea and win a budget of #00,000,000 for production support and advice (18-30 with ideas based on experience, true-life story, education or business story– video competition). </p>
          <p>Professional consulting services will be available to top 10 awardees. The Service Grants are delivered by teams of 3-5 or more industry professionals who volunteer their time and expertise to support the development, implementation, marketing, fundraising or distribution of film, music, performing and visual arts, or journalism projects and programs. In addition to these unique, customized consulting services, the program also provides mentoring opportunities, development and production resources, fiscal sponsorship and a vibrant global community to support grantees as they create media for social impact.</p>
          <center>
              <h3 class=" text-dark  text-center">Criteria for Acceptance</h3>
              <p>We're looking for projects that use media to tell stories that about problems that need to be solved, create impact, illuminate solutions and offer hope and inspiration. Specific criteria include:</p>
                  <ul>
                    <li><p class="text-left">Creativity: Telling stories through film, dance, journalism, drama, photography, music, writing or art that raise awareness about problems and solutions.</p></li>
                    <li><p class="text-left">Stage of Development. While we accept projects at any stage, we do require a fully-developed concept. For film projects, a trailer, rough cut or story treatment or story concept should accompany the grant application.</p></li>
                    <li><p class="text-left">The Applicant. Because we believe in the power of storytellers to raise awareness and catalyze change, we are looking for highly motivated “creative teams” that are seeking collaboration and resource support to expedite project development or completion</p></li>
                    <li><p class="text-left">Impact. Priority will be given to projects that are designed to reach broad or targeted audiences for the purpose of creating awareness about issues and solutions that lead to behavior change, and can be made accessible to audiences within a short period of time for service grant award.</p></li>
                  </ul>
                <p>
                  After review of the grant application, projects will be selected based on the criteria outlined. Successful applicants receive a notification of approval.
                  If you are interested in the program, please send your contact information and a short description of your project to info@creativevisions.org <br>
                  Thank you!<br>
                  In order to apply, you must be a member of the Media ProNetwork 
                  <a href="programs">Join now for free!</a> 
                </p>
          </center>  
        </div>
    </section>
    
      <footer>
        <nav class="navbar navbar-light" style="background-color: black;">
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
                    <button type="submit" class="btn btn-default">Send</button>
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