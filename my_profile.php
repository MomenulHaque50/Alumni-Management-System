

<?php
include 'admin/db_connect.php'; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alumni_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



$sid = $_SESSION['bio']['id'];
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
    

    </style>
</head>
<body class="w3-light-grey">


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

</body>
</html>
