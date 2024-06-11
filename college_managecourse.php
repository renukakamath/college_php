<?php include 'collegeheader.php' ;
$cid=$_SESSION['college_id'];
extract($_GET);

if (isset($_POST['course'])) {
	extract($_POST);
	$q1="select * from course where  course_name='$cname'and college_id='$cid' ";
	$r=select($q1);
	if (sizeof($r)>0) {
		alert('already exist');
	}else{
	$q="insert into course values(null,'$cid','$cname')";
	insert($q);
	 alert(' successfully');
	return redirect('college_managecourse.php');
}
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from course where course_id='$did'";
	delete($q);
	alert(' successfully');
	return redirect('college_managecourse.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from course where course_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update course set course_name='$cname' where course_id='$uid'";
	update($q);
	alert(' successfully');
	return redirect('college_managecourse.php');


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
	<h1 style="color: white">Manage Course</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Course Name</th>
				<td><input type="text" name="cname" required="" class="form-control" value="<?php echo $res[0]['course_name'] ?>"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Course Name</th>
				<td><input type="text" required="" class="form-control" name="cname"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="course" value="submit"></td>
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
	<h1>View Courses</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
		
			<th>Course Name</th>
			
		</tr>
		<?php 

        $q="select * from course inner join college using (college_id) where college_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		
        		<td><?php echo $row['course_name'] ?></td>
        		
        		<td><a class="btn btn-success" href="?uid=<?php echo $row['course_id'] ?>">Update</a></td>
        		<td><a class="btn btn-danger" href="?did=<?php echo $row['course_id'] ?>">Delete</a></td>
        		<td><a class="btn btn-primary" href="college_managesemester.php?cid=<?php echo $row['course_id'] ?>">Manage Semester</a></td>
        		
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>