<?php 
include "Includes/connection.php";
include "Includes/header.php";
?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">View All Section Image Home</h3>
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
                            <th>Sub Title</th>
                            <th>Title</th>
                            <th>Imge</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
                            $select="SELECT * FROM `image`";
                            $query=mysqli_query($conn , $select);
                            while($row=mysqli_fetch_assoc($query)):
                          ?>
                            <tr>
                              <td><?php echo $row['sub_title_image'] ?></td>
                              <td><?php echo $row['title_image'] ?></td>
                              <td>
                                <img src="Upload/<?php echo $row['img_image'] ?>" title="<?php echo $row['img_image'] ?>" alt="<?php echo $row['img_image'] ?>" height="65px" width="65px"/>
                              </td>
                              <td>
                                <a href="add_image.php?edit_image=<?php echo $row['id_image']; ?>" > <i class="mdi mdi-pencil font-weight-bold" style="font-size: 18px;" title="edit"></i> </a>
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