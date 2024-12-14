<?php 
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Take A Look Texts</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Take A Look Texts</h3>
              <?php endif; ?>
            </div>
              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id_look_txt" value="<?php echo $id_look_txt; ?>">
                <div class="row">
                  <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <div class="row mb-4">
                          <div class="col-6">
                            <div class="d-block align-items-center align-self-start">
                              <div class="form-group">
                                <label class="text-primary mb-2">Title :</label>
                                <input type="text" class="form-control" name="title_look_txt" value="<?php echo htmlspecialchars($title_look_txt) ?>" placeholder="Enter Title ...">
                                <div class="text-danger mt-2"><?php echo $errors['title_look_txt'] ?></div>
                              </div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="d-block align-items-center align-self-start">
                              <div class="form-group">
                                <label class="text-primary mb-2">Sub Title :</label>
                                <input type="text" class="form-control" name="sub_title_look_txt" value="<?php echo htmlspecialchars($sub_title_look_txt) ?>" placeholder="Enter Sub Title ...">
                                <div class="text-danger mt-2"><?php echo $errors['sub_title_look_txt'] ?></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12">
                            <div class="d-flex align-items-center justify-content-around">
                              <?php if($update==true): ?>
                                <button name="update_look_txt" class="btn btn-primary">Update</button>
                              <?php else: ?>
                                <button name="save_look_txt" class="btn btn-primary">Save</button>
                              <?php endif; ?>
                                <button name="cansel_look_txt" class="btn btn-primary">Cansel</button>
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