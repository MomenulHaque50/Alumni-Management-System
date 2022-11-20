<?php 
include('db_connect.php');
session_start();
if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM student where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	<div id="msg"></div>
	
	<form action="" id="manage-student">	
		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
		<div class="form-group">
			<label for="name">Student ID</label>
			<input type="text" name="studid" id="studid" class="form-control" value="<?php echo isset($meta['studid']) ? $meta['studid']: '' ?>" required autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required  autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name">Batch</label>
			<input type="text" name="batch" id="batch" class="form-control" value="<?php echo isset($meta['batch']) ? $meta['batch']: '' ?>" autocomplete="off">
		</div>
		<div class="form-group">
			<label for="name">Department</label>
			<input type="text" name="department" id="department" class="form-control" value="<?php echo isset($meta['department']) ? $meta['department']: '' ?>" autocomplete="off">
		</div>
	</form>
</div>
<script>
	
	$('#manage-student').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=save_student',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}else{
					$('#msg').html('<div class="alert alert-danger">Student ID already exist</div>')
					end_load()
				}
			}
		})
	})

</script>