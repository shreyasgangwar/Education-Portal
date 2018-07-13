<html>
<head>
    <title>Exam Question Details</title>

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

        .custab{
        border: 1px solid #ccc;
        padding: 5px;
        margin: 5% 0;
        box-shadow: 3px 3px 2px #ccc;
        transition: 0.5s;
        }
       .custab:hover{
        box-shadow: 3px 3px 0px transparent;
        transition: 0.5s;
        }

        body{

            font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        }
        .navbar {

            background: #F44336 !important;
            background: rgba(0, 0, 0, 0.78); /*NON-IE*/

        }
        footer{
            background: #ffffff;
        }
        body{
            background: #cb2d3e;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #ef473a, #cb2d3e);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #ef473a, #cb2d3e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

        .question_form{
            padding-left: 5%;
            padding-right: 5%;
            padding-top: 10px;
            padding-bottom: 10px;
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
            <div class="col-md-12 text-center signup2">
                <img src="images/educot-brand-heading.png" style="width:50%" class="image-responsive">
                <form method="post" id = "signUpForm" class="form-signin" enctype="multipart/form-data">
                    <div>
                        <?php

                        if($error!='')
                        {
                            echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                        }
                        ?>
                    </div>
                    <br/><br/>
                    <h2 class="form-signin-heading">Manage Exam Questions Here</h2><br/>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <h4 style="margin-left: 10%; color: #F44336;" align="left" style=""><strong> Test Name- </strong></h4></div>
                        <div class="col-md-4">

                            <h5><?php echo ($exam_name); ?>.</h5>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">
                            <h4 style="margin-left: 10%; color: #F44336;" align="left" style="color: #F44336"><strong> Status- </strong></h4></div>
                        <div class="col-md-4">

                            <h5> <?php echo ($left); ?> Questions left to upload.</h5>        </div><br/>
                    </div>
                    <br/>

                    <div class="container">
                        <div class="row col-md-12 col-md-offset-2 custyle" style="padding-left: 3%">
                        <table class="table table-striped custab">
                        <thead style="color: #b71c1c">
                        <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
                            <tr>
                                <th>No</th>
                                <th>Question</th>
                                <th>Option A</th>
                                <th>Option B</th>
                                <th>Option C</th>
                                <th>Option D</th>
                                <th>Answer</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                                <tr>
                                    <td align="center"><text style="width:2em; margin-top: 5%"><strong> 1 </strong></text></td>
                                    <td><textarea style="width:10em "> </textarea></td>
                                    <td><textarea style="width:6em "> </textarea></td>
                                    <td><textarea style="width:6em "> </textarea></td>
                                    <td><textarea style="width:6em "> </textarea></td>
                                    <td><textarea style="width:6em "> </textarea></td>
                                    <td align="center"><text style="width:4em "><strong> A </strong></text></td>
                                    <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
                                </tr>

                        </table>
                        </div>
                    </div>
   
                    <br/>
                    <button type="submit" class="btn btn-outline-danger btn-lg" name='save' value="1">Submit</button>
                    <button type="button" class="btn btn-outline-danger btn-lg" name='cancel' value="1" style="margin-left: 10%" data-toggle="modal" data-target="#myModal">Discard</button>
                    <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                        
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header" align="left">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h3 class="modal-title" style="color: #b71c1c">Warning!!</h3>
                            </div>
                            <div class="modal-body">
                              <p>Are you sure you want to delete the test?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal" style="background: #F44336; color: #fff">Yes</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                          </div>
                          
                        </div>
                      </div>

                </form>
            </div>
        </div>
    </div> <!-- /container -->
</section>

<br/><br/>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">© 2018 Educot. All Rights Reserved </span>
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

</body>
</html>