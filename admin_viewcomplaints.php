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
    <h1>View Complaints</h1>
    <table class="table" style="width: 500px">
        <tr>
            <th>sino</th>
            <th>User</th>
            <th>Complaints</th>

            <th>date</th>
            <th>reply</th>

            
        </tr>
        <?php 

        $q="SELECT * FROM  Complaints INNER JOIN student using (student_id)  ";
        $res=select($q);
        $sino=1;
        foreach ($res as $row) {
            ?>
            <tr>
                <td><?php echo $sino++; ?></td>
                <td><?php echo $row['first_name'] ?></td>
                <td><?php echo $row['complaint_description'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <?php 
              if ($row['reply']=="pending") {
                ?>
                  <td><a class="btn btn-success" href="admin_sendreply.php?cid=<?php echo$row['complaint_id'] ?>">Send Reply</a></td>
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