<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">

    <?php 
        $select="SELECT `name_tab`,`img_tab` FROM `header`";
        $query=mysqli_query($conn , $select);
        while($row=mysqli_fetch_assoc($query)):
    ?>
        <title><?php echo $row['name_tab'] ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="Dashboard/Upload/<?php echo $row['img_tab'] ?>">
    <?php endwhile; ?>

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/flaticon.css">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area header-transparent">
            <div class="main-header  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-1">
                            <div class="logo d-flex">
                                <audio src="./assets/audio/relaxed-vlog-131746.mp3" id="music-site" hidden></audio>
                                <button class="music mr-3 my-2" type="button" onclick="play()"><i class="fa fa-play"></i></button>
                                <?php 
                                    $select="SELECT `img_logo` FROM `header`";
                                    $query=mysqli_query($conn , $select);
                                    while($row=mysqli_fetch_assoc($query)):
                                ?>
                                    <a href="index.php" class="ml-3"><img src="Dashboard/Upload/<?php echo $row['img_logo'] ?>" alt="<?php echo $row['img_logo'] ?>"></a>
                                <?php endwhile; ?>
                                <button class="music ml-3 my-2" type="button" onclick="stop()"><i class="fa fa-stop"></i></button>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                            <li><a href="services.php">Services</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-20">
                                    <a href="contact.php" class="btn header-btn">Contact now</a>
                                </div>
                            </div>
                        </div>   
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Header End -->
</header>