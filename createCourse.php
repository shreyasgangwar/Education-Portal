<?php
require_once ('conn.php');
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    if(session_id() == '') {session_start();}
} else  {
    if (session_status() == PHP_SESSION_NONE) {session_start();}
}
$email=$_SESSION['email'];
$q2="SELECT * From instructor WHERE email='$email'";
$r2=mysqli_query($link,$q2);
$r3=mysqli_fetch_assoc($r2);
if($r3!=null)
{
    $imageid=$r3["image_id"];
    $query=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
    $result1=mysqli_fetch_assoc($query);
    $result1=$result1["image_path"];
        if(array_key_exists('create', $_POST)){
            if(isset($_POST['c_name']))
                $cname=$_POST['c_name'];
            if(isset($_POST['about_course']))
                $about=$_POST['about_course'];
            if(isset($_POST['audience']))
                $audience=$_POST['audience'];
            if(isset($_POST['level']))
                $level=$_POST['level'];
            if(isset($_POST['lang']))
                $lang=$_POST['lang'];
                if(isset($_POST['link']))
                $lnk=$_POST['link'];
            if(isset($_POST['hrs_req']))
                $hrs=$_POST['hrs_req'];
            if(isset($_POST['pass']))
                $pass=$_POST['pass'];
            if(md5($pass)!=$r3['password']){
                $error.= "Wrong Password.";
            }
            else{
                $id2=$r3['instructor_id'];
                $query= " INSERT INTO course (Course_title, About_course, Audience, instructor_id, Level, Language, Hours, Link) VALUES ('$cname','$about','$audience','$id2','$level','$lang','$hrs','$lnk'); " ;
                $result=$link->query($query);
                if(!$result){
                    $error.=" Some error in database connection:". mysqli_error($link);
                }
                else{
                    $error="Form submitted successfully !";
                    header("location: instructorDashboard.php");
                }
            }
        }
?>
<html>
<head>
    <title>Create Course</title>
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
        <style>
        .hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
        .input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
        .btn-file{overflow:hidden;position:relative;vertical-align:middle;}.btn-file>input{position:absolute;top:0;right:0;margin:0;opacity:0;filter:alpha(opacity=0);transform:translate(-300px, 0) scale(4);font-size:23px;direction:ltr;cursor:pointer;}
        .fileupload{margin-bottom:9px;}.fileupload .uneditable-input{display:inline-block;margin-bottom:0px;vertical-align:middle;cursor:text;}
        .fileupload .thumbnail{overflow:hidden;display:inline-block;margin-bottom:5px;vertical-align:middle;text-align:center;}.fileupload .thumbnail>img{display:inline-block;vertical-align:middle;max-height:100%;}
        .fileupload .btn{vertical-align:middle;}
        .fileupload-exists .fileupload-new,.fileupload-new .fileupload-exists{display:none;}
        .fileupload-inline .fileupload-controls{display:inline;}
        .fileupload-new .input-append .btn-file{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0;}
        .thumbnail-borderless .thumbnail{border:none;padding:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
        .fileupload-new.thumbnail-borderless .thumbnail{border:1px solid #ddd;}
        body {
            width: 1px;
            min-width: 100%;
            *width: 100%;
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
            background: #fff;
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
                    <i class="fa fa-user" aria-hidden="true"></i> <?php echo($r3['name']);?>
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
<br/><br/><br/>
<br/>

<!-- edit form column -->
<?php
                        if($error!="")
                        {
                            echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                        }
                        ?>
            <form method="post" enctype="multipart/formdata">
                <div class="col-md-12" align="center">
                   <br><br><br>
                   <h2>Create a New Course Here</h2>
                   <br>
                   <h4 align="left">Course Details</h4>
                   <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>Course Title</h5></div>
                            <div class="col-md-5">
                                <input class="form-control" name="c_name" type="text" value="">
                            </div>
                            </div>
                        </div><br>
                    
                        <h4 align="left">Short Description</h4>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>About Course</h5></div>
                            <div class="col-md-5">
                                <input class="form-control" name="about_course" type="textarea" value="">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>Intended Audience</h5></div>
                            <div class="col-md-5">
                                <input class="form-control" name="audience" type="textarea" value="">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>Created By </h5></div>
                            <div class="col-md-5">
                                <text class="form-control" name="instructor" type="text" value=""> <kbd style="background-color: red " align="right"> <?php echo($r3['name']);?> </kbd></text>
                            </div>
                        </div>
                        </div><br>
                        <h4 align="left">Basic Info and Pre-requisite</h4>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right" value=""><h5>Level</h5></div>
                            <select  name="level" class="col-md-5">
                                <option value="begin">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="adv">Advanced</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right" value=""><h5>Language</h5></div>
                            <select name="lang" class="col-md-5">
                                <option   value="eng">English</option>
                                <option  value="hindi">Hindi</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>Hours Required</h5></div>
                            <div class="col-md-5">
                                <input class="form-control" name="hrs_req" type="number" value="">
                            </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>YOUTUBE Link</h5></div>
                            <div class="col-md-5">
                                <input class="form-control" name="link" type="textarea" value="">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="row">
                            <div class="col-md-3" align="right"><h5>Password:</h5></div>
                            <div class="col-md-5">
                                <input class="form-control" name="pass" type="password" placeholder="******">
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn-lg btn-primary" name="create" value="Create">Create Course</button>
                                <span></span>
                            </div>
                        </div>
                    </form>

<br/><br/>

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
</html><?php
}
else
{
    header("location: login.php");
}?>