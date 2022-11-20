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
                    	<h3 class="text-white">Create Account</h3>
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
                                    <form action="" id="create_account">
										 <h4>Personal Information</h4>
										 <br>
								
                                        <div class="row form-group">
									
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Student ID</label>
                                                <input type="text" class="form-control" name="stuid" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Full Name</label>
                                                <input type="text" class="form-control" name="fullname" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Date of Birth</label>
                                                <input type="date" class="form-control" type="text" name="dateofbirth" >
												
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Gender</label>
                                                <select class="custom-select" name="gender" required>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Batch</label>
                                            <select class="custom-select" name="batch" required>
                                                    <option value="1st">1st</option>
                                                    <option value="2nd">2nd</option>
													<option value="3rd">3rd</option>
                                                    <option value="4th">4th</option>
													<option value="5th">5th</option>
                                                    <option value="6th">6th</option>
													<option value="7th">7th</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Course Graduated</label>
                                                <select class="custom-select select2" name="course_id" required>
                                                    <option></option>
                                                    <?php 
                                                    $course = $conn->query("SELECT * FROM courses order by course asc");
                                                    while($row=$course->fetch_assoc()):
                                                    ?>
                                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['course'] ?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
										<div class="row form-group">
										       <div class="col-md-4">
                                                <label for="" class="control-label">Passing Year</label>
                                                <input type="text" class="form-control" name="passingyear" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">CellPhone</label>
                                                <input type="text" class="form-control" name="cellphone" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Address</label>
                                                <input type="text" class="form-control" name="address" required>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                                <div class="col-md-4">
                                                <label for="" class="control-label">Blood Group</label>
                                                <input type="text" class="form-control" name="bloodgroup" required>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="" class="control-label">Image</label>
                                                <input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
                                                <img src="" alt="" id="cimg">

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
                                                <input type="text" class="form-control" name="joiningmonth">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Joining Year</label>
                                                <input type="text" class="form-control" name="joiningyear">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Name</label>
                                                <input type="text" class="form-control" name="institutionname" >
                                            </div>		
												  </div>
												  <div class="row form-group" id="hiddenRow2">
                                     <div class="col-md-4">
                                                <label for="" class="control-label">Position</label>
                                                <input type="text" class="form-control" name="position" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Location</label>
                                                <input type="text" class="form-control" name="location" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Institution Website/ Contact</label>
                                                <input type="text" class="form-control" name="contact" >
                                            </div>		
												  </div>
												  <br>
												  <h4>Account Information</h4>
										 <br>
                                        <div class="row">
                                             <div class="col-md-4">
                                                <label for="" class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="" class="control-label">Password</label>
                                                <input type="password" class="form-control" name="password" required>
                                            </div>
                                        </div>
                                        <div id="msg">
                                            
                                        </div>
                                        <hr class="divider">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-primary">Create Account</button>
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
$('#create_account').submit(function(e){
    e.preventDefault()
    start_load()
    $.ajax({
        url:'admin/ajax.php?action=signup',
        data: new FormData($(this)[0]),
        cache: false,
        contentType: false,
        processData: false,
        method: 'POST',
        type: 'POST',
        success:function(resp){
            if(resp == 1){
                location.replace('index.php')
            }else{
                $('#msg').html('<div class="alert alert-danger">email already exist.</div>')
                end_load()
            }
        }
    })
})
</script>