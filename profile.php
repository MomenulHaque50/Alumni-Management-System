    <?php
    session_start();
    include('admin/db_connect.php');
    ob_start();
        $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
         foreach ($query as $key => $value) {
          if(!is_numeric($key))
            $_SESSION['system'][$key] = $value;
        }
    ob_end_flush();
    include('header.php');

	
    ?>



<?php
include 'admin/db_connect.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$vhid=intval($_GET['vhid']);

$sid =$vhid;
$stmt = $conn->prepare("SELECT stuid, fullname, dateofbirth, gender, batch, course_id, passingyear, cellphone, address, bloodgroup, connected1, connected2, joiningmonth, joiningyear, institutionname, position, location, contact, email, avatar, hometown, residence, about, degree1, school, pass1, sub1, board1, degree2, college, pass2, sub2, board2, degree3, uni1, sub3, degree4, uni2, sub4, web, fb, lin, insta, twi, git, skill1, skill2, skill3, award1, iss1, dat1, award2, iss2, dat2, award3, iss3, dat3 ,jm1, jy1, lm1, ly1, in1, pos1, con1, jm2, jy2, lm2, ly2, in2, pos2, con2, jm3, jy3, lm3, ly3, in3, pos3, con3, rt1, acc1, orn1, rt2, acc2, orn2, rt3, acc3, orn3, pt1, pl1, opm1, pt2, pl2, opm2, pt3, pl3, opm3 FROM alumnus_bio WHERE id ='$sid'");
$stmt->execute();
$stmt->bind_result($stuid, $fullname, $dateofbirth, $gender, $batch, $course_id, $passingyear, $cellphone, $address, $bloodgroup, $connected1, $connected2, $joiningmonth, $joiningyear, $institutionname, $position, $location,  $contact, $email, $avatar, $hometown, $residence, $about, $degree1, $school, $pass1, $sub1, $board1, $degree2, $college, $pass2, $sub2, $board2, $degree3, $uni1, $sub3, $degree4, $uni2, $sub4, $web, $fb, $lin, $insta, $twi, $git, $skill1, $skill2, $skill3, $award1, $iss1, $dat1, $award2, $iss2, $dat2, $award3, $iss3, $dat3 ,$jm1, $jy1, $lm1, $ly1, $in1, $pos1, $con1, $jm2, $jy2, $lm2, $ly2, $in2, $pos2, $con2, $jm3, $jy3, $lm3, $ly3, $in3, $pos3, $con3, $rt1, $acc1, $orn1, $rt2, $acc2, $orn2, $rt3, $acc3, $orn3, $pt1, $pl1, $opm1, $pt2, $pl2, $opm2, $pt3, $pl3, $opm3);
$stmt->fetch();
$stmt->close();

$dateofbirth = strtotime($dateofbirth) ? date('Y-m-d', strtotime($dateofbirth)) : '';
?>



<!DOCTYPE html>
<html>
<head>
<html lang="en">
<title>BAUET Alumni Association</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

    .masthead{
        min-height: 23vh !important;
        height: 23vh !important;
    }
     .masthead:before{
        min-height: 23vh !important;
        height: 23vh !important;
    }
    img#cimg{
        max-height: 10vh;
        max-width: 6vw;
    }
</style>



    <style>
    	header.masthead {
		  background: url(admin/assets/uploads/<?php echo $_SESSION['system']['cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    
  #viewer_modal .btn-close {
    position: absolute;
    z-index: 999999;
    /*right: -4.5em;*/
    background: unset;
    color: white;
    border: unset;
    font-size: 27px;
    top: 0;
}
#viewer_modal .modal-dialog {
        width: 80%;
    max-width: unset;
    height: calc(90%);
    max-height: unset;
}
  #viewer_modal .modal-content {
       background: black;
    border: unset;
    height: calc(100%);
    display: flex;
    align-items: center;
    justify-content: center;
  }
  #viewer_modal img,#viewer_modal video{
    max-height: calc(100%);
    max-width: calc(100%);
  }
  body, footer {
    background: #000000e6 !important;
}
 

a.jqte_tool_label.unselectable {
    height: auto !important;
    min-width: 4rem !important;
    padding:5px
}/*
a.jqte_tool_label.unselectable {
    height: 22px !important;
}*/

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
	
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
  text-decoration: none;
}
footer{
   
  width: 100%;
  position: relative;
  bottom: 0;
  left: 0;
  background: #111;
}
footer .content{
  max-width: 1350px;
  margin: auto;
  padding: 20px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
footer .content p,a{
  color: #fff;
}
footer .content .box{
  width: 33%;
  transition: all 0.4s ease;
}
footer .content .topic{
  font-size: 22px;
  font-weight: 600;
  color: #fff;
  margin-bottom: 16px;

}
footer .content p{
  text-align: justify;
}
footer .content .lower .topic{
  margin: 24px 0 5px 0;
}
footer .content .lower i{
  padding-right: 16px;
}
footer .content .middle{
  padding-left: 80px;
}
footer .content .middle a{
  line-height: 32px;
}
footer .content .right input[type="text"]{
  height: 45px;
  width: 100%;
  outline: none;
  color: #d9d9d9;
  background: #000;
  border-radius: 5px;
  padding-left: 10px;
  font-size: 17px;
  border: 2px solid #222222;
}
footer .content .right input[type="submit"]{
  height: 42px;
  width: 100%;
  font-size: 18px;
  color: #d9d9d9;
  background: #2596be;
  outline: none;
  border-radius: 5px;
  letter-spacing: 1px;
  cursor: pointer;
  margin-top: 12px;
  border: 2px solid #2596be;
  transition: all 0.3s ease-in-out;
}
.content .right input[type="submit"]:hover{
  background: none;
  color:  #2596be;
}
footer .content .media-icons a{
  font-size: 16px;
  height: 45px;
  width: 45px;
  display: inline-block;
  text-align: center;
  line-height: 43px;
  border-radius: 5px;
  border: 2px solid #222222;
  margin: 30px 5px 0 0;
  transition: all 0.3s ease;
}
.content .media-icons a:hover{
  border-color: #2596be;
}
footer .bottom{
  width: 100%;
  text-align: right;
  color: #d9d9d9;
  padding: 0 40px 5px 0;
}
footer .bottom a{
  color:#2596be;
}
footer a{
  transition: all 0.3s ease;
}
footer a:hover{
  color: #2596be;
}
@media (max-width:1100px) {
  footer .content .middle{
    padding-left: 50px;
  }
}
@media (max-width:950px){
  footer .content .box{
    width: 50%;
  }
  .content .right{
    margin-top: 40px;
  }
}
@media (max-width:560px){
  footer{
    position: relative;
  }
  footer .content .box{
    width: 100%;
    margin-top: 30px;
  }
  footer .content .middle{
    padding-left: 0;
  }
}

    </style>
</head>
<body class="w3-light-grey">
<!-- Navigation-->
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
				 <img class="img-logo" src="assets/img/alumnilogo.png" alt="" style="
    width: 100%;
    height: auto;
    max-width: 40px;
">
   
                <a class="navbar-brand js-scroll-trigger" href="./"><?php echo $_SESSION['system']['name'] ?></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
			                 <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=alumni_list">Directory</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=gallery">Gallery</a></li>
						<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=gallery">Committee</a></li>
                        <?php if(isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=careers">Jobs</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=forum">Forums</a></li>
                        <?php endif; ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
                        <?php if(!isset($_SESSION['login_id'])): ?>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=login" id="login">Login</a></li>
                        <?php else: ?>
                        <li class="nav-item">
                          <div class=" dropdown mr-4">
                              <a href="#" class="nav-link js-scroll-trigger"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-angle-down"></i></a>
                                <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                                  <a class="dropdown-item" href="index.php?page=my_account" id="manage_my_account"><i class="fa fa-cog"></i> Manage Account</a>
                                  <a class="dropdown-item" href="admin/ajax.php?action=logout2"><i class="fa fa-power-off"></i> Logout</a>
                                </div>
                          </div>
                        </li>
                        <?php endif; ?>
                        
                     
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Alumni Profile</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="admin/assets/uploads/<?php echo $avatar;?>" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
        <div class="w3-container">
		  <br>
		   <h2 style="color:#5ABF79;"><?php echo $fullname; ?></h2>
		   <p><i class="fa fa-graduation-cap fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $stuid; ?></p>
		   <?php if ( $connected2 == "0" ) { ?> 
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Student</p>
		  <?php } ?>
		  
		  <?php if ( $connected2 == "1" ) { ?> 
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $position; ?></p>
		  <?php } ?>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address; ?></p>
		  <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $email; ?></p>
          <p><i class="fa fa-calendar fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $dateofbirth; ?></p>
          <p><i class="fa fa-heartbeat fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $bloodgroup; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $cellphone; ?></p>
		  <p><i class="fa fa-heartbeat fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $hometown; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $residence; ?></p>
		  <a href="<?php echo $web; ?>"><i class='fab fa-google' style='font-size:30px; color:#5ABF79;'></i></a>
		  <a href="<?php echo $fb; ?>"><i class='fab fa-facebook' style='font-size:30px; color:#5ABF79;'></i></a>
		  <a href="<?php echo $twi; ?>"><i class='fab fa-twitter' style='font-size:30px;color:#5ABF79;'></i></a>
		  <a href="<?php echo $lin; ?>"><i class='fab fa-linkedin' style='font-size:30px;color:#5ABF79;'></i></a>
		  <a href="<?php echo $insta; ?>"><i class='fab fa-instagram' style='font-size:30px;color:#5ABF79;'></i></a>
		  <a href="<?php echo $git; ?>"><i class='fab fa-github' style='font-size:30px;color:#5ABF79;'></i></a>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i> Personal Skills</b></p>
          <p><?php echo $skill1; ?>  <?php echo $skill2; ?>  <?php echo $skill3; ?></p>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>About</b></p>
          <p><?php echo $about; ?></p>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $position; ?> at <?php echo $institutionname; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $joiningmonth; ?> <?php echo $joiningyear; ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Location: <?php echo $location; ?></p>
		  <p>Contact: <?php echo $contact; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $pos1; ?> at <?php echo $in1; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $jm1; ?> <?php echo $jy1; ?> - <?php echo $lm1; ?> <?php echo $lm2; ?></h6>
		  <p>Contact: <?php echo $con1; ?></p>
          <hr>
        </div>
               <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $pos2; ?> at <?php echo $in2; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $jm2; ?> <?php echo $jy2; ?> - <?php echo $lm2; ?> <?php echo $lm2; ?></h6>
		  <p>Contact: <?php echo $con2; ?></p>
          <hr>
        </div>
		        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $pos3; ?> at <?php echo $in3; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $jm3; ?> <?php echo $jy3; ?> - <?php echo $lm3; ?> <?php echo $lm3; ?></h6>
		  <p>Contact: <?php echo $con3; ?></p>
          <hr>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Bangladesh Army University of Engineering & Technology (BAUET)</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year: <?php echo $passingyear; ?></h6>
		  		   <?php if ( $course_id == "1" ) { ?> 
          <h6 class="w3-text-green">Subject: CE </h6>
		  <?php } ?>
		  <?php if ( $course_id == "2" ) { ?> 
          <h6 class="w3-text-green">Subject: CSE </h6>
		  <?php } ?>
		  <?php if ( $course_id == "3" ) { ?> 
          <h6 class="w3-text-green">Subject: EEE </h6>
		  <?php } ?>
		  <?php if ( $course_id == "4" ) { ?> 
          <h6 class="w3-text-green">Subject: ICE </h6>
		  <?php } ?>
		  <?php if ( $course_id == "5" ) { ?> 
          <h6 class="w3-text-green">Subject: ME </h6>
		  <?php } ?>
		  <?php if ( $course_id == "6" ) { ?> 
          <h6 class="w3-text-green">Subject: DBA </h6>
		  <?php } ?>
		  <?php if ( $course_id == "7" ) { ?> 
          <h6 class="w3-text-green">Subject: ELL </h6>
		  <?php } ?>
		  <?php if ( $course_id == "8" ) { ?> 
          <h6 class="w3-text-green">Subject: LLB </h6>
		  <?php } ?>
		  <h6 class="w3-text-green">Batch: <?php echo $batch; ?> </h6>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $uni2; ?></b></h5>
          <p>Degree: <?php echo $degree4; ?> </p>
          <p>Subject: <?php echo $sub4; ?></p>
          <hr>
        </div>
		  <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $uni1; ?></b></h5>
          <p>Degree: <?php echo $degree3; ?> </p>
          <p>Subject: <?php echo $sub3; ?></p>
          <hr>
        </div>
		  <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $college; ?></b></h5>
		   <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year: <?php echo $pass2; ?></h6>
          <p>Degree: <?php echo $degree2; ?> </p>
          <p>Subject: <?php echo $sub2; ?></p>
          <hr>
        </div>
         <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $school; ?></b></h5>
		   <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Passing Year: <?php echo $pass1; ?></h6>
          <p>Degree: <?php echo $degree1; ?> </p>
          <p>Subject: <?php echo $sub1; ?></p>
          <hr>
        </div>
		    <!-- End Right Column -->
    </div>
       <br>
        <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Awards/Achievements</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $award1; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Announcement Date: <?php echo $dat1; ?></h6>
          <h6 class="w3-text-green">Issued By: <?php echo $iss1; ?> </h6>
          <hr>
        </div>
           <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $award2; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Announcement Date: <?php echo $dat2; ?></h6>
          <h6 class="w3-text-green">Issued By: <?php echo $iss2; ?> </h6>
          <hr>
        </div>
		 <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $award3; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Announcement Date: <?php echo $dat3; ?></h6>
          <h6 class="w3-text-green">Issued By: <?php echo $iss3; ?> </h6>
          <hr>
        </div>
		  
    <!-- End Right Column -->
    </div>
     <br>
        <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Publications</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $rt1; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Accepted By: <?php echo $acc1; ?></h6>
          <h6 class="w3-text-green">Other Researchers Name: <?php echo $orn1; ?> </h6>
          <hr>
        </div>
         <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $rt2; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Accepted By: <?php echo $acc2; ?></h6>
          <h6 class="w3-text-green">Other Researchers Name: <?php echo $orn2; ?> </h6>
          <hr>
        </div>
		         <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $rt3; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Accepted By: <?php echo $acc3; ?></h6>
          <h6 class="w3-text-green">Other Researchers Name: <?php echo $orn3; ?> </h6>
          <hr>
        </div>
		  
    <!-- End Right Column -->
    </div>
	<br>
        <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $pt1; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Project Link: <?php echo $pl1; ?></h6>
          <h6 class="w3-text-green">Other Projects Member: <?php echo $opm1; ?> </h6>
          <hr>
        </div>
         <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $pt2; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Project Link: <?php echo $pl2; ?></h6>
          <h6 class="w3-text-green">Other Projects Member: <?php echo $opm2; ?> </h6>
          <hr>
        </div>
		         <div class="w3-container">
          <h5 class="w3-opacity"><b><b><?php echo $pt3; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Project Link: <?php echo $pl3; ?></h6>
          <h6 class="w3-text-green">Other Projects Member: <?php echo $opm3; ?> </h6>
          <hr>
        </div>
		  
    <!-- End Right Column -->
    </div>
	<br>
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
<footer>
   <div class="content">
     <div class="left box">
       <div class="upper">
         <div class="topic">About us</div>
         <p>The main aim of BAUET Alumni Association is to provide a good and strong bridge for the students, faculty and the institute for mutual benefit and synergy.</p>
       </div>
       <div class="lower">
         <div class="topic">Contact us</div>
         <div class="phone">
           <a href="#"><i class="fas fa-phone-volume"></i> +01774-498707</a>
         </div>
         <div class="email">
           <a href="#"><i class="fas fa-envelope"></i> alumniofbauet@gmail.com</a>
         </div>
       </div>
     </div>
     <div class="middle box">
       <div class="topic">Our Services</div>
       <div><a href="#">Directory</a></div>
       <div><a href="#">Gallery</a></div>
       <div><a href="#">About</a></div>
       <div><a href="#">Committee</a></div>
       <div><a href="#">Login</a></div>
       <div><a href="#">Terms and Condition</a></div>
     </div>
     <div class="right box">
       <div class="topic">Subscribe us</div>
       <form action="#">
	   	   <img class="img-logo" src="assets/img/bauetlogo.png" alt="" style="
    width: 100%;
    height: auto;
    max-width: 92px;
">
<img class="img-logo" src="assets/img/alumnilogo.png" alt="" style="
    width: 100%;
    height: auto;
    max-width: 100px;
">
         <div class="media-icons">
           <a href="#"><i class="fab fa-facebook-f"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
           <a href="#"><i class="fab fa-youtube"></i></a>
           <a href="#"><i class="fab fa-linkedin-in"></i></a>
         </div>
       </form>
     </div>
   </div>
   <div class="bottom">
     <p>Copyright © 2022 Developed By:<a href="thehorsemen/index.php"> THE HORSEMEN.</a> All rights reserved</p>
   </div>
 </footer>
 <?php include('footer.php') ?>
    </body>
    <script type="text/javascript">
      $('#login').click(function(){
        uni_modal("Login",'login.php')
      })
    </script>
    <?php $conn->close() ?>
</body>
</html>
