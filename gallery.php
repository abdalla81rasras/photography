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
                                <h2>Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--? Gallery Area Start -->
        <section class="gallery-area about2 section-padding30 fix">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <?php 
                        $select="SELECT * FROM `gallary_inner`";
                        $query=mysqli_query($conn , $select);
                        while($row=mysqli_fetch_assoc($query)):
                    ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 gallery-areas">
                            <div class="gallery-box">
                                <div class="single-gallery">
                                    <div class="gallery-img" style="background-image: url(Dashboard/Upload/<?php echo $row['img_gallary_inner'] ?>);"></div>
                                    <div class="cap-icon">
                                        <a href="Dashboard/Upload/<?php echo $row['img_gallary_inner'] ?>" class="ti-fullscreen img-pop-up"></a>
                                    </div>
                                    <div class="g-caption">
                                        <h4><?php echo $row['title_gallary_inner'] ?></h4>
                                        <p><?php echo $row['sub_title_gallary_inner'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="gallery-btn text-center pt-100">
                            <button class="btn" id="load">Load more</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Gallery Area End -->
    </main>

<?php include "./includes/footer.php"; ?>