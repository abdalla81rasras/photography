<?php  
include "./Dashboard/Includes/connection.php";
include "./includes/header.php";
?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- Services Area End -->
        <!--? Blog Ara Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <div class="row">
                    <?php
                        $select="SELECT * FROM `service`";
                        $query=mysqli_query($conn , $select);
                        while($row=mysqli_fetch_assoc($query)):
                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="single-team mb-60">
                                <div class="team-img">
                                    <img src="Dashboard/Upload/<?php echo $row['img_service'] ?>" alt="<?php echo $row['img_service'] ?>">
                                </div>
                                <div class="team-caption">
                                    <h3><?php echo $row['title_service'] ?></h3>
                                    <p><?php echo $row['sub_title_service'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <!-- Services Ara End -->
   
<?php include "./includes/footer.php"; ?>