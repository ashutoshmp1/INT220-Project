<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog Post - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>

<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" >
        <div class="container" ><a class="navbar-brand logo" href="#">Prosper</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <!-- <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="login.php" style="font-weight: bold;">LOGIN</a></li>
                </ul> -->
            </div>
        </div>
    </nav>


            <?php
                $con=mysqli_connect('localhost','root','','prosper') or die("Connection Failed:" .mysqli_connect_error());
                if(isset($_GET['id'])){
                $id=$_GET['id']; 
                $sql = "SELECT * FROM blog WHERE id=".$id;

                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo ' 
                        <main class="page blog-post " style="background-color: #f6f6f6">
                        <section class="clean-block clean-post dark">
                            <div class="container">
                                <div class="block-content">
                                    <div class="post-image" style="background-image:url(assets/img/scenery/image3.jpg;);"></div>
                                    <div class="post-body"">
                                        <div style="
                                        padding: 100px 300px 0px 300px;">
                                        <h3 style="font-weight: bold; margin-bottom: 30px;">'.$row["title"].'</h3>
                                        '.$row["content"].'</div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </main>';



                $id = $row['id'];
                $newviewcnt = $row['viewcnt'] + 1;
                $sql="UPDATE blog SET viewcnt=$newviewcnt WHERE id=$id";
                $query=mysqli_query($con, $sql); 
                    }

                }else{
                    echo '<div class="alert alert-danger" role="alert">
                    <strong>Invalid ID! </strong> No Record Found.
                </div>';

                }




                
                
            }

            else{
                header('Location: view.php');
            }
            ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>

