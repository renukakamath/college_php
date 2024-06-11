<?php include 'publicheader.php';

if (isset($_POST['ureg'])) {
	extract($_POST);
   
   $q3="select * from login where username='$uname' and Password='$pwd'";
   $r=select($q3);
   if (sizeof($r)>0) {
         alert('already exist');
   }else{
	$q="insert into login values(null,'$uname','$pwd','student')";
	$id=insert($q);

	$q="insert into student values(null,'$id','$fname','$lname','$place','$phone','$email')";
	insert($q);
    alert(' successfully');
	return redirect('public_studentregistration.php');

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
	<h1 style="color: white">User Registration</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>first Name</th>
				<td><input type="text" required="" class="form-control" name="fname"></td>
			</tr>
			<tr>
				<th>Last Name</th>
				<td><input type="text" required="" class="form-control" name="lname"></td>
			</tr>
			<tr>
				<th>Place</th>
				<td><input type="text" required="" class="form-control" name="place"></td>
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
				<th>User Name</th>
				<td><input type="text" required="" class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="Password" required="" class="form-control" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="ureg" class="btn btn-success" value="submit"></td>
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

<?php include 'footer.php' ?>