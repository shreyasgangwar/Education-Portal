<?php
include_once('conn.php');
session_start();
$error="";
if(!isset($_SESSION['email']))
{
    header("location: login.php");
}
else
{
    $email=$_SESSION['email'];
    $companyid=$_GET['company_id'];
    $domainname=$_GET['domain_name'];
    $query="SELECT image_id From hire WHERE company_id='$companyid'";
    $result=mysqli_query($link,$query);
    $imageid=mysqli_fetch_assoc($result);
    $imageid=$imageid["image_id"];
    $query=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
    $result1=mysqli_fetch_assoc($query);
    $result1=$result1["image_path"];
    $query=mysqli_query($link,"SELECT company_id From hire WHERE company_email='$email'");
    $result2=mysqli_fetch_assoc($query);
    $result3=$result2["company_id"];
    $w=null;
    $w=mysqli_query($link,"SELECT * FROM companyrequirement where company_id='$companyid' and domain_name='$domainname' ");
    $w=mysqli_fetch_assoc($w);
    $takex = $w['takeExam'];
    if($takex=='yes')
    {
    $query1=mysqli_query($link,"SELECT * From exam WHERE Company_tcid='$companyid' and Exam_name='$domainname'");
    $result2=mysqli_fetch_assoc($query1);
    $examname=$result2["Exam_name"];
    $examcode=$result2["Exam_code"];
    $subject=$result2["subject"];
    $examdescription=$result2["Exam_description"];
    $examduration=$result2["Exam_duration"];
    $_SESSION['endtime'] = $examduration;
    $question=$result2["Exam_totalQuestion"];
    $_SESSION['tqn']=$question;
    $_SESSION['qn'] = 1;
    $_SESSION['no'] = 1;
    $examid=$result2["Exam_id"];
    $_SESSION['Exam_id'] = $result2["Exam_id"];
    }
    if(array_key_exists('submit1', $_POST))
    {
        $id=mysqli_query($link,"SELECT id from user where email='$email'");
        $id=mysqli_fetch_assoc($id);
        $id=$id['id'];
        $job_id=$w['Subject_id'];
        $ss=mysqli_query($link,"INSERT INTO jobapplications (job_id,student_id) values ('$job_id','$id') ");
        if($ss)
        {
            header('location: jobsinternship.php');
        }
    }

    if(array_key_exists('submit', $_POST))
    {
        $filesize=0;
        if(file_exists($_FILES['Upload']['tmp_name']) || is_uploaded_file($_FILES['Upload']['tmp_name']))
        {
            $filename = $_FILES["Upload"]['name'];
            $filetmp = $_FILES["Upload"]['tmp_name'];
            $filesize = $_FILES["Upload"]['size'];
            $file_basename = basename($_FILES["Upload"]['name']);
            $dir="resume/";
            $final_dir=$dir.$file_basename;
            if($filesize >1000000)
            {
                $error.="File size too large";
            }
            else
            {
                    move_uploaded_file($filetmp,$final_dir);
                    $iquery="INSERT INTO resume(resume_name,resume_path) VALUES ('$filename','$final_dir');";
                    $result4=$link->query($iquery);
                    if($result4)
                    {
                        $id=mysqli_query($link,"SELECT id from user where email='$email'");
                        $id=mysqli_fetch_assoc($id);
                        $id=$id['id'];
                        $job_id=$w['Subject_id'];
                        $ss=mysqli_query($link,"INSERT INTO jobapplications (job_id,student_id) values ('$job_id','$id') ");
                        if($ss)
                        {
                            header('location: jobsinternship.php');
                        }
                    }
            }
        }
        else
        {
            $error.="Please Select a file to upload";
        }
    }

    ?>

    <html>
    <head>
    
    <title>Instructions</title>

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
        body{


            font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
        }
        .navbar {

            background:  #F44336 !important;
            background: rgba(0, 0, 0, 0.78); //NON-IE

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
<a class="navbar-brand" href="studentDashboard.php"><img class="img-responsive" src="images/logo.png" alt="logo"></a>
<h2 style="color:white;" class="educot-logo">educot</h2>
</div></div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav ml-auto">

        <li class="nav-item active">

            <a class="nav-link" href="studentDashboard.php"><i class="fa fa-home" aria-hidden="true"></i> Home<span class="sr-only">(current)</span></a>

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
    <br/><br/>
    <?php if($takex=='yes')
    {?>
    <section class="text-center job-signup-form abt2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="col-md- text-center" style="height: 300px; width: 300px">
                        <img src="<?php echo($result1); ?> " style="width: 100% " class="image-responsive">
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <?php
                    if($error!="")
                    {
                        echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                    }
                    ?>
        <h1>Exam Instructions</h1>
        <br/>
        <div style="color: #F44336; padding: 10px;">
            <h2><?php echo($examname);?></h2>
        </div>
        <div align="right"><kbd>code: <?php    echo($examcode) ?></kbd></div>
        <div class="container">
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 row"><h5><span style="background-color: #F44336;color: #ffffff; padding: 10px;">Position For</span>  :  </h5><h5 style="margin-left: 10px;"><?php echo ($subject);?></h5></div>
                <div class="col-md-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 row"><h5><span style="background-color: #F44336;color: #ffffff; padding: 10px;">Duration</span>  :  </h5><h5 style="margin-left: 10px;"><?php echo ($examduration);?></h5></div>
                <div class="col-md-4"></div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 row"><h5><span style="background-color: #F44336;color: #ffffff; padding: 10px;">Total Questions</span>  :  </h5><h5 style="margin-left: 10px;"><?php echo ($_SESSION['tqn']);?></h5></div>
                <div class="col-md-4"></div>
            </div>
            <br>
        </div>
        <h2>Description :</h2>
        <p><?php echo ($examdescription);

            ?></p>
        <br/>
        <form method="post" role="form" enctype="multipart/form-data">
            <button class="btn btn-danger" type="submit" name="submit1">Start Exam</button>
        </form>
        <br/>
        <br/>
    </section>
    <?php } 
    else
    { ?>
        <section class="text-center job-signup-form abt2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="col-md- text-center" style="height: 300px; width: 300px">
                            <img src="<?php echo($result1); ?> " style="width: 100% " class="image-responsive">
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <h1>Apply Now</h1>
            <br/>
            <div style="color: #F44336; padding: 10px;">
                <h2><?php echo($w['domain_name']);?></h2>
            </div>
            <div class="container">
                <br>
                <?php
                    if($error!="")
                    {
                        echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                    }
                    ?>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 row"><h5><span style="background-color: #F44336;color: #ffffff; padding: 10px;">Salary</span>  :  </h5><h5 style="margin-left: 10px;"><?php echo ($w['salary']);?></h5></div>
                    <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 row"><h5><span style="background-color: #F44336;color: #ffffff; padding: 10px;">Experience</span>  :  </h5><h5 style="margin-left: 10px;"><?php echo ($w['experience']);?></h5></div>
                    <div class="col-md-4"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4 row"><h5><span style="background-color: #F44336;color: #ffffff; padding: 10px;">No. of openings</span>  :  </h5><h5 style="margin-left: 10px;"><?php echo ($w['no_candidate']);?></h5></div>
                    <div class="col-md-4"></div>
                </div>
                <br>
            </div>

            
            <br/>
        <form role="form" method="post" enctype="multipart/form-data">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <span class="btn btn-outline-danger btn-file">
                <span class="fileupload-new">Upload Resume</span>
                <span class="fileupload-exists">Upload Resume</span>         
                <input type="file"  name="Upload"/>
                </span>
                <span class="fileupload-preview"></span>
                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
            </div>
            <div><kbd>(PDF)</kbd></div>
            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary" name="submit" value="Save Changes">Save Changes</button>
                    <span></span>
                </div>
            </div>
        </form>
            <br/>
            <br/>
        </section>
    <?php } ?>
    <br/><br/>
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
    
    </html>
    <?php
}
?>