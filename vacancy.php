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
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About Us</a>
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


    <!-- News With Sidebar Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Available Jobs</h4>
                                
                            </div>
                        </div>


                        <?php
                   $limit = 5;  

                        $getQuery = "select *from jobs";    

                        $result = mysqli_query($conn, $getQuery);  

                        $total_rows = mysqli_num_rows($result);    

                        $total_pages = ceil ($total_rows / $limit);    

                        if (!isset ($_GET['page']) ) {  

                            $page_number = 1;  

                        } else {  

                            $page_number = $_GET['page'];  

                        }    

                        $initial_page = ($page_number-1) * $limit;   


                        $getQuery = "SELECT *FROM jobs ORDER BY id DESC LIMIT " . $initial_page . ',' . $limit;  

                        $result = mysqli_query($conn, $getQuery);        

                        while ($row = mysqli_fetch_array($result)) { 

?>


                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="./admin/handlers/posts/<?php echo $row["jobimg"]; ?>" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="text-body" href=""><small><?php echo $row["created_at"]; ?></small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href=""><?php echo $row["job"]; ?></a>
                                    <p class="m-0"><?php echo $row["jobdes"]; ?></p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="img/etv.png" width="25" height="25" alt="">
                                        <small>ETV HR</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"></small>
                                        <small class="ml-3"></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php }
                    


                     ?>

                    </div>
                    <?php
                for($page_number = 1; $page_number<= $total_pages; $page_number++) {  

        echo '<a class="btn btn-danger" href = "vacancy.php?page=' . $page_number . '">' . $page_number . ' </a>';  

    }    ?>
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
                                <span class="font-weight-medium">facebook</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">twitter</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">linkedin</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">instagram</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">youtube</span>
                            </a>
                            
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

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
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
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
   <?php @include('footer.php'); ?>
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