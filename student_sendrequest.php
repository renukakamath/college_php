<?php include 'studentheader.php';
$sid=$_SESSION['student_id'];
extract($_GET);

if (isset($_POST['request'])) {
	extract($_POST);

	$q="select * from request where course_id='$cor' and student_id='$sid' ";
	$res=select($q);
	if (sizeof($res)>0) {
		alert('already exist');
	}else{



	echo$q="insert into request values(null,'$sid','$cor',curdate(),'pending')";
	insert($q);
	alert(' Successfully');
	return redirect('student_sendrequest.php');
}

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
	<h1 style="color: white">Send Request</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Course</th>
				<td>
					<select name="cor" required="" class="form-control">
						<option>select</option>
						<?php 
                   $q="select * from course";
                   $res=select($q);
                   foreach ($res as $row) {
                   	?>
                   <option value="<?php echo $row['course_id'] ?>"><?php echo $row['course_name'] ?></option>
                <?php 
                  }
                  ?>
					</select>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="request" value="submit"></td>
			</tr>
		</table>
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
	<h1>View Request</h1>
<table class="table" style="width: 500px">
	<tr>
    <th>sino</th>
		<th>Student</th>
		<th>Course</th>
		<th>Date</th>
		<th>status</th>
	</tr>
	<?php 
  $q="SELECT * FROM request INNER JOIN Student using (student_id) INNER JOIN course USING (course_id) where student_id='$sid'";
  $res=select($q);
   $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['first_name'] ?></td>
  		<td><?php echo $row['course_name'] ?></td>
  		<td><?php echo $row['date'] ?></td>


  		<td><?php echo $row['status'] ?></td>

<?php 
}
	 ?>
</table>
</center>

<?php include 'footer.php' ?>