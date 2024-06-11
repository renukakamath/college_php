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
	<h1>View Activitys</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>College</th>
			<th>Activity Name</th>
			<th>Description</th>
			
		</tr>
		<?php 

        $q="select * from activity inner join college using (college_id)where college_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['college_name'] ?></td>
        		<td><?php echo $row['activity_name'] ?></td>
        		<td><?php echo $row['description'] ?></td>
        		
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>

                                   
<?php include 'footer.php' ?>