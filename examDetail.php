<?php
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    if(session_id() == '') {session_start();}
} else  {
    if (session_status() == PHP_SESSION_NONE) {session_start();}
}
include ('excel.php');
if(null==$_SESSION){
   header("location: login.php");
}

else {
$error='';
$name=$exam_for=$desc=$quest=$dur=$v_from=$v_to=$code=$passing=NULL;
include("conn.php");
$email=$_SESSION['email'];
$query="SELECT image_id From hire WHERE company_email='$email'";
$result=mysqli_query($link,$query);
$imageid=mysqli_fetch_assoc($result);
$imageid=$imageid["image_id"];
$query=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
$result1=mysqli_fetch_assoc($query);
$imagepath=$result1["image_path"];
    $query=mysqli_query($link,"SELECT company_id FROM hire WHERE company_email='$email'");
    $result1=mysqli_fetch_assoc($query);
    $Company_tcid=$result1["company_id"];
if(array_key_exists('submit_1' , $_POST)) {
    $name=mysqli_real_escape_string($link, $_POST['name']);
    $exam_for=mysqli_real_escape_string($link, $_POST['exam_for']);
    $desc=mysqli_real_escape_string($link, $_POST['desc']);
    $quest=mysqli_real_escape_string($link, $_POST['quest']);
    if($quest <= 0)
        $error.=' Questions cannot be zero or negative';
    $dur=mysqli_real_escape_string($link, $_POST['dur']);

    $v_from=mysqli_real_escape_string($link, $_POST['v_from']);
    $v_to=mysqli_real_escape_string($link, $_POST['v_to']);

    $code=mysqli_real_escape_string($link, $_POST['code']);
    $passing=mysqli_real_escape_string($link, $_POST['passing']);
    if($passing <= 0 || $passing >100){
        $error.=' Passing criteria cannot be less than zero or above 100';
    }

    $query="SELECT * FROM `exam` WHERE Exam_name = '$name'";
    $result=mysqli_query($link, $query);

    if(mysqli_num_rows($result) != 0){
        $error.=' The Exam Name already exists !';
    }
    else {
        $query="INSERT INTO `exam` (`Exam_id`, `Exam_name`, `subject`, `Exam_description`, `Exam_date`, `Exam_time`, `Exam_from`, `Exam_to`, `Exam_duration`, `Exam_totalQuestion`, `Exam_attempted_student`, `Exam_code`, `Company_tcid` , `passing_criteria`) VALUES (NULL, '$name', '$exam_for', '$desc', '$v_from', '$v_from', '$v_from', '$v_to', '$dur', '$quest', 0, '$code', '$Company_tcid' , '$passing')";
        $result=mysqli_query($link, $query);
        if(!$result) {
            $error.=' There was some error registering. Please try some other time.';
            echo mysqli_error($link);
            exit();
        }
        else{
            $top=true;
            $examid=mysqli_fetch_assoc(mysqli_query($link,"SELECT exam_id FROM exam WHERE Exam_name='$name'"));
            $examid=$examid['exam_id'];
            header("location: examDetail.php?id=$examid");
        }
    }
}
?>
<html>
<head>
    <title>Upload Exam Details</title>

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


        .exam_detail_form{
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 10px;
            padding-bottom: 1px;
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
<?php if(isset($_GET['id']))
{
    if($_GET['id']!=null && $top=true)
    {

?>
    <div class="container login-section card" style="background-color: #ffffff">
        <br><br><br>
        <div class="container">
            <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-9">
                    <div class="fileupload fileupload-new"  align="middle" data-provides="fileupload">
                                        <span class="btn btn-outline-danger btn-file">
                                        <span class="fileupload-new">Upload Excel</span>
                                        <span class="fileupload-exists">Upload Excel</span>
                                        <input type="file"  name="file" id="file">
                                        </span>
                        <span class="fileupload-preview"></span>
                        <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" name='Up' class="btn  btn-sm btn-outline-danger" value="1">Submit</button>
                </div>
            </div>
            </form>
        </div>
        <br>
        <h1 align="middle"><span class="badge badge-secondary" style="color: #eeeeee; background-color: #d9534f">OR</span></h1>
        <br>
       <div align="middle">
           <form><button type="submit" name="manage" class="btn btn-outline-danger" value="1"><h3>Upload Manually</h3></button></form>
       </div>
        <br>
        <br><br>
    </div>
    <br/><br/>
    <footer class="footer">
        <div class=" container">
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
<?php } } else {?>


    <section class="login-section">
        <br/>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center signup2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <div class="col-md- text-center" style="height: 300px; width: 300px">
                                    <img src="<?php echo($imagepath); ?> " style="width: 100% " class="image-responsive">
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <form method="post" id = "signUpForm" class="form-signin" enctype="multipart/form-data">
                        <div>
                            <?php

                            if($error != '')
                            {
                                echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                            }
                            ?>

                        </div>
                        <br/><br/><br/>
                        <h2 class="form-signin-heading">Fill the Exam Details</h2>

                        <div class="exam_detail_form">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam Name </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" id="name" name="name" class="form-control sign-input" placeholder="Exam Name" required autofocus>
                                        <label for="inputEName" class="sr-only">Exam Name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam For </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" id="exam_for" name="exam_for" class="form-control sign-input" placeholder="Exam For" required>
                                        <label for="inputEFor" class="sr-only">Exam For</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam Description </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text-" id="desc" name="desc" class="form-control sign-input" placeholder="Description" required>
                                        <label for="inputEDesc" class="sr-only">Exam Description</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Total Question </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="number" id="quest" name="quest" class="form-control sign-input" placeholder="Total Questions" required min="0">
                                        <label for="inputTQuestion" class="sr-only">Questions</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam Duration (min.)</h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="number" id="dur" name="dur" class="form-control sign-input" placeholder="Duration for Exam" required min="0">
                                        <label for="inputDuration" class="sr-only">Exam Duration</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam Valid From </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="date" id="v_from" name="v_from" class="form-control sign-input" placeholder="Exam From" required>
                                        <label for="inputEFrom" class="sr-only">Exam From</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam Valid Upto </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="date" id="v_to" name="v_to" class="form-control sign-input" placeholder="Exam Upto" required>
                                        <label for="inputEUpto" class="sr-only">Exam Upto</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Exam Code </h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" id="code" name="code" class="form-control sign-input" placeholder="Exam Code" required>
                                        <label for="inputPassPer" class="sr-only">Exam Code</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h5 align="justify"> Passing Criteria ( % )</h5>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="number" id="passing" name="passing" class="form-control sign-input" placeholder="Passing Percent" required min="0" max="100">
                                        <label for="inputPassPer" class="sr-only">Passing Percent</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <button type="submit" class="btn btn-outline-danger" name='submit_1' value="1"><h3>Done</h3></button>

                    </form>
                </div>
            </div>
        </div> <!-- /container -->
    </section>
    <br/><br/>
    <footer>
        <div class=" container">
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
<?php } ?>




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
    var file = undefined;
    ! function(e) {
        var t = function(t, n) {
            this.$element = e(t), this.type = this.$element.data("uploadtype") || (this.$element.find(".thumbnail").length > 0 ? "image" : "file"), this.$input = this.$element.find(":file");
            if (this.$input.length === 0) return;
            this.name = this.$input.attr("name") || n.name, this.$hidden = this.$element.find('input[type=hidden][name="' + this.name + '"]'), this.$hidden.length === 0 && (this.$hidden = e('<input type="hidden" />'), this.$element.prepend(this.$hidden)), this.$preview = this.$element.find(".fileupload-preview");
            var r = this.$preview.css("height");
            this.$preview.css("display") != "inline" && r != "0px" && r != "none" && this.$preview.css("line-height", r), this.original = {
                exists: this.$element.hasClass("fileupload-exists"),
                preview: this.$preview.html(),
                hiddenVal: this.$hidden.val()
            }, this.$remove = this.$element.find('[data-dismiss="fileupload"]'), this.$element.find('[data-trigger="fileupload"]').on("click.fileupload", e.proxy(this.trigger, this)), this.listen()
        };
        t.prototype = {
            listen: function() {
                this.$input.on("change.fileupload", e.proxy(this.change, this)), e(this.$input[0].form).on("reset.fileupload", e.proxy(this.reset, this)), this.$remove && this.$remove.on("click.fileupload", e.proxy(this.clear, this))
            },
            change: function(e, t) {
                if (t === "clear") return;
                var n = e.target.files !== undefined ? e.target.files[0] : e.target.value ? {
                    name: e.target.value.replace(/^.+\\/, ""),
                    size: e.target.value.size,
                } : null;
                if (!n) {
                    this.clear();
                    return
                }
                this.$hidden.val(""),
                    this.$hidden.attr("name", ""),
                    this.$input.attr("name", this.name);
                if (typeof FileReader != "undefined") {
                    var r = new FileReader,
                        i = this.$preview,
                        s = this.$element;
                    r.onload = function(e) {
                        var result = {
                            name: n.name,
                            data: e.target.result,
                            size: n.size,
                        }
                        i.text(result.name), s.addClass("fileupload-exists").removeClass("fileupload-new")
                    }, r.readAsDataURL(n)
                } else this.$preview.text(n.name), this.$element.addClass("fileupload-exists").removeClass("fileupload-new")
            },
            clear: function(e) {
                this.$hidden.val(""), this.$hidden.attr("name", this.name), this.$input.attr("name", "");
                if (navigator.userAgent.match(/msie/i)) {
                    var t = this.$input.clone(!0);
                    this.$input.after(t), this.$input.remove(), this.$input = t
                } else this.$input.val("");
                this.$preview.html(""), this.$element.addClass("fileupload-new").removeClass("fileupload-exists"), e && (this.$input.trigger("change", ["clear"]), e.preventDefault())
                file = undefined;
            },
            reset: function(e) {
                this.clear(), this.$hidden.val(this.original.hiddenVal), this.$preview.html(this.original.preview), this.original.exists ? this.$element.addClass("fileupload-exists").removeClass("fileupload-new") : this.$element.addClass("fileupload-new").removeClass("fileupload-exists")
            },
            trigger: function(e) {
                this.$input.trigger("click"), e.preventDefault()
            }
        }, e.fn.fileupload = function(n) {
            return this.each(function() {
                var r = e(this),
                    i = r.data("fileupload");
                i || r.data("fileupload", i = new t(this, n)), typeof n == "string" && i[n]()
            })
        }, e.fn.fileupload.Constructor = t, e(document).on("click.fileupload.data-api", '[data-provides="fileupload"]', function(t) {
            var n = e(this);
            if (n.data("fileupload")) return;
            n.fileupload(n.data());
            var r = e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');
            r.length > 0 && (r.trigger("click.fileupload"), t.preventDefault())
        })
    }(window.jQuery)
</script>

</body>
</html><?php }?>