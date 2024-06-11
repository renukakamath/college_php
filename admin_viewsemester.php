<?php include 'adminheader.php' ?>
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
	<h1>View Semester</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>Course</th>
			<th>Semester</th>
			<th>Semester Description</th>
		</tr>
		<?php 

        $q="select * from semester inner join course using (course_id) where course_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['course_name'] ?></td>
        		
        		<td><?php echo $row['semester'] ?></td>
        		<td><?php echo $row['sem_details'] ?></td>
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>