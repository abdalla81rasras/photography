<?php 
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update About</h3>
              <?php else: ?>
                  <h3 class="page-title">Add About</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_about" value="<?php echo $id_about ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Email :</label>
                              <input type="email" class="form-control" name="email_about" value="<?php echo htmlspecialchars($email_about); ?>" placeholder="Enter Email ...">
                              <div class="text-danger mt-2"><?php echo $errors['email_about'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Name :</label>
                              <input type="text" class="form-control" name="name_about" value="<?php echo htmlspecialchars($name_about); ?>" placeholder="Enter Name ...">
                              <div class="text-danger mt-2"><?php echo $errors['name_about'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Department :</label>
                              <input type="text" class="form-control" name="department_about" value="<?php echo htmlspecialchars($department_about); ?>" placeholder="Enter Department ...">
                              <div class="text-danger mt-2"><?php echo $errors['department_about'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Major :</label>
                              <input type="text" class="form-control" name="major_about" value="<?php echo htmlspecialchars($major_about); ?>" placeholder="Enter Major ...">
                              <div class="text-danger mt-2"><?php echo $errors['major_about'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary">Description :</label>
                              <textarea class="form-control" name="description_about" rows="6" placeholder="Enter Description ..."><?php echo htmlspecialchars($description_about); ?></textarea>
                              <div class="text-danger mt-2"><?php echo $errors['description_about'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Experience :</label>
                              <input type="number" class="form-control" name="experience_about" onchange="leadingZeros(this)" min="0" value="<?php echo htmlspecialchars($experience_about); ?>" placeholder="Enter Number ...">
                              <div class="text-danger mt-2"><?php echo $errors['experience_about'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-4">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_about" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_about" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_about" class="btn btn-primary">Cansel</button>
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