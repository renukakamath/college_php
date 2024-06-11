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
	<h1>View Librarys</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>College</th>
			<th>Description</th>
			<th>Image</th>
		</tr>
		<?php 

        $q="select * from library inner join college using (college_id)  inner join images on library.library_id=images.type_id WHERE type_name='ground' and  college_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['college_name'] ?></td>
        		
        		<td><?php echo $row['description'] ?></td>
        		              <td><img src="<?php echo $row['file'] ?>" width="100" height="100"></td>

        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>