<div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <div class="row py-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Get In Touch</h5>
                <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i> Churchill Street, Addis Ababa, Ethiopia</p>
                <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>9 345 67890</p>
                <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>ebc@ebc.et</p>
                <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>


                <?php
                    $sql = "SELECT * FROM popular ORDER BY id DESC LIMIT 3";
                    $pop = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($pop)) {

?>
                <div class="mb-3">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""><?php echo $row["badges"];?></a>
                        <a class="text-body" href=""><small><?php echo $row["created_at"];?></small></a>
                    </div>
                    <a class="small text-body text-uppercase font-weight-medium" href=""><?php echo $row["news"];?></a>
                </div><?php } ?>
                
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Categories</h5>
                <div class="m-n1">
                    <?php
                    $sql = "SELECT * FROM badges ORDER BY id DESC LIMIT 21";
                    $bad = $conn->query($sql);

                    while($row = mysqli_fetch_assoc($bad)) {

?>
                    <a href="" class="btn btn-sm btn-secondary m-1"><?php echo $row["badges"];?></a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="mb-4 text-white text-uppercase font-weight-bold">Communication</h5>
                <div class="row">
                    <div class="col-4 mb-3">
                        <a href="vacancy.php">Vacancy</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href="#">Testimony</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href="#">Sitemap</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href="#">Document</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href="#">Meteorology</a>
                    </div>
                    <div class="col-4 mb-3">
                        <a href="#">Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
        <p class="m-0 text-center">&copy; <a href="#">ETV</a>. Copyright 2023. All rights reserved. 
		
		
    </div>