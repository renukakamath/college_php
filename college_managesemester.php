<?php include 'collegeheader.php' ;
$cid=$_SESSION['college_id'];
extract($_GET);


if (isset($_POST['semester'])) {
	extract($_POST);
	 $q2="select * from semester where  course_id='$cid' and semester='$sem' ";
	$r=select($q2);
	if (sizeof($r)==0) 
	{
		$q="insert into semester values(null,'$cid','$sem','$sems')";
		insert($q);
	 	alert(' successfully');
	}
	else{
		alert("Already Exist");
	}
	
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from semester where semester_id='$did'";
	delete($q);
	alert(' successfully');
	return redirect('college_managesemester.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from semester where semester_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update semester set semester='$sem',sem_details='$sems' where semester_id='$uid'";
	update($q);
	alert(' successfully');
	return redirect('college_managesemester.php');


}

?>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false" >
		<!-- Indicators -->
		
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
					<div class="dtab">
						<div class="container">
							<div class="row">
								<div class="col-md-12 col-sm-12 text-right">
									<div class="big-tagline">
										<center>
<center>
	<h1 style="color: white">Manage Semester</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Semester</th>
				<td><input type="text" name="sem" required="" class="form-control" value="<?php echo $res[0]['semester'] ?>"></td>
			</tr>
			<tr>
				<th>Semester details</th>
				<td><input type="text" required="" class="form-control" value="<?php echo $res[0]['sem_details'] ?>" name="sems"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Semester</th>
				<td><input type="text" required="" class="form-control" name="sem" ></td>
			</tr>
			<tr>
				<th>Semester details</th>
				<td><input type="text" required="" class="form-control" name="sems"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="semester" value="submit"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>

									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
		</div></div>
<center>
	<h1>View Semester</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>Course</th>
			<th>Semester</th>
			<th>Sem Details</th>
			
		</tr>
		<?php 

        $q3="select * from semester inner join course using (course_id) where course_id='$cid'";
        $res=select($q3);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['course_name'] ?></td>
        		
        		<td><?php echo $row['semester'] ?></td>
        		<td><?php echo $row['sem_details'] ?></td>
        		<td><a class="btn btn-success" href="?uid=<?php echo $row['semester_id'] ?>">Update</a></td>
        		<td><a class="btn btn-danger" href="?did=<?php echo $row['semester_id'] ?>">Delete</a></td>
        		<td><a class="btn btn-success" href="college_managefees.php?sid=<?php echo $row['semester_id'] ?>">Manage Fees</a></td>
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>