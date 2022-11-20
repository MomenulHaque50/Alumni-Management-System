<?php 
include 'admin/db_connect.php'; 
?>
<style>
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
        <header class="masthead">
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Manage Account</h3>
                        <hr class="divider my-4" />

                    <div class="col-md-12 mb-2 justify-content-center">
                    </div>                        
                    </div>
                    
                </div>
            </div>
        </header>
            <div class="container mt-3 pt-2">
               <div class="col-lg-12">
                   <div class="card mb-4">
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="col-md-12">
                                    <form action="" id="update_account">
										 <h4>Personal Information</h4>
										 <br>
								
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Full Name</label>
                                                <input type="text" class="form-control" name="fullname" value="<?php echo $_SESSION['bio']['fullname'] ?>" required>
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Address</label>
                                                <input type="text" class="form-control" name="address" value="<?php echo $_SESSION['bio']['address'] ?>" required>
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">CellPhone</label>
                                                <input type="text" class="form-control" name="cellphone" value="<?php echo $_SESSION['bio']['cellphone'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Hometown</label>
                                                <input type="text" class="form-control" name="hometown" value="<?php echo $_SESSION['bio']['hometown'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Residence</label>
                                                <input type="text" class="form-control" name="residence" value="<?php echo $_SESSION['bio']['residence'] ?>">
                                            </div>
                                        
                                                <div class="col-md-4">
                                                <label for="" class="control-label">Blood Group</label>
                                                <input type="text" class="form-control" name="bloodgroup" value="<?php echo $_SESSION['bio']['bloodgroup'] ?>" >
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col-md-5">
                                                <label for="" class="control-label">About</label>
                                                <input type="text" class="form-control" name="about" value="<?php echo $_SESSION['bio']['about'] ?>">
                                            </div>
                                            <div class="col-md-5">
                                                <label for="" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                                                <img src="admin/assets/uploads/<?php echo $_SESSION['bio']['avatar'] ?>" alt="" id="cimg">

                                            </div>  
                                        </div>
										<h4>Currently Connected To</h4>
										 <br>
										 <div class="row">
										   <div class="col-md-4">
                                                <label for="" class="control-label">Student</label>
                                                <input type="checkbox" id="opt1" onclick="uncheckEmployee(this); onCheckboxChanged(this.checked);" name="connected1" value="0">
                                            </div>
										 
										   <div class="col-md-4">
                                                <label for="" class="control-label">Employee</label>
                                                <input type="checkbox" id="opt2" onclick="uncheckStudent(this); onCheckboxChanged(this.unchecked);"   name="connected2" value="1">
                                           <br> <small><i>If you select Employee option, then please fillup the below section.</i></small>
											</div>
										 
</div>		
		                            <div class="row form-group" id="hiddenRow1">
                                     <div class="col-md-4" >
                                                <label for="" class="control-label">Joining Month</label>
                                                <input type="text" class="form-control" name="joiningmonth" value="<?php echo $_SESSION['bio']['joiningmonth'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Joining Year</label>
                                                <input type="text" class="form-control" name="joiningyear" value="<?php echo $_SESSION['bio']['joiningyear'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Name</label>
                                                <input type="text" class="form-control" name="institutionname" value="<?php echo $_SESSION['bio']['institutionname'] ?>">
                                            </div>		
												  </div>
												  <div class="row form-group" id="hiddenRow2">
                                     <div class="col-md-4">
                                                <label for="" class="control-label">Position</label>
                                                <input type="text" class="form-control" name="position" value="<?php echo $_SESSION['bio']['position'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Location</label>
                                                <input type="text" class="form-control" name="location" value="<?php echo $_SESSION['bio']['location'] ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Website/ Contact</label>
                                                <input type="text" class="form-control" name="contact" value="<?php echo $_SESSION['bio']['contact'] ?>" >
                                            </div>		
												  </div>
												  <br>
												  <h4>Educational Exprience</h4>
										 <br>
								
                                        <div class="row form-group">
									
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Degree/Certificate</label>
                                                <select class="custom-select" name="degree1" >
                                                    <option <?php echo $_SESSION['bio']['degree1'] =='SSC' ? 'selected' : '' ?>>SSC</option>
                                                </select>
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">School Name</label>
                                                <input type="text" class="form-control" name="school" value="<?php echo $_SESSION['bio']['school'] ?>" >
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Passing Year</label>
                                                <input type="text" class="form-control" name="pass1" value="<?php echo $_SESSION['bio']['pass1'] ?>">
                                            </div>
											   <div class="col-md-4">
                                                <label for="" class="control-label">Subject</label>
                                                <input type="text" class="form-control" name="sub1" value="<?php echo $_SESSION['bio']['sub1'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Board</label>
                                                <input type="text" class="form-control" name="board1" value="<?php echo $_SESSION['bio']['board1'] ?>">
                                            </div>
                                        </div>
										
										<div class="row form-group">
									
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Degree/Certificate</label>
                                                <select class="custom-select" name="degree2" >
                                                   <option <?php echo $_SESSION['bio']['degree2'] =='HSC' ? 'selected' : '' ?>>HSC</option>
                                                </select>
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">College Name</label>
                                                <input type="text" class="form-control" name="college" value="<?php echo $_SESSION['bio']['college'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Passing Year</label>
                                                <input type="text" class="form-control" name="pass2" value="<?php echo $_SESSION['bio']['pass2'] ?>">
                                            </div>
											   <div class="col-md-4">
                                                <label for="" class="control-label">Subject</label>
                                                <input type="text" class="form-control" name="sub2" value="<?php echo $_SESSION['bio']['sub2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Board</label>
                                                <input type="text" class="form-control" name="board2" value="<?php echo $_SESSION['bio']['board2'] ?>">
                                            </div>
                                        </div>
										<div class="row form-group">
									
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Degree/Certificate</label>
                                                <select class="custom-select" name="degree3" >
                                                    <option <?php echo $_SESSION['bio']['degree3'] =='Master' ? 'selected' : '' ?>>Master</option>
                                                </select>
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">University Name</label>
                                                <input type="text" class="form-control" name="uni1" value="<?php echo $_SESSION['bio']['uni1'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Subject</label>
                                                <input type="text" class="form-control" name="sub3" value="<?php echo $_SESSION['bio']['sub3'] ?>">
                                        </div>
										</div>
											<div class="row form-group">
									
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Degree/Certificate</label>
                                                <select class="custom-select" name="degree4" >
                                                    <option <?php echo $_SESSION['bio']['degree4'] =='Doctor' ? 'selected' : '' ?>>Doctor</option>
                                                </select>
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">University Name</label>
                                                <input type="text" class="form-control" name="uni2" value="<?php echo $_SESSION['bio']['uni2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Subject</label>
                                                <input type="text" class="form-control" name="sub4" value="<?php echo $_SESSION['bio']['sub4'] ?>">
                                        </div>
										</div>
                                       
												  <br>
					                    <h4>Social Connectivity</h4>
										 <br>
								
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Personal Website</label>
                                                <input type="text" class="form-control" name="web" value="<?php echo $_SESSION['bio']['web'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Facebook Profile Link</label>
                                                <input type="text" class="form-control" name="fb" value="<?php echo $_SESSION['bio']['fb'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Linkedin Profile Link</label>
                                                <input type="text" class="form-control" name="lin" value="<?php echo $_SESSION['bio']['lin'] ?>">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Instagram Profile Link</label>
                                                <input type="text" class="form-control" name="insta" value="<?php echo $_SESSION['bio']['insta'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Twitter Profile Link</label>
                                                <input type="text" class="form-control" name="twi" value="<?php echo $_SESSION['bio']['twi'] ?>">
                                            </div>
                                        
                                                <div class="col-md-4">
                                                <label for="" class="control-label">Github Profile Link</label>
                                                <input type="text" class="form-control" name="git" value="<?php echo $_SESSION['bio']['git'] ?>">
                                            </div>
                                        </div>
									
										<br>
					                    <h4>Personal Skill (Top 3)</h4>
										 <br>
								
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Skill Name 1</label>
                                                <input type="text" class="form-control" name="skill1" value="<?php echo $_SESSION['bio']['skill1'] ?>" >
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Skill Name 2</label>
                                                <input type="text" class="form-control" name="skill2" value="<?php echo $_SESSION['bio']['skill2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Skill Name 3</label>
                                                <input type="text" class="form-control" name="skill3" value="<?php echo $_SESSION['bio']['skill3'] ?>">
                                            </div>
                                        </div>
										<br>
					                    <h4>Awards/Achievement (Top 3)</h4>
									   <br>
								         <h6>Personal Achievement 1</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Position/Award Name</label>
                                                <input type="text" class="form-control" name="award1" value="<?php echo $_SESSION['bio']['award1'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Issued By</label>
                                                <input type="text" class="form-control" name="iss1" value="<?php echo $_SESSION['bio']['iss1'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Announcement Date</label>
                                                <input type="text" class="form-control" name="dat1" value="<?php echo $_SESSION['bio']['dat1'] ?>">
                                            </div>
                                        </div>
										 <h6>Personal Achievement 2</h6>
										 <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Position/Award Name</label>
                                                <input type="text" class="form-control" name="award2" value="<?php echo $_SESSION['bio']['award2'] ?>" >
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Issued By</label>
                                                <input type="text" class="form-control" name="iss2" value="<?php echo $_SESSION['bio']['iss2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Announcement Date</label>
                                                <input type="text" class="form-control" name="dat2" value="<?php echo $_SESSION['bio']['dat2'] ?>">
                                            </div>
                                        </div>
										 <h6>Personal Achievement 3</h6>
										 <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Position/Award Name</label>
                                                <input type="text" class="form-control" name="award3" value="<?php echo $_SESSION['bio']['award3'] ?>" >
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Issued By</label>
                                                <input type="text" class="form-control" name="iss3" value="<?php echo $_SESSION['bio']['iss3'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Announcement Date</label>
                                                <input type="text" class="form-control" name="dat3" value="<?php echo $_SESSION['bio']['dat3'] ?>">
                                            </div>
                                        </div>
										<br>
					                    <h4>Work Exprience (Top 3)</h4>
									   <br>
								         <h6>Job Exprience 1</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Joining Month</label>
                                                <input type="text" class="form-control" name="jm1" value="<?php echo $_SESSION['bio']['jm1'] ?>">
                                            </div>
                                           <div class="col-md-3">
                                                <label for="" class="control-label">Joining Year</label>
                                                <input type="text" class="form-control" name="jy1" value="<?php echo $_SESSION['bio']['jy1'] ?>">
                                            </div>
                                             <div class="col-md-3">
                                                <label for="" class="control-label">Leaving Month</label>
                                                <input type="text" class="form-control" name="lm1" value="<?php echo $_SESSION['bio']['lm1'] ?>">
                                            </div>
											 <div class="col-md-3">
                                                <label for="" class="control-label">Leaving Year</label>
                                                <input type="text" class="form-control" name="ly1" value="<?php echo $_SESSION['bio']['ly1'] ?>" >
                                            </div>
                                        </div>
										  <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Name</label>
                                                <input type="text" class="form-control" name="in1" value="<?php echo $_SESSION['bio']['in1'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Position</label>
                                                <input type="text" class="form-control" name="pos1" value="<?php echo $_SESSION['bio']['pos1'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Institution Website/ Contact</label>
                                                <input type="text" class="form-control" name="con1" value="<?php echo $_SESSION['bio']['con1'] ?>">
                                            </div>
                                        </div>
										<h6>Job Exprience 2</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Joining Month</label>
                                                <input type="text" class="form-control" name="jm2" value="<?php echo $_SESSION['bio']['jm2'] ?>">
                                            </div>
                                           <div class="col-md-3">
                                                <label for="" class="control-label">Joining Year</label>
                                                <input type="text" class="form-control" name="jy2" value="<?php echo $_SESSION['bio']['jy2'] ?>">
                                            </div>
                                             <div class="col-md-3">
                                                <label for="" class="control-label">Leaving Month</label>
                                                <input type="text" class="form-control" name="lm2" value="<?php echo $_SESSION['bio']['lm2'] ?>">
                                            </div>
											 <div class="col-md-3">
                                                <label for="" class="control-label">Leaving Year</label>
                                                <input type="text" class="form-control" name="ly2" value="<?php echo $_SESSION['bio']['ly2'] ?>">
                                            </div>
                                        </div>
										  <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Name</label>
                                                <input type="text" class="form-control" name="in2" value="<?php echo $_SESSION['bio']['in2'] ?>" >
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Position</label>
                                                <input type="text" class="form-control" name="pos2" value="<?php echo $_SESSION['bio']['pos2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Institution Website/ Contact</label>
                                                <input type="text" class="form-control" name="con2" value="<?php echo $_SESSION['bio']['con2'] ?>">
                                            </div>
                                        </div>
										
										<h6>Job Exprience 3</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-3">
                                                <label for="" class="control-label">Joining Month</label>
                                                <input type="text" class="form-control" name="jm3" value="<?php echo $_SESSION['bio']['jm3'] ?>" >
                                            </div>
                                           <div class="col-md-3">
                                                <label for="" class="control-label">Joining Year</label>
                                                <input type="text" class="form-control" name="jy3" value="<?php echo $_SESSION['bio']['jy3'] ?>">
                                            </div>
                                             <div class="col-md-3">
                                                <label for="" class="control-label">Leaving Month</label>
                                                <input type="text" class="form-control" name="lm3" value="<?php echo $_SESSION['bio']['lm3'] ?>">
                                            </div>
											 <div class="col-md-3">
                                                <label for="" class="control-label">Leaving Year</label>
                                                <input type="text" class="form-control" name="ly3" value="<?php echo $_SESSION['bio']['ly3'] ?>" >
                                            </div>
                                        </div>
										  <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Name</label>
                                                <input type="text" class="form-control" name="in3" value="<?php echo $_SESSION['bio']['in3'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Position</label>
                                                <input type="text" class="form-control" name="pos3" value="<?php echo $_SESSION['bio']['pos3'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Institution Website/ Contact</label>
                                                <input type="text" class="form-control" name="con3" value="<?php echo $_SESSION['bio']['con3'] ?>">
                                            </div>
                                        </div>
										<br>
					                    <h4>Publications (If any, Top 3)</h4>
									   <br>
								         <h6>Publication 1</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Research Titile</label>
                                                <input type="text" class="form-control" name="rt1" value="<?php echo $_SESSION['bio']['rt1'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Accepted By</label>
                                                <input type="text" class="form-control" name="acc1" value="<?php echo $_SESSION['bio']['acc1'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Other Researcher Name (If any)</label>
                                                <input type="text" class="form-control" name="orn1" value="<?php echo $_SESSION['bio']['orn1'] ?>">
                                            </div>
                                        </div>
										 <h6>Publication 2</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Research Titile</label>
                                                <input type="text" class="form-control" name="rt2" value="<?php echo $_SESSION['bio']['rt2'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Accepted By</label>
                                                <input type="text" class="form-control" name="acc2" value="<?php echo $_SESSION['bio']['acc2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Other Researcher Name (If any)</label>
                                                <input type="text" class="form-control" name="orn2" value="<?php echo $_SESSION['bio']['orn2'] ?>">
                                            </div>
                                        </div>
										 <h6>Publication 3</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Research Titile</label>
                                                <input type="text" class="form-control" name="rt3" value="<?php echo $_SESSION['bio']['rt3'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Accepted By</label>
                                                <input type="text" class="form-control" name="acc3" value="<?php echo $_SESSION['bio']['acc3'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Other Researcher Name (If any)</label>
                                                <input type="text" class="form-control" name="orn3" value="<?php echo $_SESSION['bio']['orn3'] ?>">
                                            </div>
                                        </div>
										
										<br>
					                    <h4>Projects (If any, Top 3)</h4>
									   <br>
								         <h6>Project 1</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Project Titile</label>
                                                <input type="text" class="form-control" name="pt1" value="<?php echo $_SESSION['bio']['pt1'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Project Link</label>
                                                <input type="text" class="form-control" name="pl1" value="<?php echo $_SESSION['bio']['pl1'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Other Project Member Name (If any)</label>
                                                <input type="text" class="form-control" name="opm1" value="<?php echo $_SESSION['bio']['opm1'] ?>">
                                            </div>
                                        </div>
										 <h6>Project 2</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Project Titile</label>
                                                <input type="text" class="form-control" name="pt2" value="<?php echo $_SESSION['bio']['pt2'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Project Link</label>
                                                <input type="text" class="form-control" name="pl2" value="<?php echo $_SESSION['bio']['pl2'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Other Project Member Name (If any)</label>
                                                <input type="text" class="form-control" name="opm2" value="<?php echo $_SESSION['bio']['opm2'] ?>">
                                            </div>
                                        </div>
										 <h6>Project 3</h6>
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Project Titile</label>
                                                <input type="text" class="form-control" name="pt3" value="<?php echo $_SESSION['bio']['pt3'] ?>">
                                            </div>
                                           <div class="col-md-4">
                                                <label for="" class="control-label">Project Link</label>
                                                <input type="text" class="form-control" name="pl3" value="<?php echo $_SESSION['bio']['pl3'] ?>">
                                            </div>
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Other Project Member Name (If any)</label>
                                                <input type="text" class="form-control" name="opm3" value="<?php echo $_SESSION['bio']['opm3'] ?>">
                                            </div>
                                        </div>
										<br>
												  <h4>Account Information</h4>
                                        <div class="row">
                                         
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Update Password</label>
                                                <input type="password" class="form-control" name="password" >
												 <small><i>Leave this blank if you dont want to change your password</i></small>
                                            </div>
                                        </div>
                                            
                                        </div>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Update Account</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
                
            </div>


<script>
   $('.datepickerY').datepicker({
        format: " yyyy", 
        viewMode: "years", 
        minViewMode: "years"
   })
   $('.select2').select2({
    placeholder:"Please Select Here",
    width:"100%"
   })
   function displayImg(input,_this) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
$('#update_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=update_account',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
                alert_toast("Account successfully updated.",'success');
                setTimeout(function(){
                 location.replace('index.php')
                },700)
        }
    })
})
</script>