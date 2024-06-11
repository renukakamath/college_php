<?php include 'studentheader.php';
$sid=$_SESSION['student_id'];
extract($_GET);

if (isset($_POST['compt'])) {
	extract($_POST);


	echo$q="insert into Complaints values(null,'$sid','$comp','pending',curdate())";
	insert($q);
	alert(' Successfully');
	return redirect('student_sendcomplaint.php');
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
	<h1 style="color: white">Send Complaints</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>Complaints</th>
				<td><input type="text" required="" class="form-control" name="comp"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="compt" class="btn btn-success" value="submit"></td>
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
            <th>sino</th>
            <th>student</th>
            <th>Complaints</th>

            <th>date</th>
            <th>reply</th>

            
        </tr>
        <?php 

        $q="SELECT * FROM  Complaints INNER JOIN student using (student_id) where student_id='$sid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['complaint_description'] ?></td>
                <td><?php echo $row['date'] ?></td>
              



                <td><?php echo $row['reply'] ?></td>
                
            </tr>
       <?php 
        }
    

         ?>
    </table>
</center>
<?php include 'footer.php' ?>