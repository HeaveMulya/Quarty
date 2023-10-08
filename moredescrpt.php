
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!--font awasome-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"></script>
<link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div class="container">
            

<!--
<div class="alert alert-info alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Welcome</strong>                 <?php
//echo $_SESSION['Email'];



?></div>-->
 <!--navigation bar-->
 <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
                 
                  
                    <!-- Navbar links -->
                    <p class="text-light">
                    <?php
                           $date=date('Y-m-d'); 
                           echo"$date";
                          
                          ?></p>
                      <ul class="navbar-nav ml-auto ">
                        <li class="nav-item">
                          <a class="nav-link "></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="about_us.php">Instagram</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="contact_us.php"><i class='fab fa-facebook'></i>Facebook</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="contact_us.php">Twitter</a>
                        </li>
                        
                      </ul>
            
  
                  </nav>
                  <div class="row">
                    <div class="container">
                    logo space
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="container">
                               <!--navigation bar-->
                <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <!-- Navbar links -->
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link " href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="">Audio</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="">Video</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="">About us</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " href="">Contact Us</a>
                        </li>
                      
                      </ul>
</div>
  
                  </nav>
                
                  </div>
                  <div class="col-md-8">
                  <div class="container">
                    <?php
                     include "admin/connection.php";
                    if(isset($_GET['more'])){
                       $more=$_GET['more'];
                       global $more;
                        $sql="select * from post_details where post_id=$more";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result)){
                            $id=$row['post_id'];
                            $type=$row['post_type'];
                            $title=$row['post_title'];
                            $date=$row['post_date'];
                            $img=$row['post_img'] ;
                            $audio_vedio=$row['audio_vedio_file'];

                    }
                    ?>
                    
                  <span class="badge badge-secondary"><?php echo $type; ?> </span>
                  <h3><?php echo $type; ?> | <?php echo $title; ?> | Download</h3>
                            <span><?php echo $date;?></span><hr>
                            
                                <img src="<?php echo 'musicimage/'.$img?>" alt="img" height=300px><br><br>
                            
                           <center><h5>Download | <?php echo $title; ?> | [<?php echo $type; ?>]</h5></center> 
                           <br> <center><button class=" btn btn-success ">Download</button></center> <br>
                           <br>  <center><audio src="Audios/<?=$audio_vedio;?>" 
	        	   controls>
	        	
                            </audio></center>  <br>
                                
                             
                       

                       
                  <?php
                    }
                
                ?>
                 <hr>
                  </div>
                  <div class="container">
                  <div class="row ">
                    <div class="col-md-12 d-flex ">
                        <p class="px-2 py-2"> <i class='fab fa-facebook'></i>Facebook</p>
                        <p class="px-2 py-2"><i class='fab fa-facebook'></i>Twitter</p>
                        <p class="px-2 py-2"><i class='fab fa-facebook'></i>Instagram</p>
                        <p class="px-2 py-2"><i class='fab fa-facebook'></i>Youtube</p>
                    </div>
                    
                  </div>
                  <hr>
                  </div>
                  <div class="container">
                    <div class="row">
                    <?php
                     include "admin/connection.php";
                        $sql="select * from post_details order by post_id DESC limit 0,1";
                        $result=mysqli_query($conn,$sql);
                        while($ro=mysqli_fetch_array($result)){
                           
                        
                        
                    ?> 
                      <div class="col-md-6"><p>Previous Article</p>
                      <a classs="" href="moredescrpt.php?more=<?php echo $ro['post_id']?>"> 
                      <h6 class="text-dark"><?php echo $ro['post_type']?> | <?php echo $ro['post_title'];?> | Download</h6></a>
                            <span><?php echo $ro['post_date']?></span>
                    </div><?php }?>

                    <?php
                     include "admin/connection.php";
                        $sql="select * from post_details order by post_id ASC limit 0,1";
                        $result=mysqli_query($conn,$sql);
                        while($r=mysqli_fetch_array($result)){
                           
                          
                        
                    ?> 
                      <div class="col-md-6 text-right"><p>Next Article</p>
                      <a classs="" href="moredescrpt.php?more=<?php echo $r['post_id']?>">
                      <h6 class="text-dark"><?php echo $r['post_type']?> | <?php echo $r['post_title'];?> | Download</h6></a>
                            <span><?php echo $r['post_date']?></span>
                    </div><?php } ?>
                    </div>
                    <hr>
                  </div>
                 
                 
                 
                  <div class="container">
                  <h5><span class="badge badge-secondary">Related Article</span><span class="badge badge-light">More from Author</span> </h5><br>
                  
                  <div class="row">
                  <?php
                     include "admin/connection.php";
                        $sql="select * from post_details limit 0,3";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result)){
                           
                            $imgi=$row['post_img'] ;
                        
                    ?> 
                    <div class="col-md-4">
                    <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>">
                     <img src="<?php echo 'musicimage/'.$imgi?>" alt="img" height=300px></a>
                    </div>
                    <?php }
                  ?>
                  </div><br>
                  </div></div>
                  <br>
               

               


                
                        <div class="col-md-4 pt-4">
                        <form class="d-flex" action="searchproduct.php" method="get" >
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
   <button class="btn btn-dark" type="submit">Search</button>
   <input type="submit" value="search" class="btn btn-outline-light " name="searchbutton">
  </form>
  <h3><span class="badge badge-secondary">Recommended song for you</span> </h3>
  <?php 
                            include "admin/connection.php";
                            $sql="select * from post_details order by post_title asc limit 0,10";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                            ?>

  <div class="row"> <div class="col-md-6" id="image" >
  <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"><img src="<?php echo 'musicimage/'.$row['post_img'] ?>" alt=""></a>
                                </div>
                                <div class="col-md-6">
                                <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"><h6 class="text-dark"><?php echo $row['post_type']?> | <?php echo $row['post_title'];?> | Download</h6>
                                </a> <span class="text-dark"><?php echo $row['post_date']?></span>
                              
                              
                                </div>
                            </div><br><?php } ?>
                            </div>


                        </div>
                        <?php include 'footer.php';?>
                    </div>
                    
                  </div>
                  
           

</body>
</html>