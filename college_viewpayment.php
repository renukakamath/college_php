<?php include 'collegeheader.php';
extract($_GET);

 ?>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false"  style="height: 200px">
        <!-- Indicators -->
        
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('images/slider-03.jpg');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-right">
                                    <div class="big-tagline">
                                        
                                             </div>
                                </div>
                            </div><!-- end row -->            
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
        </div></div>
<center>
	<h1>View Payment</h1>
<table class="table" style="width: 500px">
	<tr>
    <th>Sino</th>
		<th>Student</th>
		<th>Fees</th>
		<th>Date</th>
		
	</tr>
	<?php 
  $q="SELECT * FROM Payment INNER JOIN student using(student_id) INNER JOIN fees USING (fees_id) where student_id='$sid'";
  $res=select($q);
   $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['first_name'] ?></td>
  		<td><?php echo $row['fee_amount'] ?></td>
  		<td><?php echo $row['date'] ?></td>
  		
  		
  	</tr>
 <?php 
  }

	 ?>
</table>
</center>
<?php include 'footer.php' ?>