<?php include 'collegeheader.php' ;
$cid=$_SESSION['college_id'];
extract($_GET);

if (isset($_POST['lab'])) {
	extract($_POST);
	$q="select * from lab where lab_name='$lname' and college_id='$cid'";
	$r=select($q);
    if (sizeof($r)>0) {
    	alert('already exist');
    }else{

$dir = "image/";
	$file = basename($_FILES['imgg']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("image_").".".$file_type;
	if(move_uploaded_file($_FILES['imgg']['tmp_name'], $target))
	{
		$q="insert into lab values(null,'$cid','$lname','$des')";
	      $id=insert($q);
	    $q2="insert into images values(null,'$id','lab','$target')";
	      insert($q2);
	     alert(' successfully');
	     return redirect('college_managelabs.php');
	
	}
		else
		{
			echo "file uploading error occured";
		}
	
}
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from lab where lab_id='$did'";
	delete($q);
	alert(' successfully');
	return redirect('college_managelabs.php');

}
if (isset($_GET['uid'])) {
	extract($_GET);

    $q="select * from lab where lab_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);

	$q="update lab set lab_name='$lname',description='$des' where lab_id='$uid'";
	update($q);
	alert(' successfully');
	return redirect('college_managelabs.php');


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
<center>
	<h1 style="color: white">Manage Labs</h1>
	<form method="post"enctype="multipart/form-data">
		<?php if (isset($_GET['uid'])) { ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Lab Name</th>
				<td><input type="text" name="lname" required="" class="form-control" value="<?php echo $res[0]['lab_name'] ?>"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><input type="text" name="des" required="" class="form-control" value="<?php echo $res[0]['description'] ?>"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="update" value="submit"></td>
			</tr>
		</table>
	<?php }else{ ?>
		<table class="table" style="width: 500px;color: white">
			
			<tr>
				<th>Lab Name</th>
				<td><input type="text" required="" class="form-control" name="lname"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><input type="text" required="" class="form-control" name="des"></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="file" required="" class="form-control" name="imgg"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" class="btn btn-success" name="lab" value="submit"></td>
			</tr>
		</table>
	<?php } ?>
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
	<h1>View Labs</h1>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>College</th>
			<th>Lab Name</th>
			<th>Descriptions</th>
			<th>Images</th>
		</tr>
		<?php 

        $q="select * from lab inner join college using (college_id) inner join images on lab.lab_id=images.type_id  WHERE type_name='lab'and college_id='$cid'";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
        	?>
        	<tr>
        		<td><?php echo $sino++; ?></td>
        		<td><?php echo $row['college_name'] ?></td>
        		<td><?php echo $row['lab_name'] ?></td>
        		<td><?php echo $row['description'] ?></td>
        		<td><img src="<?php echo $row['file'] ?> " width="100" heigth="100"></td>
        		<td><a class="btn btn-success" href="?uid=<?php echo $row['lab_id'] ?>">Update</a></td>
        		<td><a class="btn btn-success" href="?did=<?php echo $row['lab_id'] ?>">Delete</a></td>
        		
        	</tr>
       <?php 
        }

		 ?>
	</table>
</center>
<?php include 'footer.php' ?>