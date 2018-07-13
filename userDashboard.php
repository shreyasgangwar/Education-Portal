<html>
<head>
    <title>Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/toolkit.css" rel="stylesheet">
    
    <link href="css/application.css" rel="stylesheet">


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
        body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
        }
        body{
             background: #fff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #ef473a, #fff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #ef473a, #fff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        }
        .navbar {

            background: #F44336 !important;
            background: rgba(0, 0, 0, 0.78); /*NON-IE*/

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
            <a class="navbar-brand" href="home.php"><img class="img-responsive" src="images/logo.png" alt="logo"></a>
            <h2 style="color:white;" class="educot-logo">educot</h2>
        </div>
    </div>
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
                </li>
        </ul>
    </div>
</nav>
<br/><br/>

<div class="profile-header" style="background: #000">
  <div class="container">
    <div class="container-inner">
      <img class="rounded-circle media-object" src="images/educot-logo-red.png">
      <h3 class="profile-header-user">Dave Gamache</h3>
      <p class="profile-header-bio">
         <div class="row">
            <div class="col-md-3">
            <h5><strong>College/School:</strong></h5>
            </div>
            <div class="col-md-4"></div> <text> abc@g.com</text></h5>
        </div>
        <div class="row">
            <div class="col-md-3">
            <h5><strong>Contact:</strong></h5>
            </div>
            <div class="col-md-4"></div> <number> 9100000000</number></h5>
        </div>
        <div class="row">
            <div class="col-md-3">
            <h5><strong>Email:</strong></h5>
            </div>
            <div class="col-md-4"></div> <text> abc@g.com</text></h5>
        </div>
      </p>
    </div>
  </div>

  <nav class="profile-header-nav">
    <ul class="nav nav-tabs justify-content-center">
      <li class="nav-item active">
        <a class="nav-link" href="#">Jobs Applied</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Courses Enrolled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Personal Details</a>
      </li>
    </ul>
  </nav>
</div>

<div class="container my-4" data-grid="images">
  <div>
    <img data-width="640" data-height="400" data-action="zoom" src="../assets/img/instagram_5.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_6.jpg">
  </div>

  <div>
    <img data-width="640" data-height="640" data-action="zoom" src="../assets/img/instagram_7.jpg">
  </div>
</div>

<br/><br/>
</body>
<footer>
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


    <script src="js/jquery.min.js"></script>    
    <script src="js/tether.min.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/toolkit.js"></script>
    <script src="js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
</body>
</html>