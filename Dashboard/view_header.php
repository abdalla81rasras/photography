<?php 
include "Includes/connection.php";
include "Includes/header.php"; 
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Header</h3>
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
                            <th>Name Tab</th>
                            <th>Image Tab</th>
                            <th>Image Logo</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `header`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td><?php echo $row['name_tab'] ?></td>
                              <td>
                                <img src="Upload/<?php echo $row['img_tab'] ?>" title="<?php echo $row['img_tab'] ?>" alt="<?php echo $row['img_tab'] ?>" height="65px" width="65px"/>
                              </td>
                              <td>
                                <img src="Upload/<?php echo $row['img_logo'] ?>" title="<?php echo $row['img_logo'] ?>" alt="<?php echo $row['img_logo'] ?>" height="65px" width="65px"/>
                              </td>
                              <td>
                                <a href="add_header.php?edit_header=<?php echo $row['id_header']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
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