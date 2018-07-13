<?php
session_start();
error_reporting(0);
include('includes/config.php');



?>
<html>
    <head>
        <title>Jump 2 School</title>
 
        <script type="text/javascript" src="jquery.min.js"></script>
        
        <link rel="stylesheet" href="style/slider-def.css">
        
        <style type="text/css">
            body{
                
                margin: 0px;
                font-size: 0px;
                padding: 0px;
                background-color: #A7FFEB;
                
            }
        
            .navbar {
            -webkit-transition: all 0.6s ease-out;
            -moz-transition: all 0.6s ease-out;
            -o-transition: all 0.6s ease-out;
            -ms-transition: all 0.6s ease-out;
            transition: all 0.6s ease-out;
            background: rgba(0, 0, 0, 0) !important;
        }
        
        @media (max-width: 768px) {
            #heading {
              margin-top:10px !important;
            }
            
            .booktext{
                font-size: 30px !important;
            }
        }

        .navbar.scrolled {
            background: #008975 !important; //IE
            background: rgba(0, 0, 0, 0.78); //NON-IE
          color:#000000
        }
          
		
		/*/ start intro /*/

		.intro {
			display: table;
			width: 100%;
			height: 100%;
			text-align: center;
			color: white;
			background: url(images/wall.jpg) ;
			background-size: cover;
			-o-background-size: cover;
            position: relative;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
			
			box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.50);


		}

		.intro .intro-body {
			display: table-cell;
			vertical-align: middle;
			padding: 15% 0;
			background: rgba(0, 0, 0, 0.5);
		}

		.brand-heading {
			font-size: 50px;
			font-family: 'Montserrat', sans-serif;
			font-weight: 700;
			text-align: left;
			color: #ffffff;
		}

		.intro .intro-body .intro-text {
			font-size: 25px;
			font-family: 'Montserrat', sans-serif;
			text-align: left;
		}

		span.city {
			background-color: #757575;
			color: #fff;
			border-radius: 4px;
			width: 15px;
		}

		@media (min-width: 768px) {
			.intro {
				height: 100%;
				padding: 0;
			}
			.intro .intro-body .brand-heading {
				font-size: 50px;
			}
			.intro .intro-body .intro-text {
				font-size: 25px;
			}
		}

		.mouse-warp {
			margin: 40px auto;
			display: block;
			width: 28px;
			opacity: 0.5;
		}

		.mouse {
			width: 28px;
			height: 50px;
			border: 2px solid #fff;
			border-radius: 14px;
		}

		.scroll {
			width: 4px;
			height: 4px;
			border-radius: 2px;
			background: #fff;
			position: relative;
			left: 10px;
			-webkit-animation: scrolls 1.3s ease-out infinite;
		}

		@-webkit-keyframes scrolls {
			0% {
				top: 8px;
				opacity: 0;
				-webkit-transform: scaleY(1) scaleX(1);
			}
			5% {
				top: 8px;
				opacity: 0.8;
				-webkit-transform: scaleY(1.2) scaleX(1.2);
			}
			10% {
				top: 8px;
				opacity: 1;
				-webkit-transform: scaleY(1.6) scaleX(1.6);
			}
			15% {
				top: 8px;
				opacity: 1;
				-webkit-transform: scaleY(1.2) scaleX(1.2);
			}
			20% {
				top: 8px;
				opacity: 1;
				-webkit-transform: scaleY(1.2) scaleX(1.2);
			}
			30% {
				top: 15px;
				opacity: 1;
				-webkit-transform: scaleY(1.2) scaleX(1.2);
			}
			100% {
				top: 30px;
				opacity: 0;
				-webkit-transform: scaleY(1.2) scaleX(0.8);
			}
		}


		/* End Scroll Down Indicator */


		/*/ end intro /*/
		
		/* slider*/
		
	

            #
            {
              background-color: #f2f2f2;
              padding: 0;
              margin: 0;
              margin-bottom: 20px;
              font-family: "Arial";
              box-sizing: border-box;
            }
            
            #ShellHead{
                
                color:#ddd;
                background-color:#ffffff;
                text-align:center;
                padding:5px 5px;
                text-align: justify;
                
            }
            
            #FeturedShell{
                
                margin-top: 20px;
                color: #424242;
                font-size: 25px;
                text-align: center;
                text-decoration: underline;
                width: 100%;
                font-family: 'Montserrat', sans-serif;
                
            }
            
            #Shellp{
                
                text-align: right;
                text-decoration: underline;
                color: #303030;
                margin-right: 20px;
                
            }
            
            #Shellp:hover{
                
                color: #424242;
                
            }
            
            #slider{
              position: relative;
              overflow: hidden;
              width: 90vw;
              height: 400px;
              margin-left: auto;
              margin-right: auto;
              background-color: #ffffff;    
            }
            #products{
              position: relative;
              display: flex;
              width: 100%;
              height: 100%;
              align-items: center;
              padding: 0 25px;
            }
            #products>article:first-child{
              margin-left: 0;
            }
            #products>article{
              position: relative;
              min-width: 200px;
              min-height: 200px;
              margin-left: 25px;
              font-size: 17px;
              cursor: pointer;
              background-color: rgba(255,0,0,.5);
              transition: all .3s ease-in-out;
            }
            #products>article.active{
              min-width: 300px;
              min-height: 300px;
              font-size: 20px;
                box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 9px 30px 0 rgba(0, 0, 0, 0.19);
    
            }
            #picText{
              position: absolute;
              color: #fff;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%) rotate(-45deg);
            }
            #id{
              color: #fff;
              margin: 15px;
            }


            #gofwd,
            #gobwd{
              position: absolute;
              top: 50%;
              padding: 50px 15px;
              z-index: 5;
              cursor: pointer;
              background-color: rgba(255,255,255,.6);
              transform: translateY(-50%);
              transition: all .3s ease-out;
            }
            #gofwd:hover,
            #gobwd:hover{
              background-color: #fff;
            }
            #gobwd{
              left: 0;
            }
            #gofwd{
              right: 0;
            }
            
            
            
            
            .card{
                
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				padding: 10px;
                
            }
			
			.card:hover{
				
				box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 9px 30px 0 rgba(0, 0, 0, 0.50);
			}
            
            .caption {
              position: absolute;
              left: 0;
              width: 100%;
              text-align: left;
              color: #000;
            }
            
            .bgimg-2{
                
                   background-image: url("images/book.jpg");
                min-height: 700px;
                position: relative;
                  background-attachment: fixed;
                  background-position: center;
                  background-repeat: no-repeat;
                  background-size: cover;

                
            }
            
            .BookHead{
                 color:#ddd;
                background-color:#303030;
                text-align:center;
                padding:5px 5px;
                text-align: justify;
            }
            
            #Bookp{
                
                text-align: right;
                text-decoration: underline;
                color: #f2f2f2;
                margin-right: 20px;
                
            }
            
            #Bookp:hover{
                
                color: #ffffff;
                
            }
            
            .FeturedBooks{
                margin-top: 20px;
                color: #ffffff;
                font-size: 25px;
                text-align: center;
                text-decoration: underline;
                width: 100%;
                font-family: 'Merienda', cursive;
            }
            
            .booktext{
                
                margin-left: 20px;
                font-size: 50px;
                font-family: 'Shadows Into Light', cursive;
                color: #000000;
                
            }
            
            #book{
                
                position:absolute;
                top: 100px;
                left: 10%;
            }
   
   

            .offers{
                
             margin: 100px 20px;
             
                
            }
            
            .feature_heading{
                text-align: center;
                align-content: center;
                margin: 25px;
                
                
            }
            
            .fa-suitcase{
                color: #ffffff;
                margin: 10px;
            }
            
            .feature{
                background: linear-gradient(to top left, #424242, #00bf9a);
            }
            
            
            .fa-thumbs-o-up{
                color: #ffffff;
                margin: 10px;
            }
            
            .fa-play{
                color: #ffffff;
                margin: 10px;
            }
			.feature_class{
				
				padding: 20px;
				margin-left: 30px;
				margin-right:30px;
				margin-bottom: 30px;
			}
			
			.abt{
				background: #EEEEEE;
				margin: 30px;
				padding: 10px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			
			.integrate{
				background-image: url("images/abt2.jpg");

				/* Set a specific height */
				
				
				/* Create the parallax scrolling effect */
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				align-content:center;
				text-align:center;
				margin: 30px;
				padding: 30px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);	
				vertical-align: center;
			}
			/* Footer */
			footer {
				padding: 25px 0;
				text-align: center;
			}
          
          footer a{
          	color: #00bf9a;
          }

			footer span.copyright {
				text-transform: none;
				line-height: 40px;
			}

			footer ul.quicklinks {
				margin-bottom: 0
				text-transform: none;
				line-height: 40px;
			}
          
          .btn-primary{
          	background: #00bf9a !important;
            border-color: #00aa8d !important;
          }

.social:hover {
     -webkit-transform: scale(1.1);
     -moz-transform: scale(1.1);
     -o-transform: scale(1.1);
 }
 .social {
     -webkit-transform: scale(0.8);
     /* Browser Variations: */
     
     -moz-transform: scale(0.8);
     -o-transform: scale(0.8);
     -webkit-transition-duration: 0.5s;
     -moz-transition-duration: 0.5s;
     -o-transition-duration: 0.5s;
 }

/*
    Multicoloured Hover Variations
*/
 
 #social-fb:hover {
     color: #3B5998;
 }
 #social-tw:hover {
     color: #d34836;
 }
 #social-gp:hover {
     color: #d34836;
 }
 #social-em:hover {
     color: #f39c12;
 }
        </style>
        <link href="main1.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://use.fontawesome.com/9adc8cef54.js"></script>
    </head>
<body>
    
    
   <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-faded">
 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
              <span class="navbar-toggler-icon"></span>
  
          </button>
  
          <a class="navbar-brand" href="home.php"><img class="img-responsive" src="images/logo.png" alt="logo"></a>
			<h4 style="color:white;">Jump 2 School</h4>
  
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
              <ul class="navbar-nav ml-auto">
      
                  <li class="nav-item active">
        
                      <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a>
      
                  </li>
      
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-book" aria-hidden="true"></i>Subjects/Classes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
      
                  <li class="nav-item">
       
                      <a class="nav-link" href="#"><i class="fa fa-superpowers" aria-hidden="true"></i>About Us</a>
      
                  </li>
                  
                  <li class="nav-item">
       
                      <a class="nav-link" href="#"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a>
      
                  </li>              
				  
				  <button class="btn btn-success" type="button">Login</button>
				  <button class="btn btn-dark" type="button">Sign Up</button>

                  
                  

   
              </ul>
  
          </div>

      </nav>
	  
	  <header class="intro">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- start typer hello  -->
						<div class="brand-heading">
							<span class="txt-rotate" data-period="100" data-rotate='[ "Not understanding problem ?", "Complicated ?", "Need someone to explain ?" ]'></span>
						</div>
						<!-- end typer hello -->
						<p class="intro-text">Then handshake with JUMP 2 SCHOOL<br/>
						To path of simplicity over difficulty.<br/>We will tell you complex things in very simpler manner.<br/>
						We will provide you interactive self study kit, prep test and lessons for different exciting and interesting<br/>
						courses like music, computing, languages and many more for them whom want to go with their passion and interests.</p>
						
					</div>
					<!-- end column wrapping -->
				</div>
				<!-- end row header -->
			</div>
			<!-- end container header -->
		</div>
		<!-- end intro body -->
	</header>
    
        

	    <section class="feature_class">
        <h1 class="feature_heading">Features</h1>
        <h4 class="feature_heading">With Our Top qulaity support we help you achieve your dreams</h4>
			<div class="card-deck">
			  <div class="card text-center">
			  
				<h2 width="140" height="140" class="feature"><i class="fa fa-suitcase fa-5x" aria-hidden="true"></i></h2>
				<div class="card-body">
				  <h2 class="card-title">Study Kit</h2>
				  <p class="card-text">We provide best study kits for you, So that you could solve any problem with ease</p>
				  
				</div>
			  </div>
			  <div class="card text-center">
				<h2 width="140" height="140" class="feature"><i class="fa fa-thumbs-o-up fa-5x" aria-hidden="true"></i></h2>
				<div class="card-body">
				  <h2 class="card-title">Competetive Exam Prep</h2>
				  <p class="card-text">We take Exam regularly so that you can keep track of your knowledge</p>
				  
				</div>
			  </div>
			  <div class="card text-center">
				<h2 width="140" height="140" class="feature"><i class="fa fa-play fa-5x" aria-hidden="true"></i></h2>
				<div class="card-body">
				  <h2 class="card-title">Video Lectures</h2>
				  <p class="card-text">We provide high Quality Video to solve all your doubts</p>
				  
				</div>
			  </div>
		</div>
	</section>
		<section class="abt"> 
		<h1 class="feature_heading">What is Jump 2 School ?</h1>
        <h4 class="feature_heading">The answer is below </h4>
		 <div class="block block-secondary app-iphone-block">
		  <div class="container">
			<div class="row app-align-center">

			  <div class="col-sm-5 hidden-sm-down">
				<img class="app-iphone" src="images/abt1.jpg" style="width: 100%;">
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
<br/><br/>
		<div class="block block-inverse block-secondary app-code-block">
		  <div class="container">
			<div class="row app-align-center">
			  <div class="col-md-5 push-md-7">
				<img class="app-iphone" src="images/studykit.jpg" style="width: 100%;">
			  </div>

			  <div class="col-md-6 pull-md-5">
				<h6 class="text-muted text-uppercase">Easy development</h6>
				<h3>Natural language queries make mining data easy for anyone.</h3>
				<p class="lead mb-4 text-muted">Rather than force everyone at your company to learn incredibly difficult terminal commands, we allow anyone to query the data with natural language to return data.</p>
				<button class="btn btn-secondary btn-lg btn-borderless">
				  Read our docs
				</button>
			  </div>
			</div>
		  </div>
		</div>
		<br/><br/>
		 <div class="block block-secondary app-iphone-block">
		  <div class="container">
			<div class="row app-align-center">

			  <div class="col-sm-5 hidden-sm-down">
				<img class="app-iphone" src="images/abt3.jpg" style="width: 100%;">
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

<section class="integrate">
	<h1 class="card-title" style="color:#ffffff">Want to integrate with J2S</h1>
    <h3 class="card-text" style="color:#ffffff">Rise with Us by giving your students our tutorials <br/> Register Your School or institute by Clicking below</h3>
    <a href="#" class="btn btn-primary btn-lg">Register</a>
</section>
	
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">© 2017 Jump 2 School. All Rights Reserved </span>
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
                  //slider 
        $("#products>article").on("click", function(){
          $("#products>article").removeClass("active");
          $(this).addClass("active");
          animate();
        });

        function getActiveArticle(){ 
          var x = 0;
          $("#products>article").each(function(e){
            if($("#products>article").eq(e).hasClass("active")){
              x = e;
              return false;      
            }
          });
          return x;
        }

        function gofwd(){
          var activeIndex = getActiveArticle();
          var minArticles = 0;
          var maxArticles = $("#products>article").length - 1;
          if(activeIndex >= maxArticles){
            activeIndex = minArticles-1;
          }

          $("#products>article").removeClass("active");
          $("#products>article").eq(activeIndex+1).addClass("active");

          animate();
        }

        function gobwd(){
          var activeIndex = getActiveArticle();
          var minArticles = 1;
          var maxArticles = $("#products>article").length;

          $("#products>article").removeClass("active");
          $("#products>article").eq(activeIndex-1).addClass("active");

          animate();
        }

        $(document).ready(function(){
          animate();
        });

        function animate(){

          var articleIndex = getActiveArticle();
          var totalMargin = 25 * (articleIndex+1) - (25*(articleIndex));

          var articlePosition = Math.floor($("#products>article").eq(articleIndex).offset().left - $("#products").offset().left) - totalMargin;
          var productsHalfWidth = $("#products").width()/2;
          if(articleIndex == 0){
            var halfWidth = 150;
          }else{
            var halfWidth = 100;
          }
          var finalPosition = productsHalfWidth - articlePosition - halfWidth;
          $("#products").animate({
            "left": finalPosition,
          }, {
            duration: 500,
            easing: 'easeOutBack',
          });

        }

        $(window).on("resize", function(){
          animate();
        });

        var autoPlay = setInterval(function(){
          gofwd();
        }, 1500);

        $("#slider").on("mouseenter", function(){
          clearInterval(autoPlay);
        });
        $("#slider").on("mouseleave", function(){
          autoPlay = setInterval(function(){
            gofwd();
          }, 1500);
        });
          
        var TIMEOUT = 6000;
 
        var interval = setInterval(handleNext, TIMEOUT);

        function handleNext() {

          var $radios = $('input[class*="slide-radio"]');
          var $activeRadio = $('input[class*="slide-radio"]:checked');

          var currentIndex = $activeRadio.index();
          var radiosLength = $radios.length;

          $radios
            .attr('checked', false);

          if (currentIndex >= radiosLength - 1) {

            $radios
              .first()
              .attr('checked', true);

          } else {

            $activeRadio
              .next('input[class*="slide-radio"]')
              .attr('checked', true);

          }

        }
		

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