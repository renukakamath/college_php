<?php include 'adminheader.php' ?>
<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false"  style="height: 200px ">
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
<h1>View College</h1>
<table class="table" style="width: 500px">
	
	<form>
		<tr>
			<th>Sino</th>
			<th>College Name</th>
			<th>University</th>
			<th>Place</th>
			
			<th>Pincode</th>
			
			<th>Details</th>
		</tr>
		<?php 

        $q="select *,concat (place,' ',district) as place ,concat (phone,' ',email) as details from college ";
        $res=select($q);
        $sino=1;
foreach ($res as $row) {
	?>
		<tr>
			<td><?php echo $sino++; ?></td>
			<td><?php echo $row['college_name'] ?></td>
			<td><?php echo $row['university'] ?></td>
			<td><?php echo $row['place'] ?></td>
			
			<td><?php echo $row['pincode'] ?></td>
			<td><?php echo $row['details'] ?></td>
			
        	<td><a class="btn btn-success" href="admin_viewcourse.php?cid=<?php echo $row['college_id'] ?>">View Courses</a></td>
			<td><a class="btn btn-danger" href="admin_viewlibrary.php?cid=<?php echo $row['college_id'] ?>">View Library</a></td>
            <td><a class="btn btn-primary" href="admin_viewground.php?cid=<?php echo $row['college_id'] ?>">View Ground</a></td>
            <td><a class="btn btn-success" href="admin_viewlab.php?cid=<?php echo $row['college_id'] ?>">View Lab</a></td>
            <td><a class="btn btn-danger" href="admin_viewactivity.php?cid=<?php echo $row['college_id'] ?>">View Activity</a></td>
            <td><a class="btn btn-primary" href="admin_viewaward.php?cid=<?php echo $row['college_id'] ?>">View Award</a></td>
            
		</tr>
<?php 
}
?>
	</form>
</table>
</center>
<?php include 'footer.php' ?>