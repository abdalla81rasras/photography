<?php 
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Footer</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Footer</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_footer" value="<?php echo $id_footer; ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Logo Footer :</label>
                              <input type="file" accept="Image/*" name="img_footer" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_footer'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_footer'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_footer ?>" title="<?php echo $img_footer ?>" alt="<?php echo $img_footer ?>" style="width:100px; height: 100px;">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-12">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Title Footer</label>
                              <textarea class="form-control" name="title_footer" rows="6" placeholder="Enter Title ..."><?php echo htmlspecialchars($title_footer); ?></textarea>
                              <div class="text-danger mt-2"><?php echo $errors['title_footer'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-12">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Social Accounts :</label>
                              <input type="text" class="form-control" name="facebook_footer" value="<?php echo htmlspecialchars($facebook_footer); ?>" placeholder="Enter Link Facebook ...">
                              <div class="text-danger mt-2"><?php echo $errors['facebook_footer'] ?></div>

                              <input type="text" class="form-control mt-4" name="twitter_footer" value="<?php echo htmlspecialchars($twitter_footer); ?>" placeholder="Enter Link Twitter ...">
                              <div class="text-danger mt-2"><?php echo $errors['twitter_footer'] ?></div>

                              <input type="text" class="form-control mt-4" name="globe_footer" value="<?php echo htmlspecialchars($globe_footer); ?>" placeholder="Enter Link globe ...">
                              <div class="text-danger mt-2"><?php echo $errors['globe_footer'] ?></div>

                              <input type="text" class="form-control mt-4" name="instagram_footer" value="<?php echo htmlspecialchars($instagram_footer); ?>" placeholder="Enter Link Instagram ...">
                              <div class="text-danger mt-2"><?php echo $errors['instagram_footer'] ?></div>
                            </div>
                          </div>
                        </div>  
                      </div>
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_footer" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_footer" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_footer" class="btn btn-primary">Cansel</button>
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