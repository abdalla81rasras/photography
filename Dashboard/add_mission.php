<?php 
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Our Mission</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Our Mission</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_mission" value="<?php echo $id_mission; ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-12">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Image :</label>
                              <input type="file" accept="Image/*" name="img_mission" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_mission'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_mission'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_mission ?>" title="<?php echo $img_mission ?>" alt="<?php echo $img_mission ?>" style="width:100px; height: 100px;">
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
                              <input type="text" class="form-control" name="title_mission1" value="<?php echo htmlspecialchars($title_mission1) ?>" placeholder="Enter Title ...">
                              <div class="text-danger mt-2"><?php echo $errors['title_mission1'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Title 2 :</label>
                              <input type="text" class="form-control" name="title_mission2" value="<?php echo htmlspecialchars($title_mission2) ?>" placeholder="Enter Title ...">
                              <div class="text-danger mt-2"><?php echo $errors['title_mission2'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Description 1:</label>
                              <textarea class="form-control" name="description_mission1" rows="6" placeholder="Enter Description ..."><?php echo htmlspecialchars($description_mission1); ?></textarea>
                              <div class="text-danger mt-2"><?php echo $errors['description_mission1'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Description 2 :</label>
                              <textarea class="form-control" name="description_mission2" rows="6" placeholder="Enter Description ..."><?php echo htmlspecialchars($description_mission2); ?></textarea>
                              <div class="text-danger mt-2"><?php echo $errors['description_mission2'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_mission" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_mission" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_mission" class="btn btn-primary">Cansel</button>
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