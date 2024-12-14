<?php
include "Includes/connection.php";
include "Includes/header.php";
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Contact</h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-2">Table</h4>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `contact`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td><?php echo $row['address_contact'] ?></td>
                              <td><?php echo $row['email_contact'] ?></td>
                              <td><?php echo $row['phone_contact'] ?></td>
                              <td>
                                <a href="add_contact.php?edit_contact=<?php echo $row['id_contact']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
                              </td>
                            </tr>
                          <?php endwhile; ?> 
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php include "Includes/footer.php"; ?>