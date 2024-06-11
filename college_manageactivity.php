<?php include 'collegeheader.php' ;
$cid=$_SESSION['college_id'];
extract($_GET);


if (isset($_POST['activity'])) {
	extract($_POST);
	$q="insert into activity values(null,'$cid','$aname','$des')";
	insert($q);
	 alert(' successfully');
	return redirect('college_manageactivity.php');

}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from activity where activity_id='$did'";
	delete($q);
	alert(' successfully');
	return redirect('college_manageactivity.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from activity where activity_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	echo$q="update activity set activity_name='$aname',description='$des' where activity_id='$uid'";
	update($q);
	alert(' successfully');
	return redirect('college_manageactivity.php');


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
	<h1 style="color: white">Manage Activitys</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">

			<tr>
				<th>Activity Name</th>
				<td><input type="text" name="aname"  required="" class="form-control" value="<?php echo $res[0]['activity_name'] ?>"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><input type="text" name="des" required="" class="form-control" value="<?php echo $res[0]['description'] ?>"></td>
			</tr>
			
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Activity Name</th>
				<td><input type="text" required="" class="form-control" name="aname" ></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><input type="text" required="" class="form-control" name="des" ></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="activity" class="btn btn-success" value="submit"></td>
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
	<table class="table" style="width: 500px">
		<tr>
			<th></th>
		</tr>
	</table>
</center>
<center>
	<h1>View Activitys</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>College</th>
			<th>Activity Name</th>
			<th>Description</th>
			
		</tr>
		<?php 

        $q="select * from activity inner join college using (college_id) where college_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['college_name'] ?></td>
        		<td><?php echo $row['activity_name'] ?></td>
        		<td><?php echo $row['description'] ?></td>
        		<td><a class="btn btn-success" href="?uid=<?php echo $row['activity_id'] ?>">Update</a></td>
        		<td><a class="btn btn-danger" href="?did=<?php echo $row['activity_id'] ?>">Delete</a></td>
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>