<?php
require_once ('conn.php');
$error=null;
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // username and password sent from form

    $email = mysqli_real_escape_string($link,$_POST['email']);
    $pass = md5(mysqli_real_escape_string($link,$_POST['password']));
    //var_dump($pass);
    $sql = "SELECT id FROM user WHERE (email = '$email' and password = '$pass')";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
    $error.="";
    if($row==null)
    {
        $sql = "SELECT company_id FROM hire WHERE (company_email = '$email' and password = '$pass')";
        $result = mysqli_query($link,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $active = $row['active'];
        $count = mysqli_num_rows($result);
        if($count == 1) {
            session_start("email");
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;
            if(isset($_POST['remember']))
            {
                setcookie('email',$email,'time()*60*60*7');
                setcookie('password',$pass,'time()*60*60*7');
            }
            header("location: company.php");
        }
        else
        {
            $error.="";
            $sql = "SELECT instructor_id FROM instructor WHERE (email = '$email' and password = '$pass')";
            $result = mysqli_query($link,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $active = $row['active'];
            $count = mysqli_num_rows($result);
            if($count == 1)
            {
                session_start("email");
                $_SESSION['email'] = $email;
                $_SESSION['loggedin'] = true;
                if(isset($_POST['remember']))
                {
                    setcookie('email',$email,'time()*60*60*7');
                    setcookie('password',$pass,'time()*60*60*7');
                }
                header("location: instructorDashboard.php");
            }
            else
            {
                $error.="Invalid User name or Password";
            }
        }
    }
    else
    {
        $count = mysqli_num_rows($result);
        //var_dump($count);
        if($count == 1)
        {
            session_start("email");
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;
            if(isset($_POST['remember']))
            {
                setcookie('email',$email,'time()*60*60*7');
                setcookie('password',$pass,'time()*60*60*7');
            }
            header("location: studentDashboard.php");
        }
    }
}
?>
<html>
<head>
    <title>Login to Knowledge</title>

    <script type="text/javascript" src="jquery.min.js"></script>

    <link rel="stylesheet" href="style/slider-def.css">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">

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
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <style>
        body{

            font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        }
        .navbar {

            background: #F44336 !important;
            background: rgba(0, 0, 0, 0.78); //NON-IE

        }
        footer{
            background: #ffffff;
        }

    </style>
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
<section class="login-section">
    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-6 logo-login"><img src="images/educot-brand-heading.png" style="width:100%" class="image-responsive">


            </div>
            <div class="col-md-6">
                <form class="form-signin" id = "logInForm" method="post" enctype="multipart/form-data">
                    <h2 class="form-signin-heading">Please sign in</h2>
                    <?php
                    if($error!="")
                    {
                        echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                    }
                    ?>
                    <label for="inputEmail" class="sr-only">Email address</label>

                    <input type="email" name="email" id="inputEmail" class="form-control sign-input" placeholder="Email address" required autofocus>

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control sign-input" style="width:70%" placeholder="Password" required>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" name="remember"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-outline-danger" name="submit_l" type="submit">Sign in</button>
                    <div><br/><p>New to us? <a class="btn btn-primary" href="signup.php" role="button">Sign Up</a></p></div>
                </form>

            </div>
        </div>

    </div> <!-- /container -->
</section>
<br/><br/>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">© 2018 Educot. All Rights Reserved </span>
                <div><h5>contact us: </h5><p>Call us at 9828093172, 9891619489,<br/>Mail us at enquiry@educot.com</p></div>
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
    //signup/login
    $(".toggleForms").click(function() {

        $("#signUpForm").toggle();
        $("#logInForm").toggle();


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
</body>
</html>