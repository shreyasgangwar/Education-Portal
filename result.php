<?php
   if (version_compare(PHP_VERSION, '5.4.0', '<')) {
        if(session_id() == '') {session_start();}
    } else  {
       if (session_status() == PHP_SESSION_NONE) {session_start();}
    }
?>
<html>
    <head>
        <title> Result </title>

        <script type="text/javascript" src="jquery.min.js"></script>
        
        <link rel="stylesheet" href="style/slider-def.css">
        <link href="css/main.css" rel="stylesheet" type="text/css">
        
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
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
 <style>

        .navbar {
            
            background: #F44336 !important;
            background: rgba(0, 0, 0, 0.78); /*NON-IE*/
            
        }
        footer{
            background: #ffffff;
        }
        body{
            background: #cb2d3e;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #9C27B0, #F44336);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #9C27B0, #F44336); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        body{
        background-size: cover;
              font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        }
     
     .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position:relative;

}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #F44336;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}

@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

     
     .row{
         
        width: 100%;
         margin-left: 10px;
         margin-top: 10px;
         margin-right: 10px;
         margin-bottom: 10px;  
      
     }
  .column {
    float: left;
    width: 60%;
}

     
     
     .col-sm-3{
         padding: 10px;
         border-top-left-radius: 15px;
         border-top-right-radius: 15px;
         border-bottom-left-radius: 15px; 
         border-bottom-right-radius: 15px;
         border: 1px solid white; 
         color: aliceblue;
         
        
     }
/* Clear floats after the c
     olumns */
.row:after {
    content: "";
    display: table;
    clear: both;
}          
     
      {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: right;
    width: 50%;
    height: auto;
    padding: 15px;
     }

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
/* Style the buttons */
.btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: #f1f1f1;
    cursor: pointer;
}

.btn:hover {
    background-color: #ddd;
}

.btn.active {
    background-color: #666;
    color: white;
}
     .abt2{
background: #ffffff;                
margin-left: 15%;
margin-right: 15%;
margin-top: 8%;
margin-bottom: 8%; 
padding: 10px;
box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.2), 0 9px 30px 0 rgba(0, 0, 0, 0.50);
border-radius: 20px;
}
    
 .col-md-4{
 color: aliceblue;
 }
 </style>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 

    </head>
<body>
    
    
     <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse">
 
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    
              <span class="navbar-toggler-icon"></span>
  
          </button>
          
            <div class="container">
            <div class="row">
            <a class="navbar-brand" href="home.php"><img class="img-responsive" src="images/logo.png" alt="logo"></a>
            <h2 style="color:white;" class="educot-logo">educot</h2>
            </div></div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
              <ul class="navbar-nav ml-auto">
      
                  <li class="nav-item active">
        
                      <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a>
      
                  </li>
      
                 <li class="nav-item active dropdown">
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
      
                  <li class="nav-item active">
       
                      <a class="nav-link" href="aboutus.php"><i class="fa fa-superpowers" aria-hidden="true"></i>About Us</a>
      
                  </li>
                  
                  <li class="nav-item active">
       
                      <a class="nav-link divider" href="contactus.php"><i class="fa fa-envelope" aria-hidden="true"></i> Contact Us</a>
                      
                  </li>              
              </ul>
            <a href="<?php if(null!=$_SESSION){echo 'logout.php';} else{ echo ('login.php');} ?>" class="btn btn-primary" type="button"><?php if(null!=$_SESSION){echo 'logout';} else{ echo ('Login/Sign-up');} ?>
            </a>
          </div>
    </nav>
    
    <section class="login-section">
    <br/>
    <div class="abt2">             
    <div class="result-background">
        <div class=" result" style="background: #fff">
        <div class="container text-center">
             <a class="navbar-brand" ><img src="images/educot-brand-heading.png" style="" class="image-responsive brand-img"></a>
            <div>
                <h1><b>RESULT</b></h1>
            </div>
            <br/><br/>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" align="left">
                    <div class="progress blue">
                        <span class="progress-left">
                          <span class="progress-bar" ></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                        <div class="progress-value">90%</div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br/>

            <div class="row">  
                <div class="col-md-3"></div> 
                <div  class="col-md-3 col-sm-3" style="background-color:#F44336;" >
                <h5 align="left">Total Questions :</h5>  
                </div>
                <div  class="col-md-3 col-sm-3" style="background-color:#44484b;">
                <h5 align="left">Correct :</h5>   
                </div>                
                <div class="col-md-3"></div> 
            </div>
            <div class="row">
                <div class="col-md-3"></div> 
                <div class="col-md-3 col-sm-3" style="background-color:#F44336;">
                <h5 align="left">Incorrect :</h5>         
                </div>
                <div  class="col-md-3 col-sm-3" style="background-color:#44484b;">  
                <h5 align="left">Unanswered :</h5>     
                </div>
                <div class="col-md-3"></div>                 
            </div>
            <br/>
        </div>
        </div>
    </div>
</div>



  <br/><br/>

      <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4" style="color: #000">
                    <span class="copyright">© 2018 Educot. All Rights Reserved </span>
                    <div><h5>contact us: </h5><p>Call us at 9828093172, 9891619489,<br/>Mail us at enquiry@educot.com</p></div>
             
                </div>
                <div class="col-md-4">
                    <div class="text-center center-block">
       
                    
                            <a href="https://www.facebook.com/Jump2school/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
                            <a href="https://www.youtube.com/channel/UCZW65ojZVSWB5Ct9UYZymcg"><i id="social-tw" class="fa fa-youtube-square fa-3x social"></i></a>
                           
                    </div>
                </div>
               
               <div class="col-md-4" style="color: #000">
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
      //signup/login
        $(".toggleForms").click(function() {
            
            
        });
    
    $("#student-signup").click(function(){
        $("#student-signup").hide();
        $("#job-signup").hide();
        $(".student-signup-form").show();
    });
    $("#job-signup").click(function(){
        $("#student-signup").hide();
        $("#job-signup").hide();
        $(".job-signup-form").show();
    });

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

    <script>
    // Get the elements with class="column"
    var elements = document.getElementsByClassName("column");

    // Declare a loop variable
    var i;

    // List View
    function listView() {
        for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "100%";
        }
    }

    // Grid View
    function gridView() {
         for (i = 0; i < elements.length; i++) {
            elements[i].style.width = "50%";
        }
    }

    /* Optional: Add active class to the current button (highlight it) */
    var container = document.getElementById("btnContainer");
    var btns = container.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
    }
    </script>

  </body>
</html>