<?php include 'publicheader.php' ;
if (isset($_POST['login'])) {
	extract($_POST);
      
	$q=" SELECT * FROM login WHERE username='$uname' AND `password`='$pwd'";
	$res=select($q);
	if (sizeof($res)>0) 
	{
		$_SESSION['login_id']=$res[0]['login_id'];
		$lid=$_SESSION['login_id'];
		if ($res[0]['usertype']=="admin") 
		{

			return redirect('admin_home.php');
		}elseif($res[0]['usertype']=="college")
		{
			$q="select * from college where login_id='$lid'";
			$res=select($q);
			if (sizeof($res)>0) 
			{
				$_SESSION['college_id']=$res[0]['college_id'];
				$cid=$_SESSION['college_id'];
			}
			 return redirect('college_home.php');
		}elseif($res[0]['usertype']=="student")
		{
           $q="select * from student where login_id='$lid'";
           $res=select($q);
           if(sizeof($res)>0) 
           {
           	  $_SESSION['student_id']=$res[0]['student_id'];
           	  $uid=$_SESSION['student_id'];
           }

				return redirect('student_home.php');
		}
	
	}else{
		alert('invalid username & password');
	}        

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
	<h1 style="color:white ">Login</h1>
	<form method="post">
		<table class="table" style="width: 500px;color: white">
			<tr>
				<th>User Name</th>
				<td><input type="text" required="" class="form-control" name="uname"></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password"  required="" class="form-control" name="pwd"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input type="submit" name="login"  class="btn btn-success" value="submit"></td>
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


<?php include 'footer.php' ?>