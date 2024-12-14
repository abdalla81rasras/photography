<?php  
include "./Dashboard/Includes/connection.php";
include "./includes/header.php";
?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>About Us</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? About Area start -->
        <section class="about-area about2 section-padding30">
            <div class="container">
                <?php
                    $select="SELECT * FROM `about`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?>
                    <div class="row justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="about-caption2 mb-50">
                                <h3>HOW WE MAKE USER EXPERIENCES</h3>
                            <div class="send-cv">
                                <a href="#"><?php echo $row['email_about'] ?></a>
                            </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5">
                            <div class="about-caption mb-50">
                                <h3><?php echo $row['description_about'] ?></h3>
                                <p class="pera1"><span><?php echo $row['name_about'] ?></span> <?php echo $row['department_about'] ?></p>
                                <div class="experience">
                                    <div class="year">
                                        <span><?php echo $row['experience_about'] ?></span>
                                    </div>
                                    <div class="year-details"><p>YEARS OF<br> <?php echo $row['major_about'] ?> EXPERIENCE</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    endwhile;

                    $select="SELECT * FROM `mission`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                ?>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 col-md-9">
                            <div class="about2-img">
                                <img src="Dashboard/Upload/<?php echo $row['img_mission'] ?>" alt="<?php echo $row['img_mission'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-9">
                            <div class="about2-caption mb-70">
                                <h5><?php echo $row['title_mission1'] ?></h5>
                                <p><?php echo $row['description_mission1'] ?></p>
                            </div>
                            <div class="about2-caption">
                                <h5><?php echo $row['title_mission2'] ?></h5>
                                <p><?php echo $row['description_mission2'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
            <!--? Brand Shape  -->
            <div class="about-shape2 d-none d-xl-block">
                <img src="assets/img/gallery/about_shape2.png" alt="">
            </div>
        </section>
        <!-- About Area End -->
   
<?php include "./includes/footer.php"; ?>