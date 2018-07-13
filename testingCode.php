<?php
session_start();
error_reporting(0);
include('includes/config.php');



?>
<html>
    <head>
        <title>Educot-home of knowledge</title>
 
        <script type="text/javascript" src="jquery.min.js"></script>
        
        <link rel="stylesheet" href="style/slider-def.css">
             <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">  
        
        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
        
        <link href="css/main.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://use.fontawesome.com/9adc8cef54.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://use.fontawesome.com/9adc8cef54.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 

    </head>
<body>
    
    
     <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse">
 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
              <span class="navbar-toggler-icon"></span>
  
          </button>
      
      <div class="container">
      <div class="row">
          <a class="navbar-brand" href="index.php"><img class="img-responsive" src="images/logo.png" alt="logo"></a>
      <h2 style="color:white;" class="educot-logo">educot</h2>
      </div></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
              <ul class="navbar-nav ml-auto">
      
                  <li class="nav-item active">
        
                      <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a>
      
                  </li>
      
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-book" aria-hidden="true"></i>Subjects/Classes
                    </a>
                    <div class="dropdown-menu row" aria-labelledby="navbarDropdown">
            <div class="container">
            <div class="row">
              <div class="col-md-3">
                <span class="text-uppercase">Classes</span>
                <div class="dropdown-divider"></div>
                <ul class="nav flex-column">
                <li class="dropdown-item">
                  <a class="" href="#">Class 6</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Class 7</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Class 8</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Class 9</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Class 10</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Class 11</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Class 12</a>
                </li>
                
                </ul>
              </div>
              <div class="col-md-3">
                <span class="text-uppercase">Subjects</span>
                <div class="dropdown-divider"></div>
                <ul class="nav flex-column">
                <li class="dropdown-item">
                  <a class="" href="#">Science</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Maths</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Social Studies</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Computer Science</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Aptitude</a>
                </li>
                </ul>
              </div>
            </div>
            </div>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item disabled" href="#">More Subjects coming soon</a>
                    </div>
                  </li>
      
                  <li class="nav-item">
       
                      <a class="nav-link" href="hire.php"><i class="fa fa-superpowers" aria-hidden="true"></i> Hire Talent</a>
      
                  </li>
                  

                  <li class="nav-item">
       
                      <a class="nav-link divider" href="instructorRegister.php"><i class="fa fa-envelope" aria-hidden="true"></i> Instructors</a>
            
                  </li>              
          
          <a href="login.php" class="btn btn-primary" type="button">Login/SignUp</a>
          

                  
                  

   
              </ul>
  
          </div>

      </nav>
    
   <header class="intro">
    <div class="intro-body">

            <!-- start typer hello  -->
            <div class="brand-heading" >
              
              <a class="navbar-brand" href="index.php"><img src="images/educot-brand-heading.png" style="" class="image-responsive brand-img"></a>

            </div>
            <h2 class="intro-text">Where you <span class="txt-rotate" data-period="100" data-rotate='[ "improve.", "enhance.", "leap." ]'></span></h2>
        <!-- end row header -->
    </div>
    <!-- end intro body -->
  </header>
    
<section class="event_a">    
  <div>
    <div class="row">
    <h2 class="intro-text col-sm-9" style="color:#ffffff;">For getting notified about new courses, jobs, internships & events</h2>
    <a href="login.php" class="btn btn-primary btn-lg" type="button">Subscribe</a></div>
  </div>
</section>
      <section class="feature_class">
        <br>
        <h1 class="feature_heading2">Features</h1>
        <h4 class="feature_heading2">With Our Top quality support we help you achieve your dreams</h4><br>
      <div class="card-deck">
        <div class="card text-center">
        <h2 width="140" height="140" class="feature"><img class="img-responsive" src="images/search.svg" alt="logo"></h2>
        <div class="card-body">
          <h5 class="card-title">JOBS/ INTERNSHIP/ TRAINING</h5>
          <p class="card-text">Seek to embark in real corporate world</p>
          <a href="jobsInternShip.php" class="btn btn-danger">Explore here</a>
        </div>
        </div>
        <div class="card text-center">
          <h2 width="140" height="140" class="feature"><img class="img-responsive" src="images/skill.svg" alt="logo"></h2>
          <div class="card-body">
            <h5 class="card-title">SKILL DEVELOPMENT COURSES</h5>
            <p class="card-text">Want to devlop set of skills for attractive resume then</p>
            <a href="programOverview.php" class="btn btn-danger">Bright Future is Waiting</a>
          </div>
        </div>
        <div class="card text-center">
        <h2 width="140" height="140" class="feature"><img class="img-responsive" src="images/modal_exam.svg" alt="logo"></h2>
        <div class="card-body">
          <h5 class="card-title">MODEL TEST</h5>
          <p class="card-text">If you have confidence in your skills then</p>
          <a href="login.php" class="btn btn-danger">Take Test</a>
        </div>
        </div>
    </div>
  </section>
<section class="abt"> 
    <h1 class="feature_heading">What is Jump 2 School ?</h1>
        <h4 class="feature_heading">The answer is below </h4>
    <br/><br/>
     <div class="block block-secondary app-iphone-block">
      <div class="container">
      <div class="row app-align-center">

        <div class="col-sm-5 hidden-sm-down">
        <img class="app-iphone" src="images/abt3.jpg" style="width: 100%;height: 75%">
        </div>

        <div class="col-md-6 offset-md-1 col-sm-12 offset-sm-0">
        <h6 class="text-muted text-uppercase">Rich Information</h6>
        <h3>Make informed decisions with historical &amp; real time data.</h3>
        <p class="lead mb-4">We combine immediate real time events with rich historical data to help answer the toughest questions about retention, growth, and engagement.</p>
        <div class="row hidden-md-down">
          <div class="col-sm-6 mb-3">
          <h5>Data frequency</h5>
          <p>We poll for data on a millisecond basis. You can react to new information in seconds rather than days. <a href="#" class="text-primary">Learn more.</a></p>
          </div>
          <div class="col-sm-6">
          <h5>Reliability &amp; uptime</h5>
          <p>We process our data across a massively distributed network of reliable servers to ensure 99.99% uptime, always. <a href="#" class="text-primary">Learn more</a>.</p>
          </div>
        </div>
        </div>
      </div>

      </div>
    </div>
</section>

<section class="abt"> 
    
  <div class="row">
    <div class="col-md-4 hidden-md-down">
      <div width="100%" class="feature"><img class="img-responsive" src="images/abt3.jpg" alt="logo" style="width: 100%; height:500px"></div>
          
    </div>
    
    <div class="col-md-8">
      <div style="margin:20px;">
        <h1 class="feature_heading display-6">What is <span class="educot-logo">educot</span>?</h1>
        <h3 class="feature_heading display-6">Our directions + your efforts together can achieve heights.</h3>
        <h5 class="feature_heading mb-4" style="color:#424242"> It is an online portal that provides you a platform to explore your professional skills and knowledge. Educot will give you confidence to your skills so that you can showcase them in necessary fields.We believe in smart work thats why we provide course materials that are simple and easy to understand.Educot builds ways for you to move forward towards your dreams.It provides you with internships and trainings in your dream companies.
          Join with Educot and let haul your dreams to reality. We will introduce you to the corporate world by providing internships, jobs, trainings(online & offline).</h5>
      </div>
      <div class="row" style="margin:20px;">
        <br><br>
          <div class="col-sm-6 mb-3">
          <h4 class="display-6">Our ideology</h4>
          <p class="">> Dream BIG
<br>> Put efforts to achieve it
<br>> have fun in what you do
<br>> keep it simple</p>
          </div>
          <div class="col-sm-6">
          <h4 class="display-6">Benefits</h4>
          <p class="">> Improved resume
<br>> Enhanced professional skills
<br>> Real time exploration to corporate world
</p>

          </div>
        </div>
</div>
  </div>
      
   
</section>

<section class="abt2">
  <h1 class="feature_heading2 educot-logo" >F.A.Q.</h1>
  <div style="margin:20px;">
        <h3>1. Why register with Educot?</h3>
        <p class="lead mb-4">Educot.com helps you find the right job matching your aspirations and top universities. Registering with Educot.com enables you to: <br>
        
1-  Get access to our knowledge bank.<br>
2-  Can increase your skill set through our programs.<br>
3-  Get trained for corporate world.<br>
4-  Test your skills through model test.<br>
        </p>
        </div>
  <div style="margin:20px;">
        <h3 class="feature_heading display-6">2. How can I post my resume?</h3>
        <h5 class="feature_faq mb-4 " style="color:#424242">You can post resume at your profile page through link for uploading resume. 
        </h5>
        </div>
    
</section>

<section class="integrate">
  <h1 class="card-title" style="color:#ffffff">Want To Show Case Your Skills?</h1>
    <h3 class="card-text" style="color:#ffffff">Upload Your Resume<br/></h3>
    <a href="#" class="btn btn-primary">Upload</a>
</section>
  
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">© 2018 Educot. All Rights Reserved </span>
                    <div><p>Call- 9828093172, 9891619489</p></div>
                </div>
                <div class="col-md-4">
                    <div class="text-center center-block">
       
          
              <a href="https://www.facebook.com/Jump2school/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://www.youtube.com/channel/UCZW65ojZVSWB5Ct9UYZymcg"><i id="social-tw" class="fa fa-youtube-square fa-3x social"></i></a>
              
            </div>
                </div>
        
                <div class="col-md-4">
                  <span>| Design by <a href="https://www.facebook.com/aman.r.singh.50">Advanced Tribe</a></span>
                  <div><p>Mail us at enquiry@educot.com</p></div>
                </div>
            </div>
        </div>
    </footer>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
      <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
      
       <script type="text/javascript">
    function checkScroll(){
    var startY = $('.navbar').height() * 2; //The point where the navbar changes in px

        if($(window).scrollTop() > startY){
            $('.navbar').addClass("scrolled");
        }else{
            $('.navbar').removeClass("scrolled");
        }
    }
            
    

    if($('.navbar').length > 0){
        $(window).on("scroll load resize", function(){
            checkScroll();
        
        });
    }
  
  $('.navbar-toggler').click(function(){
    var startY = $('.navbar').height() * 2;
    if($(window).scrollTop() < startY){
            $('.navbar').toggleClass("scrolled");
        }   
  });
            
    // typer for hello
    window.onload = function() {
      var elements = document.getElementsByClassName('txt-rotate');
      for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 10px solid #ffffff }";
      document.body.appendChild(css);
    };

    var TxtRotate = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 1) || 1000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) {
        delta /= 2;
      }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 200;
      }

      setTimeout(function() {
        that.tick();
      }, delta);
    };


    </script>
    </body>
</html> 