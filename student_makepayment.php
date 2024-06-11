<?php include 'studentheader.php' ;

$sid=$_SESSION['student_id'];
extract($_GET);

if (isset($_POST['payment'])) {
	extract($_POST);

	$q="insert into payment values(null,'$sid','$fid',curdate())";
	insert($q);
		 alert(' successfully');
	return redirect('student_searchcollege.php');
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
<h1 style="color: white">Make Payment</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>Card No:</th>
			<td><input type="text" required="" maxlength="16" class="form-control" name="card"></td>
		</tr>
		<tr>
			<th>Card Holder Name:</th>
			<td><input type="text" required="" class="form-control" name="card"></td>
		</tr>
		<tr>
			<th>CVV</th>
			<td><input type="password" maxlength="3" required="" class="form-control" name="cvv"></td>
		</tr>
		<tr>
			<th>Fees Amount</th>
			<td><input type="text" required="" class="form-control" value="<?php echo $aid ?>"  name="amo"></td>
		</tr>
		<tr>
            <td align="center" colspan="2"><input type="submit" class="btn btn-success" name="payment" value="submit"></th>
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