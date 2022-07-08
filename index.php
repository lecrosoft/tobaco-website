<!DOCTYPE html>
<html lang="en">
<?php include('includes/head.php') ?>

<body>
    <div class="container-xxl bg-whitet p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include('includes/nav.php') ?>

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height:80vh">
                        <img src="img/cubana.png" alt="" srcset="" width="100%" height="100%">

                        <div class="container">
                            <!-- <div class="carousel-caption text-start">
                                <h1>Example headline.</h1>
                                <p>Some representative placeholder content for the first slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                            </div> -->
                        </div>
                    </div>
                    <div class="carousel-item" style="height:80vh">
                        <img src="img/cubana.png" alt="" srcset="" width="100%" height="100%">

                        <!-- <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Some representative placeholder content for the second slide of the carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                            </div>
                        </div> -->
                    </div>
                    <div class="carousel-item" style="height:80vh">
                        <img src="img/cubana.png" alt="" srcset="" width="100%" height="100%">

                        <div class="container">
                            <!-- <div class="carousel-caption text-end">
                                <h1>One more for good measure.</h1>
                                <p>Some representative placeholder content for the third slide of this carousel.</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                            </div> -->
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Service Start -->
        <?php //include('includes/services.php') 

        ?>
        <?php include('includes/home-div-pattern.php') ?>
        <?php include('includes/slider.php')
        ?>
        <!-- Service End -->

        <!-- About Start -->

        <?php include('includes/home-about.php') ?>
        <!-- About End -->

        <!-- Menu Start -->
        <?php //include('includes/food-menu.php') 
        ?>
        <!-- Menu End -->

        <!-- Reservation Start -->
        <?php include('includes/blend.php') ?>
        <!-- Reservation Start -->

        <!-- Team Start -->
        <?php //include('includes/team.php') 
        ?>
        <!-- Team End -->

        <!-- Testimonial Start -->

        <!-- Testimonial End -->

        <!-- Footer Start -->
        <?php include('includes/footer.php') ?>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn  btn-lg-square back-to-top" style="background:#ffe29d"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <?php include('includes/javascript_lib.php') ?>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>