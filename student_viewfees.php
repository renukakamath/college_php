<?php include 'studentheader.php' ?>
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
	<h1>View Fees</h1>
	<table  class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			
			<th>Semester</th>
			<th>Fees</th>
			
		</tr>
		<?php 

        $q="select * from fees inner join semester using (semester_id) where semester_id='$sid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		
        		
        		<td><?php echo $row['semester'] ?></td>
        		<td><?php echo $row['fee_amount'] ?></td>
        		<td><a class="btn btn-success" href="student_makepayment.php?fid=<?php echo $row['fees_id'] ?>&aid=<?php echo $row['fee_amount'] ?>">Make Payment</a></td>
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>