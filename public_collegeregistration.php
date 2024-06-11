<?php include 'publicheader.php' ;
if (isset($_POST['creg'])) {
	extract($_POST);

if (isset($_POST['creg'])) {
	extract($_POST);
	$q="select * from login where username='$uname' and Password='$pwd'";
	$r=select($q);
	if (sizeof($r)>0) {
		alert('alert exist');
	}else{
	$dir = "image/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
		  $q="insert into login values(null,'$uname','$pwd','college')";
     $id=insert($q);

	$q1="insert into college values(null,'$id','$cname','$uni','$place','$dis','$pin','$phone','$email')";
	$ids=insert($q1);
	    $q2="insert into images values(null,'$ids','college','$target')";
	      insert($q2);
	       alert(' successfully');
	return redirect('public_collegeregistration.php');

	
	}
		else
		{
			echo "file uploading error occured";
		}
	
 
	

}
}
}

?>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false"  >
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
	<h1 style="color: white">College Registration</h1>
	<form method="post" enctype="multipart/form-data">
		<div style="overflow: scroll;height: 600px;width: 1300px">
		<table class="table" style="width: 500px;height: auto;color: white">
			<tr>
				<th>College Name</th>
				<td><input type="text" required="" class="form-control" name="cname"></td>
			</tr>
			<tr>
				<th>University</th>
				<td><input type="text" required="" class="form-control" name="uni"></td>
			</tr>
			<tr>
				<th>Place</th>
				<td><input type="text" required="" class="form-control" name="place"></td>
			</tr>
			<tr>
				<th>District</th>
				<td><input type="text" required="" class="form-control" name="dis"></td>
			</tr>
			<tr>
				<th>Pincode</th>
				<td><input type="text" required="" class="form-control" pattern="[0-9]{6}" name="pin"></td>
			</tr>
			<tr>
				<th>Phone</th>
				<td><input type="text" required="" class="form-control" pattern="[0-9]{10}" name="phone"></td>
			</tr>
			<tr>
				<th>email</th>
				<td><input type="email" required="" class="form-control" name="email"></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" required="" class="form-control" name="imgg"></td>
			</tr>
			<tr>
				<th>User Name</th>
				<td><input type="text" required="" class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="Password" required="" class="form-control" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="creg" class="btn btn-success" value="submit"></td>
			</tr>
		</table>
		</div>
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

<?php include 'footer.php' ?>