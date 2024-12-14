<?php 
include "Includes/connection.php";
include "Includes/header.php";
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All gallary Inner Page</h3>
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
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `gallary_inner`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td><?php echo $row['title_gallary_inner'] ?></td>
                              <td><?php echo $row['sub_title_gallary_inner'] ?></td>
                              <td>
                                <img src="Upload/<?php echo $row['img_gallary_inner'] ?>" title="<?php echo $row['img_gallary_inner'] ?>" alt="<?php echo $row['img_gallary_inner'] ?>" height="65px" width="65px"/>
                              </td>
                              <td>
                                <a href="add_gallaryInner.php?edit_gallary_inner=<?php echo $row['id_gallary_inner']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
                                <span class="font-weight-bold" style="font-size: 18px;"> | </span>      
                                <a href="add_gallaryInner.php?delete_gallary_inner=<?php echo $row['id_gallary_inner']; ?>" > <i class="mdi mdi-close-circle font-weight-bold" style="font-size: 18px;" title="delete"></i> </a>
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