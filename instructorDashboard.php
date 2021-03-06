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
    $image_path=$result1["image_path"];
    if(array_key_exists('submit', $_POST)){
        if(isset($_POST['name']))
            $name=$_POST['name'];
        if(isset($_POST['dob']))
            $dob=$_POST['dob'];
        if(isset($_POST['college']))
            $coll=$_POST['college'];
        if(isset($_POST['contact']))
            $contact=$_POST['contact'];
        if(isset($_POST['email']))
            $email=$_POST['email'];
        if(isset($_POST['qualification']))
            $qualification=$_POST['qualification'];
        if(isset($_POST['pass']))
            $pass=$_POST['pass'];
        if(isset($_POST['re_pass']))
            $re_pass=$_POST['re_pass'];
            $filesize=0;
        if(isset($_FILES["Upload"]))
        {
            $filename = $_FILES["Upload"]['name'];
            $filetmp = $_FILES["Upload"]['tmp_name'];
            $filesize = $_FILES["Upload"]['size'];
            $file_basename = basename($_FILES["Upload"]['name']);
            $dir="images/";
            $final_dir=$dir.$file_basename;
        }
        if (strlen($contact)<10)
        {
            $error.="Please Enter valid numbers";
        }
        else if($pass!=$re_pass){
            $error.= " Passwords do not match";
        }
        else if($filesize >1000000)
        {
            $error.="File size too large";
        }
        else{
            if(!isset($_FILES["Upload"]))
            {
                $id1=$r3['image_id'];
            }
            else
            {
                move_uploaded_file($filetmp,$final_dir);
                $iquery="INSERT INTO image(image_name,image_path) VALUES ('$filename','$final_dir');";
                $result4=$link->query($iquery);
                $fetchid = null;
                $fetchid="SELECT * FROM image WHERE image_path ='$final_dir' ;";
                $result2=$link->query($fetchid);
                $row = $result2->fetch_assoc();
                $id1 = $row["id"];
            }
            $pass=md5($pass);
            $id2=$r3['instructor_id'];
            $query="UPDATE instructor SET  name='$name',dob='$dob', college='$coll', contact='$contact',image_id='$id1', qualification='$qualification', password='$pass' WHERE instructor_id= '$id2'";
            $result=mysqli_query($link, $query);
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
    <title>Instructor Profile</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
      footer{
      background: #ffffff;
      }
      body {
        background: #F1F3FA;
      }
      /* Profile container */
      .profile {
        margin: 20px 0;
      }
      /* Profile sidebar */
      .profile-sidebar {
        padding: 20px 0 10px 0;
        background: #fff;
      }
      .profile-userpic img {
        float: none;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        -webkit-border-radius: 50% !important;
        -moz-border-radius: 50% !important;
        border-radius: 50% !important;
      }
      .profile-usertitle {
        text-align: center;
        margin-top: 20px;
      }
      .profile-usertitle-name {
        color: #5a7391;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 7px;
      }
      .profile-usertitle-job {
        text-transform: uppercase;
        color: #5b9bd1;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 15px;
      }
      .profile-userbuttons {
        text-align: center;
        margin-top: 10px;
      }
      .profile-userbuttons .btn {
        text-transform: uppercase;
        font-size: 11px;
        font-weight: 600;
        padding: 6px 15px;
        margin-right: 5px;
      }
      .profile-userbuttons .btn:last-child {
        margin-right: 0px;
      }          
      @font-face {
        font-family: 'Glyphicons Halflings';
        src: url('../fonts/glyphicons-halflings-regular.eot');
        src: url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff') format('woff'), url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
      }
      .glyphicon {
        position: relative;
        top: 1px;
        display: inline-block;
        font-family: 'Glyphicons Halflings';
        font-style: normal;
        font-weight: normal;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
      }      
      /* Profile Content */
      .profile-content {
        padding: 20px;
        padding-top: 10px;
        background: #fff;
        min-height: 100%;
      }
      .profile-usermenu {
        margin-top: 30px;
      }
      .profile-usermenu ul li {
        border-bottom: 1px solid #f0f4f7;
      }
      .profile-usermenu ul li:last-child {
        border-bottom: none;
      }
      .profile-usermenu ul li a {
        color: #93a3b5;
        font-size: 14px;
        font-weight: 400;
      }
      .profile-usermenu ul li a i {
        margin-right: 8px;
        font-size: 14px;
      }
      .profile-usermenu ul li a:hover {
        background-color: #fafcfd;
        color: #5b9bd1;
      }
      .profile-usermenu ul li.active {
        border-bottom: none;
      }
      .profile-usermenu ul li.active a {
        color: #5b9bd1;
        background-color: #f6f9fb;
        border-left: 2px solid #5b9bd1;
        margin-left: -2px;
      }
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
        .question_form{
            padding-left: 5%;
            padding-right: 5%;
            padding-top: 10px;
            padding-bottom: 10px;
        }
    </style>
    <style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 40%;
    margin: 2%;
}
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.container {
    padding: 2px 16px;
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
                    <i class="fa fa-user" aria-hidden="true"></i> <?php echo($r3['name']); ?>
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

<div class="container" style="margin-top: 7%">
    <?php
    if($error!='')
    {
        echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
    }
    ?>
  <div class="row profile">
    <div class="col-md-3">
      <div class="profile-sidebar">
        <!-- SIDEBAR USERPIC -->
        <div class="profile-userpic" align="center">
              <img class="rounded-circle media-object" src="<?php echo($image_path);?>" style="height: 20%">
        </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
        <div class="profile-usertitle">
          <div class="profile-usertitle-name">
          <?php echo($r3['name']); ?>
          </div>
          <div class="profile-usertitle-job">
          <?php echo($r3['qualification']); ?>
          </div>
        </div>
        <nav class="profile-usermenu">
        <ul class="nav" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-courses-tab" data-toggle="tab" href="#nav-courses" role="tab" aria-controls="nav-courses" aria-selected="true">
          <i class="glyphicon"></i>
          Courses Offered</a>
          <br/>
          <a class="nav-item nav-link" id="nav-students-tab" data-toggle="tab" href="#nav-students" role="tab" aria-controls="nav-students" aria-selected="false">
          <i class="glyphicon"></i>
          Students Enrolled</a>
          <br/>
          <a class="nav-item nav-link" id="nav-account-tab" data-toggle="tab" href="#nav-account" role="tab" aria-controls="nav-account" aria-selected="false">
          <i class="glyphicon"></i>
          Account Details</a>
        </ul>
        </nav>
      </div>
    </div>

    <div class="col-md-9">
      <div class="profile-content">
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-courses" role="tabpanel" aria-labelledby="nav-courses-tab">
          <div ><a class="btn btn-outline-danger" href="createCourse.php">ADD
                    <span class="glyphicon glyphicon-plus"></span>
                </a></div>
                <div class="col-md-12 container"> 
                  <div class="row">
            <?php
            $id=$r3['instructor_id'];
            $query= "SELECT * FROM course where instructor_id='$id' ";
            $featured= $link->query($query);
            if($featured)
            {
            while($product = mysqli_fetch_assoc($featured)):
                $title=$product['Course_title'];?>

                
                <div class="col-md-5 card" style="width:50%">
                    <div class="container">
                        <h4><b><?php echo($title);?></b></h4> 
                        <p><?php echo($product['Level']);?></p> 
                    </div>
                </div>
               
        
            <?php endwhile;
            }
            else{?>
            <p><h1 align="center">No Courses Offered Yet</h1>
            <?php }?>
            </div>
            </div>
             </p>
          </div>
          <div class="tab-pane fade" id="nav-account" role="tabpanel" aria-labelledby="nav-account-tab">
            <div class="container">
              <h1><b>Edit Profile</b></h1>
              <hr>
            <div class="row">
     
                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                  <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a> 
                    <i class="fa fa-coffee"></i>
                    <strong>Remember!</strong>You can always come and make changes here.
                  </div>
                  <h3>Personal info</h3>
                  
                  <form class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                      <label class="col-md-3 control-label">Name:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="<?php echo($r3['name']);?>" name="name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">DOB:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="date" value="<?php echo($r3['dob']);?>" name="dob">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Email:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="Email" value="<?php echo($r3['email']);?>" name="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Contact No:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="number" value="<?php echo($r3['contact']);?>" name="contact">
                      </div>
                    </div>             
                    <div class="form-group">
                      <label class="col-md-3 control-label">College:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="<?php echo($r3['college']);?>" name="college">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Qualification:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="text" value="<?php echo($r3['qualification']);?>" name="qualification">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Password:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" value="<?php echo($r3['password']);?>" name="pass">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">Confirm password:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" value="<?php echo($r3['password']);?>" name="re_pass">
                      </div>
                    </div><br>
                    <div class="fileupload fileupload-new" data-provides="fileupload" align="center">
                      <span class="btn btn-outline-danger btn-file">
                      <span class="fileupload-new">Upload Profile Image</span>
                      <span class="fileupload-exists">Upload Profile Image</span>         
                      <input type="file"  name="Upload"/>
                      </span>
                      <span class="fileupload-preview"></span>
                      <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                    </div>
                    
                    <div class="form-group">
                      <div class="col-md-12" align="center">
                        <button type="submit " class="btn btn-primary" value="Save Changes" name="submit">Save Changes</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
          <hr>
          </div>
          <div class="tab-pane fade" id="nav-students" role="tabpanel" aria-labelledby="nav-students-tab">
         

         <?php $id=$r3['instructor_id'];
            $query= "SELECT * FROM courseapplication where instructor_id='$id'";
            $featured= $link->query($query);
            if($featured)
            {?>
                <div class="container">
                <h2>Student Details</h2>
                <p>Here is a list of Students.</p>            
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Name</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tbody>   
                   
                <?php $no=1;
                while($product = mysqli_fetch_assoc($featured)):
                    $student_id=$product['student_id'];
                    $q= "SELECT * FROM user where id='$student_id'";
                    $f= $link->query($q);
                    $f=mysqli_fetch_assoc($f);    ?>

                    <tr>
                      <td><?php echo($no++);?></td>
                      <td><?php echo($f['first_name']);?></td>
                      <td><?php echo($f['email']);?></td>
                    </tr>

             <?php endwhile;?>
             </tbody>
                </table>
              </div>
         <?php }else{?>
            <p><h1 align="center">No Students Enrolled</h1></p>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
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
</html>
<?php }
else
header('location: login.php');?>