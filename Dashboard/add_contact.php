<?php
include "Includes/connection.php";
include "Includes/Process.php";
include "Includes/header.php";
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <?php if($update==true || $edit==true): ?>
                  <h3 class="page-title">Update Contact</h3>
              <?php else: ?>
                  <h3 class="page-title">Add Contact</h3>
              <?php endif; ?>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="id_contact" value="<?php echo $id_contact; ?>">
              <div class="row">
                <div class="col-xl-12 col-sm-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Address :</label>
                              <input type="text" class="form-control" name="address_contact" value="<?php echo htmlspecialchars($address_contact); ?>" placeholder="Enter Address ...">
                              <div class="text-danger mt-2"><?php echo $errors['address_contact'] ?></div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Email :</label>
                              <input type="email" class="form-control" name="email_contact" value="<?php echo htmlspecialchars($email_contact); ?>" placeholder="Enter Email ...">
                              <div class="text-danger mt-2"><?php echo $errors['email_contact'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col-6">
                          <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label class="text-primary mb-2">Phone Number :</label>
                              <input type="text" class="form-control" name="phone_contact" value="<?php echo htmlspecialchars($phone_contact); ?>" placeholder="Enter Phone Number ...">
                              <div class="text-danger mt-2"><?php echo $errors['phone_contact'] ?></div>
                            </div>
                          </div>
                        </div>
                      
                        <div class="col-6">
                         <div class="d-block align-items-center align-self-start">
                            <div class="form-group">
                              <label  class="text-primary mb-2">GPS Location :</label>
                              <iframe src="https://maps.google.com/maps?q=&ie=UTF8&iwloc=&output=embed" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                          </div>  
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="d-flex align-items-center justify-content-around">
                            <?php if($update==true): ?>
                              <button name="update_contact" class="btn btn-primary">Update</button>
                            <?php else: ?>
                              <button name="save_contact" class="btn btn-primary">Save</button>
                            <?php endif; ?>
                              <button name="cansel_contact" class="btn btn-primary">Cansel</button>
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