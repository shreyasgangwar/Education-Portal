<?php
session_start();
include_once 'conn.php';
?>
<html>
<head>
    <title>Educot-jobs &amp; internships</title>

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
            background: #7b4397;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to bottom, #dc2430, #7b4397);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to bottom, #dc2430, #7b4397); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

        }
        .navbar {


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

<section class="lecture-body">
    <h1 class="lecture-heading">Jobs and Internships</h1><hr>
    <h4 class="lecture-heading">Topic</h4>
    <div class="block block-secondary app-iphone-block">
        <div class="container">
            <div class="row app-align-center">
                <div class="col-sm-12 col-md-9">
                    <?php
                    $query= "SELECT * FROM companyrequirement";
                    $featured= $link->query($query);
                    while($product = mysqli_fetch_assoc($featured)):
                        $companyid = $product['company_id'];
                        $q3 = "SELECT * From hire WHERE company_id='$companyid'";
                        $r4=mysqli_query($link,$q3);
                        $imagei=mysqli_fetch_assoc($r4);
                        $imageid=$imagei["image_id"];
                        $q4=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
                        $r5=mysqli_fetch_assoc($q4);
                        $r5=$r5["image_path"];
                        $companyname = $imagei['company_name'];
                        $des = $imagei['description'];
                        $salary = $product['salary'];
                        $experience= $product['experience'];
                        $domainname= $product['domain_name'];
                        $duration= $product['duration'];
                        $candidate= $product['no_candidate'];
                        $takex = $product['takeExam'];
                        ?>
                        <div class="job-card">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div>
                                        <img src="<?php echo($r5); ?>" style="float:left; height:100px; width:100px;margin:10px; border-radius: 50%;">
                                        <h3 style="padding:5px; margin:5px;"><?php echo($companyname);?></h3>
                                        <h6 style="padding:5px; margin:5px;"><?php echo($des);?></h6>
                                    </div><br/><hr>
                                    <h6 style="padding:5px; margin:5px; color: #F44336; float:left;"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience :<?php echo($experience);?></h6>
                                    <h6 style="padding:5px; margin:5px; color: #F44336; float:left;"><i class="fa fa-money" aria-hidden="true"></i> Salary: <?php echo($salary);?></h6>
                                </div>
                                <div class="col-sm-4">
                                    <div class="apply-post">
                                        <h4><?php echo($domainname);?></h4>
                                        <h6>Joining/Duration: <?php echo($duration);

                                            ?></h6><br/>

                                        <a class="btn btn-outline-danger" href="examInstructions.php<?php
                                        echo "?company_id=".$companyid."&domain_name=".$domainname;
                                        ?>" role="button">
                                            <?php if($takex=='yes'){

                                                echo "Apply for Exam";
                                            }else{
                                                echo "Upload Resume";
                                            }?></a></div>
                                </div>
                            </div>
                        </div>
                        <br/>

                    <?php endwhile;?>
                </div><!--/span-->
                <div class="col col-md-3 sidebar-offcanvas" id="sidebar">
                    <?php
                    if(!isset($_SESSION['email'])){
                        ?>
                        <a href="login.php"  class="btn btn-primary" type="button">Join With Us</a>
                        <?php
                    } else {
                        $email = $_SESSION['email'];
                        $qr = "select * from user where email = '$email'";
                        $re=mysqli_query($link,$qr);
                        $i=mysqli_fetch_assoc($re);
                        $img3 = $i['image_id'];
                        $qr2=mysqli_query($link,"SELECT image_path FROM image WHERE id='$img3'");
                        $re5=mysqli_fetch_assoc($qr2);
                        $re5=$re5["image_path"];
                        ?>

                        <h3>Profile</h3>
                        <div class="card card-outline-danger text-center">
                            <div class="card-block">
                                <img src="<?php echo($re5); ?>" style="height:100px; width:100px; border-radius: 50%; border-color:#FF5252; border-style: solid;" class="card-img-top">
                                <blockquote class="card-blockquote">
                                    <h3><?php echo($i['first_name']); ?></h3>
                                    <h6><?php if($i['experience']!=null) echo "Experience :".($i['experience']); ?></h6>
                                    <h6><?php if($i['skills']!=null) echo "skills :".($i['skills']); ?></h6>
                                    <h6><?php if($i['qualification']!=null) echo "qualification :".($i['qualification']); ?></h6>
                                </blockquote>
                            </div>


                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
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