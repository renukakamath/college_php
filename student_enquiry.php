<?php include 'studentheader.php' ;
$sid=$_SESSION['student_id'];
extract($_GET);
if (isset($_POST['enquiry'])) {
	extract($_POST);

	echo$q="insert into enquiry values(null,'$college','$sid','$enq','pending',curdate())";
	insert($q);
	alert('successfully');
	return redirect('student_enquiry.php');

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
	<h1 style="color: white">Add Enquiry</h1>
	<form method="post">
		
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>college</th>
				<td>
					<select name="college" required="" class="form-control">
						<option>select</option>
						<?php 

                    $q="select * from college";
                    $res=select($q);
                    foreach ($res as $row) {
                    	?>
                    	<option value="<?php echo $row['college_id'] ?>"><?php echo $row['college_name'] ?></option>
                <?php 
                   }


						 ?>
					</select>
				</td>
			</tr>
			
			<tr>
				<th>Enquiry</th>
				<td><input type="text" name="enq" required="" class="form-control" ></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="enquiry" value="submit"></td>
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
<h1>View Reply</h1>
<table class="table" style="width: 500px">
	<tr>
    <th>Sino</th>
    <th>college</th>
		<th>User</th>
		<th>Enquiry Description</th>
    <th>Date</th>
    <th>Reply</th>
		
	</tr>
	<?php 
  $q="SELECT * FROM enquiry INNER JOIN Student using (student_id) INNER JOIN college USING (college_id) where student_id='$sid'";
  $res=select($q);
   $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
      <td><?php echo $row['college_name'] ?></td>
  		<td><?php echo $row['first_name'] ?></td>
  		<td><?php echo $row['enquiry_description'] ?></td>
      <td><?php echo $row['date'] ?></td>
    
  		<td><?php echo $row['reply'] ?></td>
        
  		
  		
  	</tr>
 <?php 
  }

	 ?>
</table>
</center>
</center>
<?php include 'footer.php' ?>