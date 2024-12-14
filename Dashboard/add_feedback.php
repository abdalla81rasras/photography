<?php 
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Feedback</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Feedback</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_feedback" value="<?php echo $id_feedback; ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                           <div class="form-group">
                              <label class="text-primary mb-2">Name :</label>
                              <input type="text" class="form-control" name="name_feedback" value="<?php echo htmlspecialchars($name_feedback); ?>" placeholder="Enter Name ...">
                              <div class="text-danger mt-2"><?php echo $errors['name_feedback'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Upload Image :</label>
                              <input type="file" accept="Image/*" name="img_feedback" class="file-upload-default">
                              <div class="input-group">
                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                <span class="input-group-append">
                                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                </span>
                              </div>
                              <div class="text-danger mt-2"><?php echo $errors['img_feedback'] ?></div>
                              <?php if($edit==true): ?>
                                <div class="text-warning my-3"><?php echo $errors['edit_img_feedback'] ?></div>
                                <p class="text-primary font-weight-bold mr-1 d-inline">Old Image :  </p>
                                <img src="Upload/<?php echo $img_feedback ?>" title="<?php echo $img_feedback ?>" alt="<?php echo $img_feedback ?>" style="width:100px; height: 100px;">
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Description :</label>
                              <textarea class="form-control" name="description_feedback" rows="6" placeholder="Enter Description ..."><?php echo htmlspecialchars($description_feedback); ?></textarea>
                              <div class="text-danger mt-2"><?php echo $errors['description_feedback'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                           <div class="form-group">
                              <label class="text-primary mb-2">Department :</label>
                              <input type="text" class="form-control" name="department_feedback" value="<?php echo htmlspecialchars($department_feedback); ?>" placeholder="Enter Department ...">
                              <div class="text-danger mt-2"><?php echo $errors['department_feedback'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_feedback" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_feedback" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_feedback" class="btn btn-primary">Cansel</button>
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