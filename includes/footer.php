<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <?php 
                $select="SELECT * FROM `footer`";
                $query=mysqli_query($conn , $select);
                while($row=mysqli_fetch_assoc($query)):
            ?>
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-around">
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php"><img src="Dashboard/Upload/<?php echo $row['img_footer'] ?>" alt="<?php echo $row['img_footer'] ?>"></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1"><?php echo $row['title_footer'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Navigation</h4>
                                    <ul>
                                        <li><a href="javascript:void()">Home</a></li>
                                        <li><a href="javascript:void()">Events</a></li>
                                        <li><a href="javascript:void()">Testimonial</a></li>
                                        <li><a href="javascript:void()">Categories</a></li>
                                        <li><a href="javascript:void()">Contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | is made with Clever Mind by Abdalla Rasras</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <div class="footer-social f-right">
                                <span>Follow Us</span>
                                <a target="_blank" href="<?php echo $row['facebook_footer'] ?>"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="<?php echo $row['twitter_footer'] ?>"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="<?php echo $row['globe_footer'] ?>"><i class="fas fa-globe"></i></a>
                                <a target="_blank" href="<?php echo $row['instagram_footer'] ?>"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/load.js"></script>
    <script src="./assets/js/music.js"></script>
    
</body>
</html>