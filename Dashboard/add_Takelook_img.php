<?php 
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Take A Look Image</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Take A Look</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_look_imgs" value="<?php echo $id_look_imgs; ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Image :</label>
                              <input type="file" accept="Image/*" name="img_look_imgs" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_look_imgs'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_look_imgs'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_look_imgs ?>" title="<?php echo $img_look_imgs ?>" alt="<?php echo $img_look_imgs ?>" style="width:100px; height: 100px;">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Title :</label>
                              <input type="text" class="form-control" name="title_look_imgs" value="<?php echo htmlspecialchars($title_look_imgs); ?>" placeholder="Enter Title ...">
                              <div class="text-danger mt-2"><?php echo $errors['title_look_imgs'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Year Prize :</label>
                              <input type="number" min="1800" max="2090" step="1" class="form-control" name="year_prize" value="<?php echo htmlspecialchars($year_prize); ?>" placeholder="Enter Year Prize ...">
                              <div class="text-danger mt-2"><?php echo $errors['year_prize'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_look_imgs" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_look_imgs" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_look_imgs" class="btn btn-primary">Cansel</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>  
          </div>

<?php include "Includes/footer.php"; ?>