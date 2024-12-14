<?php
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Sectiton Grid Images Home</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Sectiton Grid Images Home</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_grid_imgs" value="<?php echo $id_grid_imgs; ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Image 1 :</label>
                              <input type="file" accept="Image/*" name="img_grid_imgs1" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image 1">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_grid_imgs1'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_grid_imgs1'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_grid_imgs1 ?>" title="<?php echo $img_grid_imgs1 ?>" alt="<?php echo $img_grid_imgs1 ?>" style="width:100px; height: 100px;">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Image 2 :</label>
                              <input type="file" accept="Image/*" name="img_grid_imgs2" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image 2">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_grid_imgs2'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_grid_imgs2'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_grid_imgs2 ?>" title="<?php echo $img_grid_imgs2 ?>" alt="<?php echo $img_grid_imgs2 ?>" style="width:100px; height: 100px;">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Image 3 :</label>
                              <input type="file" accept="Image/*" name="img_grid_imgs3" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_grid_imgs3'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_grid_imgs3'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_grid_imgs3 ?>" title="<?php echo $img_grid_imgs3 ?>" alt="<?php echo $img_grid_imgs3 ?>" style="width:100px; height: 100px;">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Title 1 :</label>
                              <input type="text" class="form-control" name="title_grid_imgs1" value="<?php echo htmlspecialchars($title_grid_imgs1); ?>" placeholder="Enter Title 1 ...">
                              <div class="text-danger mt-2"><?php echo $errors['title_grid_imgs1'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Title 2 :</label>
                              <input type="text" class="form-control" name="title_grid_imgs2" value="<?php echo htmlspecialchars($title_grid_imgs2); ?>" placeholder="Enter Title 2 ...">
                              <div class="text-danger mt-2"><?php echo $errors['title_grid_imgs2'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Title 3 :</label>
                              <input type="text" class="form-control" name="title_grid_imgs3" value="<?php echo htmlspecialchars($title_grid_imgs3); ?>" placeholder="Enter Title 3 ...">
                              <div class="text-danger mt-2"><?php echo $errors['title_grid_imgs3'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Sub Title 1 :</label>
                              <input type="text" class="form-control" name="sub_title_grid_imgs1" value="<?php echo htmlspecialchars($sub_title_grid_imgs1); ?>" placeholder="Enter Sub Title 1 ...">
                              <div class="text-danger mt-2"><?php echo $errors['sub_title_grid_imgs1'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Sub Title 2 :</label>
                              <input type="text" class="form-control" name="sub_title_grid_imgs2" value="<?php echo htmlspecialchars($sub_title_grid_imgs2); ?>" placeholder="Enter Sub Title 2 ...">
                              <div class="text-danger mt-2"><?php echo $errors['sub_title_grid_imgs2'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Sub Title 3 :</label>
                              <input type="text" class="form-control" name="sub_title_grid_imgs3" value="<?php echo htmlspecialchars($sub_title_grid_imgs3); ?>" placeholder="Enter Sub Title 3 ...">
                              <div class="text-danger mt-2"><?php echo $errors['sub_title_grid_imgs3'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_grid_imgs" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_grid_imgs" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_grid_imgs" class="btn btn-primary">Cansel</button>
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