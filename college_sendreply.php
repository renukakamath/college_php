<?php include 'collegeheader.php' ;
extract($_GET);
if (isset($_POST['reply'])) {
	extract($_POST);

	echo$q="update enquiry set reply='$rep' where enquiry_id='$eid'";
	update($q);
	alert('successfully');
	return redirect('college_viewenqiry.php');
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
	<h1 style="color: white">Sent Reply</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
			<th>Reply</th>
			<td><input type="text" required="" class="form-control" name="rep"></td>
            </tr>
            <tr>
            	<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="reply" value="submit"></td>
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