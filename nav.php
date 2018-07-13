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
          
          <a href="login.php" class="btn btn-primary" type="button"><?php if(null!=$_SESSION){ echo(' '.$_SESSION['email']);} else{ echo ('Login/Sign-up');} ?></a>
          

                  
                  

   
              </ul>
  
          </div>

      </nav>
