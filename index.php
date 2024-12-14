<?php  
include "./Dashboard/Includes/connection.php";
include "./includes/header.php";
?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
            <?php 
                $select="SELECT * FROM `image`";
                $query=mysqli_query($conn , $select);
                while($row=mysqli_fetch_assoc($query)):
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInUp"><?php echo $row['title_image'] ?></span>
                                <h1 data-animation="fadeInUp"><?php echo $row['sub_title_image'] ?></h1>
                                <!-- Hero-btn -->
                                <div class="hero__btn">
                                    <a href="#about-area" class="btn hero-btn"  data-animation="fadeInLeft">Watch Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Man Img -->
                <div class="hero-man">
                    <img src="Dashboard/Upload/<?php echo $row['img_image'] ?>" alt="<?php echo $row['img_image'] ?>">
                </div>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? About Area start -->
    <section class="about-area about1 section-padding30" id="about-area">
        <div class="container">
            <div class="row justify-content-between">
                <?php
                    $select="SELECT * FROM `under_image`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?>
                    <div class="col-xl-5 col-lg-6">
                        <div class="about-caption2 mb-50">
                            <h3>HOW WE MAKE USER EXPERIENCES</h3>
                            <div class="send-cv">
                                <a href="javascript:void()"><?php echo $row['email_under_img'] ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="about-caption mb-50">
                            <h3><?php echo $row['description_under_img'] ?></h3>
                            <p class="pera1"><span><?php echo $row['name_under_img'] ?></span> <?php echo $row['department_under_img'] ?></p>
                            <div class="experience">
                                <div class="year">
                                    <span><?php echo $row['experience_under_img'] ?></span>
                                </div>
                                <div class="year-details"><p>YEARS OF<br> <?php echo $row['major_under_img'] ?> EXPERIENCE</p></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!--? Brand Shape  -->
        <div class="about-shape d-none d-xl-block">
            <img src="assets/img/gallery/about_shape.png" alt="">
        </div>
    </section>
    <!-- Services Area End -->
    <!--? Blog Ara Start -->
    <section class="home-blog-area section-padding30">
        <div class="container">
            <?php
                $select="SELECT * FROM `grid_imgs`";
                $query=mysqli_query($conn , $select);
                while($row=mysqli_fetch_assoc($query)):
            ?>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="Dashboard/Upload/<?php echo $row['img_grid_imgs1'] ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="services.php"><?php echo $row['title_grid_imgs1'] ?></a></h3>
                                <p><?php echo $row['sub_title_grid_imgs1'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="Dashboard/Upload/<?php echo $row['img_grid_imgs2'] ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="services.php"><?php echo $row['title_grid_imgs2'] ?></a></h3>
                                <p><?php echo $row['sub_title_grid_imgs2'] ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="Dashboard/Upload/<?php echo $row['img_grid_imgs3'] ?>" alt="">
                            </div>
                            <div class="team-caption">
                                <h3><a href="services.php"><?php echo $row['title_grid_imgs3'] ?></a></h3>
                                <p><?php echo $row['sub_title_grid_imgs3'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
    <!-- Services Ara End -->
    <!--? Gallery Area Start -->
    <section class="gallery-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <?php 
                    $select="SELECT * FROM `gallary`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img" style="background-image: url(Dashboard/Upload/<?php echo $row['img_gallary'] ?>);"></div>
                                <div class="cap-icon">
                                    <a href="Dashboard/Upload/<?php echo $row['img_gallary'] ?>" class="ti-fullscreen img-pop-up"></a>
                                </div>
                                <div class="g-caption">
                                    <h4><?php echo $row['title_gallary'] ?></h4>
                                    <p><?php echo $row['sub_title_gallary'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>   
            </div>
        </div>
    </section>
    <!-- Gallery Area End -->
    <!--? Brand Area Start -->
    <section class="brand-area pb-bottom section-padding30">
        <div class="container">
            <div class="row">
                <?php
                    $select="SELECT * FROM `look_txt`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?> 
                    <div class="col-lg-6">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-30">
                            <h2><?php echo $row['title_look_txt'] ?></h2>
                            <p><?php echo $row['sub_title_look_txt'] ?></p>
                        </div>
                    </div>
                <?php
                    endwhile;

                    $select="SELECT * FROM `look_imgs`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?> 
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-brand text-center mb-30">
                            <img src="Dashboard/Upload/<?php echo $row['img_look_imgs'] ?>" alt="Dashboard/Upload/<?php echo $row['img_look_imgs'] ?>">
                            <p><?php echo $row['title_look_imgs'] ?></p>
                            <p>Prize <?php echo $row['year_prize'] ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!--? Brand Shape  -->
        <div class="brand-shape d-none d-lg-block">
            <img src="assets/img/gallery/brand_shape.png" alt="">
        </div>
    </section>
    <!-- Brand Area End -->  
    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-11 col-lg-11 col-md-9">
                    <div class="h1-testimonial-active">
                        <?php 
                            $select="SELECT * FROM `feedback`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                        ?>
                            <div class="single-testimonial text-center">
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption">
                                    <div class="testimonial-top-cap">
                                        <img src="assets/img/gallery/testimonial.png" alt="">
                                        <p><?php echo $row['description_feedback'] ?></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="Dashboard/Upload/<?php echo $row['img_feedback'] ?>" alt="<?php echo $row['img_feedback'] ?>">
                                        </div>
                                        <div class="founder-text">
                                            <span><?php echo $row['name_feedback'] ?></span>
                                            <p><?php echo $row['department_feedback'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
</main>

<?php include "./includes/footer.php"; ?>