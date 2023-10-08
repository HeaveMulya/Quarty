
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Music | Admin Dashboard</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebarHeader">
                <h3>Music</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu">Home</a>
                   
                </li>
                <li>
                    <a href="?music">Music</a>
                </li>
                <li>
                    <a href="#">Comment</a>
                </li>
                <li>
                    <a href="#">User</a>
                </li>
                <li>
                    <a href="#">Profile</a>
                </li>
               
            </ul>
        </nav>

        <!-- Main Content  -->
        <div id="main">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-success" onclick="toggleNav()">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Welcome to Music Admin Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
            if(isset($_GET['music'])){
                include'music_post.php';
            }
            if(isset($_GET['add_music'])){
                include'add_music.php';
            }
            
            ?>

           
        </div>
    </div>


    <!-- JS CDN links -->
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>

<script>

function toggleNav() {
    MenuStatus = document.getElementById('sidebar').style.display;
    if ( MenuStatus == 'none' ) {
      document.getElementById('sidebar').style.display = 'block';
    } else {
      document.getElementById('sidebar').style.display = 'none';
    }
  }
  
</script>



</body>

</html>

