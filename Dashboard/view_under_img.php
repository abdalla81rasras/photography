<?php 
include "Includes/connection.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Section Under Image Home</h3>
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
                            <th>Email</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Major</th>
                            <th>Experience</th>
                            <th>Description</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `under_image`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td><?php echo $row['email_under_img'] ?></td>
                              <td><?php echo $row['name_under_img'] ?></td>
                              <td><?php echo $row['department_under_img'] ?></td>
                              <td><?php echo $row['major_under_img'] ?></td>
                              <td><?php echo $row['experience_under_img'] ?></td>
                              <td><?php echo $row['description_under_img'] ?></td>
                              <td>
                                <a href="add_under_img.php?edit_under_img=<?php echo $row['id_under_img']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
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