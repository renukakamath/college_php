<?php include 'collegeheader.php' ;
$cid=$_SESSION['college_id'];
extract($_GET);
extract($_GET);
if (isset($_POST['fees'])) {
	extract($_POST);
	$q="insert into fees values(null,'$sid','$fee')";
	insert($q);
	 alert(' successfully');
	

}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from fees where fees_id='$did'";
	delete($q);
	alert(' successfully');
	return redirect('college_managefees.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from fees where fees_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update fees set fee_amount='$fee' where fees_id='$uid'";
	update($q);
	alert(' successfully');
	return redirect('college_managefees.php');


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
	<h1 style="color: white">Manage Fees</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Fees</th>
				<td><input type="text" name="fee" required="" class="form-control" value="<?php echo $res[0]['fee_amount'] ?>"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Fees</th>
				<td><input type="text" required="" class="form-control" name="fee" ></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="fees" value="submit"></td>
			</tr>
		</table>
	<?php } ?>
	</form>
</center>
<center>

									</div>
								</div>
							</div><!-- end row -->            
						</div><!-- end container -->
					</div>
				</div><!-- end section -->
			</div>
		</div></div>	
</center>
<center>
	<h1>View Fees</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>course</th>
			<th>Semester</th>
			<th>Fees</th>
			
		</tr>
		<?php 

        $q="select * from fees inner join semester using (semester_id) inner join course using(course_id) where semester_id='$sid'  ";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		
        		<td><?php echo $row['course_name'] ?></td>
        		<td><?php echo $row['semester'] ?></td>
        		<td><?php echo $row['fee_amount'] ?></td>
        		<td><a class="btn btn-success"href="?uid=<?php echo $row['fees_id'] ?>">Update</a></td>
        		<td><a class="btn btn-success" href="?did=<?php echo $row['fees_id'] ?>">Delete</a></td>
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>