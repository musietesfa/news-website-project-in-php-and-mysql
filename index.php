<?php
require_once 'connection.php';

$today = date('Y-m-d');
$day_of_week = date('l', strtotime($today));

@include('header.php');


?>

<div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
            <a href="index.php" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-primary"><span class="text-white font-weight-normal">ETV</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link ">About Us</a>
                    <a href="single.php" class="nav-item nav-link">FAQ</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Policy</a>
                            <a href="#" class="dropdown-item">Mission</a>
                            <a href="#" class="dropdown-item">Vision</a>
                        </div>
                    </div>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control border-0" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text bg-primary text-dark border-0 px-3"><i
                                class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- Navbar End -->


    <!-- Main News Slider Start -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">

<?php
                    $sql = "SELECT * FROM headlines ORDER BY id DESC LIMIT 4";
                    $headline = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($headline)) {
$id = $row['id'];
?>

    <div class="position-relative overflow-hidden" style="height: 500px;">
        <img class="img-fluid h-100" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="object-fit: cover;">
        <div class="overlay">
            <div class="mb-2">
                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    <a href=""><?php echo $row["badges"];?></a>
                <a class="text-white" href=""><?php echo $row["created_at"]; ?></a>
            </div>
            <a class="h2 m-0 text-white text-uppercase font-weight-bold mos" href=""><?php echo $row["news"]; ?></a>
        </div>
    </div>

<?php
}

// Close the connection


?>
                </div>
            </div>





                        

            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <?php
                    $sql = "SELECT * FROM popular ORDER BY id DESC LIMIT 4";
                    $pop = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($pop)) {

?>
                    <div class="col-md-6 px-0">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img class="img-fluid w-100 h-100" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                        href=""><?php echo $row["badges"]; ?></a>
                                    <a class="text-white" href=""><small><?php echo $row["created_at"]; ?></small></a>
                                </div>
                                <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold mos" href=""><?php echo $row["news"]; ?></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
            
            </div>
        </div>
        </div>

    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    



    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <?php
                    $sql = "SELECT * FROM breaking WHERE badges IN ('Politics','food','business','africa') ORDER BY id DESC LIMIT 1";
                    $break = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($break)) {

?>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold mos" href=""><?php echo $row["news"]; ?></a></div><?php }
?>

<?php
                    $sql = "SELECT * FROM breaking WHERE badges IN ('trending','travel','health','corporate','scie-tech') ORDER BY id DESC LIMIT 1";
                    $break = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($break)) {

?>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold mos" href=""><?php echo $row["news"]; ?></a></div><?php }
?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">

                <?php
                    $sql = "SELECT * FROM featured ORDER BY id DESC";
                    $feat = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($feat)) {

?>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href=""><?php echo $row["badges"]; ?></a>
                            <a class="text-white" href=""><small><?php echo $row["created_at"]; ?></small></a>
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold mos" href=""><?php echo $row["news"]; ?></a>
                    </div>
                </div>
                
            <?php
}

// Close the connection


?>
        </div>
    </div>
</div>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->


    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>

                            <?php
                    $sql = "SELECT * FROM mln ORDER BY id DESC LIMIT 4";
                    $ml = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($ml)) {

?>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="object-fit: cover; height: 100%; width: 100%;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href=""><?php echo $row["badges"]; ?></a>
                                        <a class="text-body" href=""><small><?php echo $row["created_at"]; ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold mos" href=""><?php echo $row["news"]; ?></a>
                                    <p class="m-0"></p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    
                                </div>
                            </div>
                        </div>


                    <?php } ?>
                        
<div class="col-lg-6">
                    <?php
                    $sql = "SELECT DISTINCT * FROM sln WHERE badges IN ('Politics','food','business','africa') ORDER BY id DESC LIMIT 4";
                    $sn = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($sn)) {

?>
                        
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="height: 100%; width: 100%;">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $row["badges"]; ?></a>
                                        <a class="text-body" href=""><small><?php echo $row["created_at"]; ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold mos" href=""><?php echo $row["news"]; ?></a>
                                </div>
                            </div>
                            
                        <?php } ?>
                            
                        </div>

                        <div class="col-lg-6">

                            <?php
                    $sql = "SELECT DISTINCT * FROM sln WHERE badges IN ('trending','travel','health','corporate','scie-tech') ORDER BY id DESC LIMIT 4";
                    $sn = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($sn)) {

?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="height: 100%; width: 100%;">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $row["badges"]; ?></a>
                                        <a class="text-body" href=""><small><?php echo $row["created_at"]; ?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold mos" href=""><?php echo $row["news"]; ?></a>
                                </div>
                            </div>
                            <?php } ?>
                            </div>





                               <?php
                    $sql = "SELECT * FROM lln ORDER BY id DESC LIMIT 1";
                    $ll = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($ll)) {

?>

                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="./admin/handlers/posts/<?php echo $row["newsimg"]; ?>" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href=""><?php echo $row["badges"]; ?></a>
                                            <a class="text-body" href=""><small><?php echo $row["created_at"]; ?></small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold mos" href=""><?php echo $row["news"]; ?></a>
                                        
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="img/etv.png" width="25" height="25" alt="">
                                            <small>ETV NEWS</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"></small>
                                            <small class="ml-3"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>

                    </div>
                </div>









                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Facebook</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Twitter</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Linkedin</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Instagram</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">Youtube</span>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <?php
                        $sql = "SELECT *FROM ads ORDER BY id DESC LIMIT 1" ;  
                        $headline = $conn->query($sql);       

                        while ($row = mysqli_fetch_array($headline)) { 

?>
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="./admin/handlers/posts/<?php echo $row["adimg"]; ?>" alt=""></a>
                        </div>
                    </div>
                <?php } ?>
                    <!-- Ads End -->




                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                        </div>
                          <?php
                    $sql = "SELECT * FROM trending ORDER BY id DESC LIMIT 5";
                    $trend = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($trend)) {

?>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="./admin/handlers/posts/<?php echo $row["newsimg"];?>" style="width: 100%;height: 100%;">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $row["badges"];?></a>
                                        <a class="text-body" href=""><small><?php echo $row["created_at"];?></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold mos" href=""><?php echo $row["news"];?></a>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Top Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                                           
                            <div class="d-flex flex-wrap m-n1">
                                <?php
                    $sql = "SELECT * FROM badges ORDER BY id DESC LIMIT 11";
                    $bad = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($bad)) {

?>

                                <a href="" class="btn btn-sm btn-outline-secondary m-1"><?php echo $row["badges"];?></a>
                                <?php }
                        ?>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <?php
    @include('footer.php'); ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>