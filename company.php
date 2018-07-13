<?php
session_start();
include_once 'conn.php';

if(!isset($_SESSION['email']))
{
    header("location: login.php");
}
else{

    $email=$_SESSION['email'];
    $q2="SELECT company_email From hire WHERE company_email='$email'";
    $r2=mysqli_query($link,$q2);
    $r3=mysqli_fetch_assoc($r2);
    if($r3['company_email']==null){
        header("location: login.php");
    }
    $query="SELECT image_id From hire WHERE company_email='$email'";
    $result=mysqli_query($link,$query);
    $imageid=mysqli_fetch_assoc($result);
    $imageid=$imageid["image_id"];
    $query=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
    $result1=mysqli_fetch_assoc($query);
    $result1=$result1["image_path"];
    $query=mysqli_query($link,"SELECT company_id From hire WHERE company_email='$email'");
    $result2=mysqli_fetch_assoc($query);
    $result3=$result2["company_id"];

    $query1 = mysqli_query($link,"SELECT company_name FROM hire WHERE company_email='$email'");
    $result4 = mysqli_fetch_assoc($query1);
    $result5 = $result4['company_name'];

    if(isset($_POST['submit']))
    {
        $selected_val = "no";
        if(isset($_POST['takeExam'])){
            $selected_val = $_POST['takeExam'];
        }
        
        $sql = "INSERT INTO companyrequirement (domain_name ,salary,experience,duration,no_candidate,takeExam,company_id )
           VALUES ('".$_POST["hiringFor"]."','".$_POST["salary"]."','".$_POST["experience"]."','".$_POST["duration"]."','".$_POST["candidateNo"]."','$selected_val','$result3')";


        if ($link->query($sql) === TRUE)
        {
            if($selected_val =='no'){
            $error.="New record created successfully";
            }
            else{
                header("location: examDetail.php");
                
            }
        }
        else
        {
            $error.="Error: " . $sql . "<br>" . $link->error;
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
            body{
                background-color: #ffffff;
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

                <li class="nav-itemw active dropdown">
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

                    <a class="nav-link" href="hire.php"><i class="fa fa-superpowers" aria-hidden="true"></i> Hire Talent</a>

                </li>


                <li class="nav-item active">

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

    <div class="container" style="margin-top: 10%">
        <div>
            <?php
            if($error!="")
            {
                echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
            }
            ?>
        </div>
        <div class="text-center"><h1>Jobs You Offered on Educot.</h1><br/></div>
   <?php
   $query= "SELECT * FROM companyrequirement WHERE company_id= '$result3'";
   $featured= $link->query($query);
   while($product = mysqli_fetch_assoc($featured)):
       $salary = $product['salary'];
       $experience= $product['experience'];
       $domainname= $product['domain_name'];
       $duration= $product['duration'];
       $candidate= $product['no_candidate'];
       ?>
    <div class="container" >
        <div class="job-card">
            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <img src="<?php echo($result1); ?>" style=" float:left; height:100px; width:100px;margin:10px; border-radius: 50%;"/>
                        <div class="row"><h3 style="padding:5px; margin:5px;"> Company Name:- <?php echo ($result5); ?></h3></div>
                        <div class="row"><h3 style="padding:5px; margin:5px;"> Domain Name:- <?php echo ($domainname); ?></h3></div>
                    </div><br/><hr>
                    <h6 style="padding:5px; margin:5px; color: #F44336; float:left;"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience:- <?php echo $experience; ?></h6>
                    <h6 style="padding:5px; margin:5px; color: #F44336; float:left;"><i class="fa fa-money" aria-hidden="true"></i> Salary:- <?php echo ($salary); ?></h6>
                </div>
                <div class="col-sm-4">
                    <div class="apply-post">
                        <div class="row"><h4>Post available:- <?php echo $candidate; ?></h4></div>
                        <div class="row"><h6>Joining/Duration:-<?php echo $duration; ?></h6></div>
                        <br/>
                        <a class="btn btn-outline-danger" href="signupJob.php" role="button">Applied</a></div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <?php endwhile;?>

    <br/><br/><br/>
    <section class="hire-form-container">
        <div class="hire-form-contain">
            <div class="text-center"><h1>Please fill the Details for the new Job/Internship</h1><br/></div>
            <form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Postion offered" name="hiringFor">

                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" placeholder="Number of candidates" name="candidateNo">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Experience Required" name="experience">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Salary Offered" name="salary">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control" name="takeExam" placeholder="Take Exam on Educot Before Hiring">
                            <option selected>Take Exam on Educot Before Hiring</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Duration" name="duration">
                    </div>

                </div>

                <button type="submit" name="submit" class="btn btn-outline-danger">Submit</button>
            </form>
        </div>
    </section>

    </section>
    <br/>
    </div>
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
    </body>
    </html>
<?php } ?>