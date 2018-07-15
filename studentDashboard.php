<?php
require_once ('conn.php');
if (version_compare(PHP_VERSION, '5.4.0', '<')) {
    if(session_id() == '') {session_start();}
} else  {
    if (session_status() == PHP_SESSION_NONE) {session_start();}
}
$email=$_SESSION['email'];
$q2="SELECT * From user WHERE email='$email'";
$r2=mysqli_query($link,$q2);
$r3=mysqli_fetch_assoc($r2);
if($r3!=null)
{
    $imageid=$r3["image_id"];
    $idd=$r3["id"];
    $query=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
    $result1=mysqli_fetch_assoc($query);
    $result1=$result1["image_path"];
        if(array_key_exists('submit', $_POST)){
            if(isset($_POST['f_name']))
                $fname=$_POST['f_name'];
            if(isset($_POST['l_name']))
                $lname=$_POST['l_name'];
            if(isset($_POST['dob']))
                $dob=$_POST['dob'];
            if(isset($_POST['coll']))
                $coll=$_POST['coll'];
            if(isset($_POST['contact']))
                $contact=$_POST['contact'];
            if(isset($_POST['alt_contact']))
                $alt_contact=$_POST['alt_contact'];
            if(isset($_POST['year']))
                $year=$_POST['year'];
            if(isset($_POST['pass']))
                $pass=$_POST['pass'];
            if(isset($_POST['re_pass']))
                $re_pass=$_POST['re_pass'];
            if(isset($_FILES["Upload"]))
            {
                $filename = $_FILES["Upload"]['name'];
                $filetmp = $_FILES["Upload"]['tmp_name'];
                $filesize = $_FILES["Upload"]['size'];
                $file_basename = basename($_FILES["Upload"]['name']);
                $dir="images/";
                $final_dir=$dir.$file_basename;

            }
            if($alt_contact!="" && $contact==$alt_contact){
                $error.= " Both contact numbers are same";
            }
            elseif (strlen($contact)<10)
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
                if(!file_exists($_FILES['Upload']['tmp_name']) || !is_uploaded_file($_FILES['Upload']['tmp_name']))
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
                $id2=$r3['id'];
                $query="UPDATE user SET first_name='$fname', last_name='$lname',dob='$dob', college='$coll', contact_no='$contact', alternate_contact_no='$alt_contact',image_id='$id1', year='$year', password='$pass' WHERE id= '$id2'";
                $result=mysqli_query($link, $query);
                if(!$result){
                    $error.=" Some error in database connection:". mysqli_error($link);
                }
                else{
                    $error="Form submitted successfully !";
                    header("location: studentDashboard.php");
                }
            }
        }
?>
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
                    <i class="fa fa-user" aria-hidden="true"></i> <?php echo($r3['first_name']);?>
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


<div class="programintro p-overview-background">

    <div class="p-overview-tint">
        <div class="profile-header" >
            <div class="container">
                <div class="container-inner">

                    <img class="rounded-circle media-object" src="<?php echo("$result1")?>">
                    <?php

                    if($error!='')
                    {
                        echo '<div class="alert alert-danger" role="alert">'.$error.'</div><br>';
                    }
                    ?>
                    <h3 class="profile-header-user"><?php echo ($r3['first_name']); ?></h3>
                    <p class="profile-header-bio">
                    <div class="row" style="color: #fff">
                        <div class="col-md-3">
                            <h5><strong>College/School:</strong></h5>
                        </div>
                        <div class="col-md-4"></div> <text><?php echo ($r3['college']); ?></text></h5>
                    </div>
                    <div class="row" style="color: #fff">
                        <div class="col-md-3">
                            <h5><strong>Contact:</strong></h5>
                        </div>
                        <div class="col-md-4"></div> <number><?php echo ($r3['contact_no']); ?></number></h5>
                    </div>
                    <div class="row" style="color: #fff">
                        <div class="col-md-3">
                            <h5><strong>Email:</strong></h5>
                        </div>
                        <div class="col-md-4"></div> <text><?php echo ($r3['email']); ?></text></h5>
                    </div>
                    </p>
                </div>
            </div>

            <nav class="profile-header-nav">
                <ul class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-jobs-tab" data-toggle="tab" href="#nav-jobs" role="tab" aria-controls="nav-jobs" aria-selected="true" style="background-color: transparent; border: transparent">Jobs Applied</a>

                    <a class="nav-item nav-link" id="nav-course-tab" data-toggle="tab" href="#nav-course" role="tab" aria-controls="nav-course" aria-selected="false" style="background-color: transparent;border: transparent">Courses Enrolled</a>

                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="background-color: transparent; border: transparent">Personal Details</a>
                </ul>
            </nav>
        </div>
    </div></div>
    <br/>
    
    <br/><br/>
<div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-jobs" role="tabpanel" aria-labelledby="nav-jobs-tab">
    <div class="container">
    <a class="btn btn-outline-danger" href="jobsinternship.php" role="button">Apply for Jobs</a>
    </div>
    <br/>
    <?php
    $id=$r3['id'];
    $query= "SELECT * FROM jobapplications where student_id='$id' ";
    $featured= $link->query($query);
    if($featured)
    {
    while($product = mysqli_fetch_assoc($featured)):
        $jobid = $product['job_id'];
        $q3 = "SELECT * From companyrequirement WHERE Subject_id='$jobid'";
        $r4=mysqli_query($link,$q3);
        $data=mysqli_fetch_assoc($r4);
        $company_id=$data['company_id'];
        $imagei=mysqli_fetch_assoc(mysqli_query($link,"SELECT * FROM hire where company_id='$company_id'"));
        $imageid=$imagei["image_id"];
        $q4=mysqli_query($link,"SELECT image_path FROM image WHERE id='$imageid'");
        $r5=mysqli_fetch_assoc($q4);
        $r5=$r5["image_path"];
        $companyname = $imagei['company_name'];
        $des = $imagei['description'];
        $salary = $data['salary'];
        $experience= $data['experience'];
        $domainname= $data['domain_name'];
        $duration= $data['duration'];
        $candidate= $data['no_candidate'];
        $takex = $data['takeExam'];
        ?>
        <?php if($takex=='yes'){?>
        <div class="container"> <div class="job-card">
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
                    </div>
                </div>
            </div>
        </div>
        <?php } 
        else{?>
            <div class="container"> <div class="job-card">
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
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div><br>
        <?php endwhile;?>
        <?php }
        else {?>
        <p><h1 align="center">No Jobs Applied Yet</h1></p><?php } ?>
    </div>
    <br/>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="container">
            <h1>Edit Profile</h1>
            <hr>
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                    <div class="text-center">
                        <img src="<?php echo("$result1")?>" class="avatar img-circle" alt="avatar" width="20%" height="20%">
                        <h6>Upload a different photo...</h6>

                        <div class="fileupload fileupload-new" data-provides="fileupload">
            <span class="btn btn-outline-danger btn-file">
            <span class="fileupload-new">Upload Image</span>
            <span class="fileupload-exists">Upload Image</span>         
            <input type="file"  name="Upload"/>
            </span>
                            <span class="fileupload-preview"></span>
                            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                        </div>
                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <div class="alert alert-info alert-dismissable">
                        <a class="panel-close close" data-dismiss="alert">×</a>
                        <i class="fa fa-coffee"></i>
                        <strong>Remember!</strong>You can always come and make changes here.
                    </div>
                    <h3>Personal info</h3>


                        <div class="form-group">
                            <label class="col-lg-3 control-label">First name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="f_name" type="text" value="<?php echo ($r3['first_name']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Last name:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="l_name" type="text" value="<?php echo ($r3['last_name']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">DOB:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="dob" type="date" value="<?php echo ($r3['dob']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">College/School:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="coll" type="text" value="<?php echo ($r3['college']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Year/Class:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="year" type="number" value="<?php echo ($r3['year']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-8">
                                <text class="form-control" name="mail" type="Email" ><?php echo ($r3['email']); ?>     <kbd style="background-color: red">Can not Change</kbd></text>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Contact No:</label>
                            <div class="col-lg-8">
                                <input class="form-control" name="contact" type="number" value="<?php echo ($r3['contact_no']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alternate Contact No:</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="alt_contact" value="<?php echo ($r3['alternate_contact_no']); ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Password:</label>
                            <div class="col-md-8">
                                <input class="form-control" name="pass" type="password" placeholder="******">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Confirm password:</label>
                            <div class="col-md-8">
                                <input class="form-control" name="re_pass" type="password" placeholder="******">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary" name="submit" value="Save Changes">Save Changes</button>
                                <span></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="tab-pane fade" id="nav-course" role="tabpanel" aria-labelledby="nav-course-tab">
    <div class="container">
    <a class="btn btn-outline-danger" href="courses.php" role="button">Apply for Courses</a>
    </div>
    <?php
        $query= " SELECT * FROM course where course_id in (Select course_id from courseapplication where student_id= '$idd'); ";
        $featured= $link->query($query);
        if($featured)
        {
            while($product = mysqli_fetch_assoc($featured)):
                
                ?>
        <div class="container"> <div class="job-card">
            <div class="row">
                <div class="col-sm-8">
                    <div>
                        <h3 style="padding:5px; margin:5px;"><?php echo($product['Course_title']);?></h3>
                        <h6 style="padding:5px; margin:5px;"><?php echo($product['About_course']);?></h6>
                    </div><br/><hr>
                    <h6 style="padding:5px; margin:5px; color: #F44336; float:left;"><i class="fa fa-briefcase" aria-hidden="true"></i> Audience :<?php echo($product['Audience']);?></h6>
                    <h6 style="padding:5px; margin:5px; color: #F44336; float:left;"><i class="fa fa-money" aria-hidden="true"></i> Level: <?php echo($product['Level']);?></h6>
                </div>
                <div class="col-sm-4">
                    <div class="apply-post">
                        <h6>Duration: <?php echo($product['Hours']);

                            ?></h6><br/>
                    </div>
                </div>
            </div>
        </div>
        </div>
                <br/>

            <?php endwhile;
        }else{?>
            <p><h1 align="center">No Course Applied</h1></p>
            <?php }?>
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
</html><?php
}
else
{
    header("location: login.php");
}?>