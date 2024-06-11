<?php include 'collegeheader.php' ;


if (isset($_GET['did'])) {
  extract($_GET);
  $q="update request set status='reject' where request_id='$did'";
  update($q);

}
if (isset($_GET['uid'])) {
      extract($_GET);
      $q="update request set status='accept' where request_id='$uid'";
      update($q);

}






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
	<h1>View Request</h1>
<table class="table" style="width: 500px">
	<tr>
    <th>sino</th>
		<th>Student</th>
		<th>Course</th>
		<th>Date</th>
		<th>status</th>
	</tr>
	<?php 
  $q="SELECT * FROM request INNER JOIN student USING (student_id) INNER JOIN course USING (course_id) INNER JOIN college USING (college_id) WHERE college_id='$cid'";
  $res=select($q);
   $sino=1;
  foreach ($res as $row) {
  	?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['first_name'] ?></td>
  		<td><?php echo $row['course_name'] ?></td>
  		<td><?php echo $row['date'] ?></td>

    <?php 

if ($row['status']=="pending") {
  ?>
 <td><a class=" btn btn-success" href="?uid=<?php echo $row['request_id'] ?>">accept</a></td>
 <td><a  class="btn btn-success" href="?did=<?php echo $row['request_id'] ?>" >delete</a></td>
<?php
}else{



     ?>
  		<td><?php echo $row['status'] ?></td>

<?php 
if ($row['status']=="accept") {?>
  <td><a class="btn btn-success" href="college_viewpayment.php?sid=<?php echo $row['student_id'] ?>">View Payment</a></td>
<?php 
}



 ?>


  	
  	</tr>
 <?php 
  }
}
	 ?>
</table>
</center>
<?php include 'footer.php' ?>