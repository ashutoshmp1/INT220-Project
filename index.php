<?php include('config.php');
session_start();
// require 'auth.php';
?>

<?php 
      $con=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error()); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Prosper</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" bs-cut="1"><a class="nav-link" href="login.php" style="font-weight: bold;">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark" style="background: rgb(255,255,255);">
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                <div class="carousel-inner" style="height: 680.487px;">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/image1.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image4.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image6.jpg" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                </ol>
            </div>
            <div class="container">
                <div class="block-content" style="padding-top: 135px;box-shadow: 0px 0px;padding-right: 120px;padding-left: 120px;padding-bottom: 135px;">
                    <div class="clean-blog-post" style="padding-bottom: 0px;">
                        <div class="row">
                            <div class="col-lg-5"><img class="rounded img-fluid" src="assets/img/tech/image4.jpg"></div>
                            <div class="col-lg-7">
                                <h3>Lorem Ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p><button class="btn btn-outline-primary btn-sm" type="button">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="clean-block about-us">
                <div class="container">
                    <div class="row justify-content-center">

                    <?php
                    $sql = "SELECT * FROM blog";
                    $result = mysqli_query($con,$sql);
                    if(mysqli_num_rows($result)>0){

                    while($row = mysqli_fetch_assoc($result)){
                    echo '
                    <div class="col-sm-6 col-lg-4" style="margin-bottom: 60px;">
                            <div class="card text-center clean-card"><img class="card-img-top w-100 d-block" src="assets/img/avatars/avatar1.jpg">
                                <div class="card-body info">
                                    <h4 class="card-title" style="text-align: left; font-weight: bold;">'.$row["title"].'</h4>
                                    <p class="card-text" style="text-align: left;">'.$row["content"].'</p>
                                    <div class="icons" style="text-align: left;"><button class="btn btn-outline-primary btn-sm" type="button">Read More</button></div>
                                </div>
                            </div>
                        </div>';
                    }
           
        }else{
            echo '<tr><td>No Record</td></tr>';
        }
    ?>



                        
                    </div>
                </div>
            </section>
        </section>
    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>