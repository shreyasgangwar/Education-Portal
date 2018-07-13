<?php
session_start();
error_reporting(0);
require_once ('conn.php');

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
                      <i class="fa fa-book" aria-hidden="true"></i>Programs offered
                    </a>
                    <div class="dropdown-menu row" aria-labelledby="navbarDropdown">
            <div class="container">
            <div class="row">
              <div class="col-md-3">
                <span class="text-uppercase">Programs </span>
                <div class="dropdown-divider"></div>
                <ul class="nav flex-column">
                <li class="dropdown-item">
                  <a class="" href="#">Educot's placement program</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Educot's skill development program</a>
                </li>
                <li class="dropdown-item">
                  <a class="" href="#">Educot's School student internship program</a>
                </li>
                

                </ul>
              </div>
              
            </div>
            </div>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item disabled" href="#">More Programs coming soon</a>
                    </div>
                  </li>

                  <li class="nav-item">

                      <a class="nav-link" href="hire.php"><i class="fa fa-superpowers" aria-hidden="true"></i> Hire Talent</a>

                  </li>


                  <li class="nav-item">

                      <a class="nav-link divider" href="instructorRegister.php"><i class="fa fa-envelope" aria-hidden="true"></i> Instructors</a>

                  </li>
                  <?php if(null==$_SESSION){?>
                      <a href="login.php"  class="btn btn-primary" type="button">Login/Sign Up</a>
                  <?php } else { ?>

                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 40px">
                              <i class="fa fa-user" aria-hidden="true"></i> ACCOUNT
                          </a>

                          <div class="dropdown-menu row" aria-labelledby="navbarDropdown">
                              <div class="container">
                                  <div class="row">
                                      <div class="col-md-3">
                                          <span class="text-uppercase">DETAILS</span>
                                          <div class="dropdown-divider"></div>
                                          <ul class="nav flex-column">
                                              <li class="dropdown-item">
                                                  <a class="" href="logout.php">Logout</a>
                                              </li>
                                              <li class="dropdown-item">
                                                  <a class="" href="#">Recent Details</a>
                                              </li>

                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </li><?php } ?>

              </ul>
          </div>

      </nav>

	 <header class="intro">
		<div class="intro-body">

						<!-- start typer hello  -->
						<div class="brand-heading" >

              <a class="navbar-brand" href="index.php"><img src="images/educot-brand-heading.png" style="" class="image-responsive brand-img"></a>

            </div>
						<h2 class="intro-text">Where you <span class="txt-rotate" data-period="100" data-rotate='[ "learn.", "enhance.", "leap." ]'></span></h2>
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

				<div width="100%" height="100%" class="feature"><img class="img-responsive" src="images/search.svg" alt="logo"></div>
				<div class="card-body">
				  <h5 class="card-title">JOBS/ INTERNSHIP/ TRAINING</h5>
				  <p class="card-text">Seek to embark in real corporate world</p>
				  <a href="jobsInternShip.php" class="btn btn-danger">Explore here</a>
				</div>
			  </div>
			  <div class="card text-center">

        <div width="100%" height="100%" class="feature"><img class="img-responsive" src="images/skill.svg" alt="logo"></div>
        <div class="card-body">
          <h5 class="card-title">SKILL DEVELOPMENT PROGRAMS</h5>
          <p class="card-text">Want to devlop set of skills for attractive resume then</p>
          <a href="programOverview.php" class="btn btn-danger">Bright Future is Waiting</a>
        </div>
        </div>
			  <div class="card text-center">

        <div width="100%" height="100%" class="feature"><img class="img-responsive" src="images/modal_exam.svg" alt="logo"></div>
        <div class="card-body">
          <h5 class="card-title">MODEL TEST</h5>
          <p class="card-text">If you have confidence in your skills then</p>
          <a href="jobsInternShip.php" class="btn btn-danger">Take Test</a>
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
        <h3 class="feature_heading display-6">1.  Why should you register with <span class="educot-logo">educot.com</span>?</h3>
        <h5 class="feature_faq mb-4 " style="color:#424242">Educot.com helps you find the right job matching your aspirations and top universities. Registering with Educot.com enables you to: <br>
1-  Get access to our knowledge bank.<br>
2-  Can increase your skill set through our programs.<br>
3-  Get trained for corporate world.<br>
4-  Test your skills through model test.<br>
        </h5>
        </div>
  <div style="margin:20px;">
        <h3 class="feature_heading display-6">2.  How can I post my resume?</h3>
        <h5 class="feature_faq mb-4 " style="color:#424242">You can post resume at your profile page through link for uploading resume.
        </h5>
        </div>

</section>

<section class="integrate">
	<h1 class="card-title" style="color:#ffffff">Want to showcase your skill set</h1>
    <h3 class="card-text" style="color:#ffffff">Upload your resume<br/></h3>
    <a href="#" class="btn btn-primary">Upload</a>
</section>

<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">© 2018 Educot. All Rights Reserved </span>
                    <div><h6>contact us: </h6><p style="font-size:60%;">Call us at 9828093172, 9891619489,<br/>Mail us at enquiry@educot.com</p></div>
                </div>
                <div class="col-md-4">
                    <div class="text-center center-block">


							<a href="https://www.facebook.com/Jump2school/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
							<a href="https://www.youtube.com/channel/UCZW65ojZVSWB5Ct9UYZymcg"><i id="social-tw" class="fa fa-youtube-square fa-3x social"></i></a>

						</div>
                </div>

                <div class="col-md-4">
					<span>| Design by <a href="https://www.facebook.com/aman.r.singh.50">Advanced Tribe</a></span>
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
