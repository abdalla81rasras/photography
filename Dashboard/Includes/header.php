<?php 
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Styles.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>

    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo text-white" style="text-decoration: none;" href="index.php">Clever Mind</a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link text-primary">Navigation</span>
          </li>
          <li class="nav-category">
            <span class="nav-link" style="font-size: 13px;">Header & Footer</span>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-border-top"></i>
              </span>
              <span class="menu-title">Header</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_header.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_header.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-border-bottom"></i>
              </span>
              <span class="menu-title">Footer</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_footer.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_footer.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-category">
            <span class="nav-link" style="font-size: 13px;">Home Page</span>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image"></i>
              </span>
              <span class="menu-title">Image</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_image.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_image.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image-area-close"></i>
              </span>
              <span class="menu-title">Under Image</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_under_img.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_under_img.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-view-dashboard"></i>
              </span>
              <span class="menu-title">Grid Images</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_grid_imgs.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_grid_imgs.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image-filter"></i>
              </span>
              <span class="menu-title">Gallary</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_gallary.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_gallary.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic7" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-looks"></i>
              </span>
              <span class="menu-title">Take A Look Texts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic7">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_Takelook_texts.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_Takelook_texts.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic81" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image-multiple"></i>
              </span>
              <span class="menu-title">Take A Look Imges</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic81">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_Takelook_imgs.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_Takelook_img.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic8" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-comment-multiple-outline"></i>
              </span>
              <span class="menu-title">Feedback</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic8">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_feedback.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_feedback.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-category mb-1">
            <span class="nav-link" style="font-size: 13px;">About Page</span>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic9" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-information"></i>
              </span>
              <span class="menu-title">About</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic9">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_about.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_about.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic10" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-information-outline"></i>
              </span>
              <span class="menu-title">Our Mission</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic10">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_mission.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_mission.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-category">
            <span class="nav-link" style="font-size: 13px;">Gallary Page</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-image-multiple"></i>
              </span>
              <span class="menu-title">Gallary Images</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic11">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_gallaryInner.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_gallaryInner.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-category">
            <span class="nav-link" style="font-size: 13px;">Services Page</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic12" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Service</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic12">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_service.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_service.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <div class="dropdown-divider"></div>
          <li class="nav-category">
            <span class="nav-link" style="font-size: 13px;">Contact Page</span>
          </li>
          <li class="nav-item menu-items mb-2">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic13" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-phone"></i>
              </span>
              <span class="menu-title">Contact</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic13">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_contact.php">View All</a></li>
                <li class="nav-item"> <a class="nav-link" href="add_contact.php">Add New</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic14" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-send"></i>
              </span>
              <span class="menu-title">Form Contact</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic14">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="view_form_contact.php">View All</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>

      <div class="container-fluid page-body-wrapper">
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-50">
                <div class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" id="search" placeholder="Search">
                  <button class="btn btn-primary btn_search" onclick="return Search();"><i class="mdi mdi-magnify font-weight-bolder"></i></button>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <?php 
                    $select="SELECT * FROM `form_contact`";
                    $query=mysqli_query($conn , $select);
                    while($row=mysqli_fetch_assoc($query)):
                  ?>
                    <div class="dropdown-divider"></div>
                    <a href="view_form_contact.php" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-calendar text-primary"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1"><?php echo $row['name_form'] ?></p>
                        <p class="text-muted ellipsis mb-0"><?php echo $row['message_form'] ?></p>
                      </div>
                    </a>
                  <?php endwhile; ?>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/Website Logo.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Clever Mind</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>