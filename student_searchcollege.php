<?php include 'studentheader.php' ?>
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
<h1 style="color: white">Search College</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>College</th>
			<td><input type="text"  required="" name="fn" class="form-control"></td>
		</tr>
		<tr>
            <td align="center" colspan="2"><input type="submit" class="btn btn-success" name="college" value="submit"></th>
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
    <br><br>
<h1>View College</h1>
<form method="post">
	<table class="table" style="width: 500px">
		  <tr>
         <th>Sino</th>
            <th>College Name</th>
            <th>University</th>
            <th>Place</th>
            
            <th>Pincode</th>
            
            <th>Details</th>
        </tr>
		<?php 
    if (isset($_POST['college'])) {
        extract($_POST);


  $q="SELECT * FROM college  WHERE college_name  LIKE '$fn%'";
}
    else{
    $q="select *,concat (place,' ',district) as place ,concat (phone,' ',email) as details from college ";}
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
             <td><a class="btn btn-success" href="student_viewcourse.php?cid=<?php echo $row['college_id'] ?>">View Courses</a></td>
             <td><a class="btn btn-danger" href="student_viewlibrary.php?cid=<?php echo $row['college_id'] ?>">View Library</a></td>
            <td><a class="btn btn-primary" href="student_viewground.php?cid=<?php echo $row['college_id'] ?>">View Ground</a></td>
            <td><a class="btn btn-success" href="student_viewlab.php?cid=<?php echo $row['college_id'] ?>">View Lab</a></td>
            <td><a class="btn btn-danger" href="student_viewactivity.php?cid=<?php echo $row['college_id'] ?>">View Activity</a></td>
            <td><a class="btn btn-primary" href="student_viewaward.php?cid=<?php echo $row['college_id'] ?>">View Award</a></td>
            
            </tr>
    	
   <?php
}


		 ?>
	</table>
</form>
<?php include 'footer.php' ?>