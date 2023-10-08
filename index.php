
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
<style>
      /*setting the position relative property to the main container*/
        .gfg {
            margin: 1%;
            position: relative;
        }

        .second-txt {
            position: absolute;
            bottom: 0px;
            left: 10px;
        }
    </style>
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
 <nav class="navbar navbar-expand-md bg-dark navbar-dark " >
                 
                  
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
                   <marquee behavior="" direction=""><h2 >MusicNickster</h2></marquee> 
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

                  <div class="container py-1  ">
                  <div class="row" >
                  <?php 
                            include "admin/connection.php";
                            $sql="select * from post_details order by post_id DESC limit 0,1";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                            ?>
                    <div class="col-md-6" id="image">
                      <div class="gfg">
                      <img src="<?php echo 'musicimage/'.$row['post_img'] ?>" alt="" height=378px >
                      <div class="second-txt text-light"> 
                        <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"><h5 class="text-light" ><?php echo $row['post_type']?> | <?php echo $row['post_title'];?> | Download</h5></a>
                                     <span><?php echo $row['author']?> -</span><span><?php echo $row['post_date']?></span>
                              <br><br><br></div>
                       
                      </div>
                       
                      </div>
                        <?php }?>
                    <div class="col-md-6">
                    <div class="row">
                    <?php 
                            include "admin/connection.php";
                            $sql="select * from post_details order by post_id DESC limit 0,4";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                            ?>
                       
                            
                            <div class="col-md-6" id="image">
                            <div class="gfg text-light">
                      <img src="<?php echo 'musicimage/'.$row['post_img'] ?>" alt="" height=378px >
                      <div class="second-txt "> 
                        <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"><h5 class="text-light" ><?php echo $row['post_type']?> | <?php echo $row['post_title'];?> | Download</h5></a>
                                     <span><?php echo $row['author']?> -</span><span><?php echo $row['post_date']?></span>
                              <br><br><br></div>
                       
                      </div>
                            </div>
                        
<?php }?><br></div>
                       
                        
                       
                           
                        </div>
                        
                       
                    


                  </div>
                  </div>


                  
                  <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h3><span class="badge badge-secondary">Latest Music</span></h3>
                            <?php
                            include 'admin/connection.php';

//Getting default page number

        if (isset($_GET['pageno'])) {

            $pageno = $_GET['pageno'];

        } else {

            $pageno = 1;

        }



// Formula for pagination  

        $no_of_records_per_page = 3;

        $offset = ($pageno-1) * $no_of_records_per_page;

// Getting total number of pages

        $total_pages_sql = "SELECT COUNT(*) FROM post_details";

        $result = mysqli_query($conn,$total_pages_sql);

        $total_rows = mysqli_fetch_array($result)[0];

        $total_pages = ceil($total_rows / $no_of_records_per_page);



        $sql = "SELECT * FROM post_details LIMIT $offset, $no_of_records_per_page";

        $res_data = mysqli_query($conn,$sql);

        $cnt=1;

        while($row = mysqli_fetch_array($res_data)){
          ?>

                            <div class="row">
                                <div class="col-md-6" id="image">
                                <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"><img src="<?php echo 'musicimage/'.$row['post_img'] ?>" alt="all"  ></a>
                                </div>
                                
                                <div class="col-md-6">
         <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"><h5 class="text-dark" ><?php echo $row['post_type']?> | <?php echo $row['post_title'];?> | Download</h5></a>
                                    <span class="badge badge-secondary"><?php echo $row['post_type']?></span> <span><?php echo $row['author']?> -</span><span><?php echo $row['post_date']?></span>
                              <br><br><br>
                       
                              
                               <a class="btn btn-dark text-light" href="moredescrpt.php?more=<?php echo $row['post_id']?>">Read More</a>
                                </div>
                            </div><br>
<?php
          $cnt++;
        }
?>
                      <div align="center">

<ul class="pagination justify-content-end" style="margin:20px 0" >

    <li><a href="?pageno=1" class="page-link">First</a></li>

    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">

        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>

    </li>

    <li class="page-item active <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">

        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>" class="page-link">Next</a>

    </li>

    <li><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>

</ul>

</div>


                     
                        </div>
                        <div class="col-md-4 pt-4">
                        <form class="d-flex" action="searchproduct.php" method="get" >
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search">
   <button class="btn btn-dark" type="submit">Search</button>
   <input type="submit" value="search" class="btn btn-outline-light " name="searchbutton">
  </form><hr>
  
  <h3><span class="badge badge-secondary">Recommended song for you</span> </h3><br>
  <?php 
                            include "admin/connection.php";
                            $sql="select * from post_details order by post_id DESC";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($result)){
                            ?>

  <div class="row"> <div class="col-md-6" id="image" >
  <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>">  <img src="<?php echo 'musicimage/'.$row['post_img'] ?>" alt=""  ></a>
                                </div>
                                <div class="col-md-6">
                                <a classs="" href="moredescrpt.php?more=<?php echo $row['post_id']?>"> <h6 class="text-dark"><?php echo $row['post_type']?> | <?php echo $row['post_title'];?> | Download</h6>
                                </a><span class="text-dark"><?php echo $row['post_date']?></span>
                              
                              
                                </div>
                            </div><br><?php } ?>
                            </div>


                        </div>
                    </div>
                  </div>
            <?php
            include 'footer.php';
            ?>

</body>
</html>