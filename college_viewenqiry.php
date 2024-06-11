<?php include 'collegeheader.php' ?>
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
	<h1>View Enquiry</h1>
<table class="table" style="width: 500px">
	<tr>
    <th>Sino</th>
    <th>college</th>
		<th>Student</th>
		<th>Enquiry Description</th>
    <th>Date</th>
    <th>Reply</th>
		
	</tr>
	<?php 
  $q="SELECT * FROM enquiry INNER JOIN student using (student_id) INNER JOIN college USING (college_id) WHERE college_id='$cid'";
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
      <?php 
               if ($row['reply']=="pending") {
             ?>
                  <td><a class="btn btn-success" href="college_sendreply.php?eid=<?php echo$row['enquiry_id'] ?>">Send Reply</a></td>
            <?php 
             }else{


       ?>
  		<td><?php echo $row['reply'] ?></td>
        
  		
  		
  	</tr>
 <?php 
  }
}
	 ?>
</table>
</center>
<?php include 'footer.php' ?>