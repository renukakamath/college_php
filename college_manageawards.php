<?php include 'collegeheader.php' ;
$cid=$_SESSION['college_id'];
extract($_GET);

if (isset($_POST['award'])) {
	extract($_POST);
	$q="insert into awards values(null,'$cid','$aname','$ayear')";
	insert($q);
	 alert(' successfully');
	return redirect('college_manageawards.php');

}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from awards where award_id='$did'";
	delete($q);
	alert(' successfully');
	return redirect('college_manageawards.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from awards where award_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	$q="update awards set award_name='$aname',award_year='$ayear' where award_id='$uid'";
	update($q);
	alert(' successfully');
	return redirect('college_manageawards.php');


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
	<h1 style="color: white">Manage Award</h1>
	<form method="post">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Award Name</th>
				<td><input type="text" name="aname" required="" class="form-control" value="<?php echo $res[0]['award_name'] ?>"></td>
			</tr>
			<tr>
				<th>Award Year</th>
				<td><input type="text" name="ayear" required="" class="form-control" value="<?php echo $res[0]['award_year'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="update" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Award Name</th>
				<td><input type="text" required="" class="form-control" name="aname" ></td>
			</tr>
			<tr>
				<th>Award Year</th>
				<td><input type="text" required="" class="form-control" name="ayear" ></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="award" class="btn btn-success" value="submit"></td>
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
	<h1>View Award</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>College</th>
			<th>Award Name</th>
			<th>Award Year</th>
		</tr>
		<?php 

        $q="select * from awards inner join college using (college_id) where college_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['college_name'] ?></td>
        		<td><?php echo $row['award_name'] ?></td>
        		<td><?php echo $row['award_year'] ?></td>
        		<td><a class="btn btn-success" href="?uid=<?php echo $row['award_id'] ?>">Update</a></td>
        		<td><a class="btn btn-danger" href="?did=<?php echo $row['award_id'] ?>">Delete</a></td>
        		
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>